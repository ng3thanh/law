<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesTranslate extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'description', 'content'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services_translate';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = true;
}
