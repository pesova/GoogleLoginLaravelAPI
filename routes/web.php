<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');



Route::get('/home', 'HomeController@index')->name('home');

=======
// Auth::routes();

/**
 * Authentication Routes
 */
Route::get('/login', 'Auth\LoginController@storeOwnerLogin')->name('login');
Route::get('/register', 'Auth\RegisterController@storeOwnerRegister')->name('register');
Route::post('/login', 'Auth\LoginController@login'); //this will be changed in future to => store/login, user/login
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/logout', 'Auth\RegisterController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@home')->name('dashboard');
    Route::get('/customers', 'CustomerController@index')->name('customers');
    Route::get('/transactions', 'CustomerController@index')->name('transactions');
    Route::get('/stores', 'StoreController@index')->name('stores');
    Route::get('/analytics', 'AnalyticsController@index')->name('analytics');
    Route::get('/debts', 'DebtsController@index')->name('debts.reminder');
    Route::get('/broadcast', 'BroadcastController@index')->name('broadcast');
    Route::get('/settings', 'SettingsContrller@index')->name('settings');
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/assistants/add', 'AssistantsController@index')->name('assistants.add');
    Route::get('/complaint/new', 'ComplaintsController@index')->name('complaint.form');
    Route::get('/complaint', 'ComplaintsController@index')->name('complaint.log');
});
>>>>>>> 27ed514c4ce3a61d793f59989dcf3cb35870e54c
