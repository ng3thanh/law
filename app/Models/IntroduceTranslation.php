<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class IntroduceTranslation extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'content'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'introduces_translate';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = true;
}
