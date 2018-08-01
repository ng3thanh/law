<?php

namespace App\Services;

use App\Repositories\Feedbacks\FeedbacksRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Exception;

class FeedbackService
{
    /**
     * @var FeedbacksRepositoryInterface
     */
    protected $feedbacksRepository;

    /**
     * FeedbackService constructor.
     * @param FeedbacksRepositoryInterface $feedbacksRepository
     */
    public function __construct(
        FeedbacksRepositoryInterface $feedbacksRepository
    ) {
        $this->feedbacksRepository = $feedbacksRepository;
    }

    /**
     * @param $data
     * @return bool
     */
    public function createFeebackFromCustomer($data)
    {
        try {
            DB::beginTransaction();

            $data = formatDataBaseOnTable('feedbacks', $data);
            $this->feedbacksRepository->create($data);

            DB::commit();
            return true;
        } catch (Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            logger(__METHOD__ . $e->getMessage());
            return false;
        }
    }
}