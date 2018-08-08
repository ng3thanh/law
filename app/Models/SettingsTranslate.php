<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class SettingsTranslate extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'value'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings_translate';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = true;
}

