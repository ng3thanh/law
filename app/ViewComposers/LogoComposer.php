<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Logo;

class LogoComposer
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
//        dd($this->logo->favicon);
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
