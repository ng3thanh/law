<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Settings;

class FooterComposer
{
    public $footer = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
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
        $view->with('footer', $this->footer);
    }
}
