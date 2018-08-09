<?php

use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::middleware('guest')->namespace('Web')->group(function () {
    Route::group(['middleware' => 'locale'], function() {
        Route::get('/', 'MainController@index')->name('main');

        // Send contact
        Route::post('feedback', 'FeedbacksController@store')->name('feedbacks.store');

        // Blogs
        Route::prefix('blogs')->group(function () {
            Route::get('list/', 'BlogsController@index')->name('blogs.index');
            Route::get('{slug}', 'BlogsController@show')->name('blogs.detail');
        });

        Route::get('change-language/{language}', 'MainController@changeLanguage')->name('user.change-language');
    });
});

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::prefix('management')->middleware('admin')->group(function () {
        Route::get('/', 'MainController@index')->name('dashboard');

        Route::resource('news', 'NewsController');
        Route::resource('user', 'UserController');

        // Contact
        Route::get('contact/index', 'ContactsController@index')->name('contact.index');
        Route::get('contact/show/{id}', 'ContactsController@show')->name('contact.show');

        // Introduce
        Route::resource('introduce', 'ServicesController');

        // Services
        Route::resource('services', 'ServicesController');

        // Blogs
        Route::resource('blog', 'BlogsController');
        Route::get('blog/copy/{id}', 'BlogsController@copy')->name('blog.copy');

        // Clients
        Route::resource('clients', 'ClientsController');

        // Settings
        // Slides
        Route::get('/slide/index', 'SettingsController@slideIndex')->name('slide.index');
        Route::post('/slide/store', 'SettingsController@slideStore')->name('slide.store');
        Route::get('/slide/choose/{id}', 'SettingsController@slideChoose')->name('slide.choose');

        // Footer
        Route::get('footer/index', 'SettingsController@footerIndex')->name('footer.index');
        Route::post('footer/update', 'SettingsController@footerUpdate')->name('footer.update');
        Route::post('footer/new', 'SettingsController@footerStore')->name('footer.store');

        // Introduce
        Route::get('introduce/index', 'SettingsController@introduceIndex')->name('introduce.index');
        Route::post('introduce/new', 'SettingsController@introduceStore')->name('introduce.store');
    });
});

Route::middleware('guest')->namespace('Auth')->group(function () {
    // Authorization
    Route::get('login', 'SessionController@getLogin')->name('auth.login.form');
    Route::post('login', 'SessionController@postLogin')->name('auth.login.attempt');
    Route::any('logout', 'SessionController@getLogout')->name('auth.logout');

    // Registration
    Route::get('register', 'RegistrationController@getRegister')->name('auth.register.form');
    Route::post('register', 'RegistrationController@postRegister')->name('auth.register.attempt');

    // Activation
    Route::get('activate/{code}', 'RegistrationController@getActivate')->name('auth.activation.attempt');
    Route::get('resend', 'RegistrationController@getResend')->name('auth.activation.request');
    Route::post('resend', 'RegistrationController@postResend')->name('auth.activation.resend');

    // Password Reset
    Route::get('password/reset/{code}', 'PasswordController@getReset')->name('auth.password.reset.form');
    Route::post('password/reset/{code}', 'PasswordController@postReset')->name('auth.password.reset.attempt');
    Route::get('password/reset', 'PasswordController@getRequest')->name('auth.password.request.form');
    Route::post('password/reset', 'PasswordController@postRequest')->name('auth.password.request.attempt');
});
