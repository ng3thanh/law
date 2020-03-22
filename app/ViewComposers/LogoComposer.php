<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Logo;

class LogoComposer
{
    public $logo = [];

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->logo = Logo::orderBy('updated_at', 'desc')->first();
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
    }
}
