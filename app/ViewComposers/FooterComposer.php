<?php
namespace App\ViewComposers;

use App\Models\Logo;
use Illuminate\View\View;
use App\Models\Settings;

class FooterComposer
{
    public $footer = [];
    public $logo = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->logo = Logo::orderBy('updated_at', 'desc')->first();
        $this->footer = Settings::all()->groupBy('type');
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('logo', $this->logo);
        $view->with('footer', $this->footer);
    }
}
