<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Logo;

class HomeComposer
{
    public $policies = [];
    public $footerProducts = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->logo = Logo::all()->first();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('logo', end($this->logo));
    }
}
