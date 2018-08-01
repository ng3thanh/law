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

    public function countFeedback()
    {
        $data = $this->feedbacksRepository->countAll();
        return $data;
    }

    public function getPaginateFeedback($limit)
    {
        $data = $this->feedbacksRepository->getDataOrderBy('created_at')->paginate($limit);
        return $data;
    }

    public function getFeedbackRelated($id)
    {
        $feedbackCheck = $this->feedbacksRepository->find($id);
        $data = $this->feedbacksRepository->getFeedbackRelatedMail($feedbackCheck->mail);
        $result = [];
        foreach ($data as $key => $value) {
            $date = date('Y-m-d', strtotime($value->created_at));
            $result[$date][] = $value;
        }
        return $result;
    }
}