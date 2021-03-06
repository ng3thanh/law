<?php

namespace App\Http\Controllers\Auth;

use App\Models\Logo;
use Sentinel;
use Centaur\AuthManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Centaur\Dispatches\BaseDispatch;

class SessionController extends Controller
{
    protected $authManager;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(AuthManager $authManager)
    {
        $this->middleware('sentinel.guest', ['except' => 'getLogout']);
        $this->authManager = $authManager;
        $this->logo = Logo::all()->first();
    }

    /**
     * Show the Login Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        return view('Centaur::auth.login')->with('logo', $this->logo);
    }

    /**
     * Handle a Login Request
     *
     * @param Request $request
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        // Validate the Form Data
        $this->validate($request, ['email' => 'required', 'password' => 'required']);

        // Assemble Login Credentials
        $credentials = ['email' => trim($request->get('email')), 'password' => $request->get('password'),];
        $remember = (bool)$request->get('remember', false);

        // Attempt the Login
        $result = $this->authManager->authenticate($credentials, $remember);
        $url = route('dashboard');
//        dd($url);
        // Return the appropriate response
        $path = session()->pull('url.intended', $url);
        return $result->dispatch($path);
    }

    /**
     * Handle a Logout Request
     *
     * @param Request $request
     * @return mixed
     */
    public function getLogout(Request $request)
    {
        // Terminate the user's current session.  Passing true as the
        // second parameter kills all of the user's active sessions.
        $result = $this->authManager->logout(null, null);

        // Return the appropriate response
        $url = route('dashboard');
        return $result->dispatch($url);
    }
}
