<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class BlogsTranslate extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'description', 'content'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs_translate';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = true;
}
