<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedbacks extends Model
{
    const UNREAD = 0;
    const READ = 1;
    const REPLY = 2;
    const DONE = 3;

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * Default value
     *
     * @var array
     */
    protected $attributes = [
        'status' => self::UNREAD,
    ];

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = true;
}
