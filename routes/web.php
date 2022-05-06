<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;

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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'App\Http\Controllers\PagesController@home'
]);

Route::get('/test-email', function(){
    return new ContactMessageCreated('Pierre', 'dindjipierre77@gmail.com', 'Je vous remercie.');
});
    


Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'App\Http\Controllers\PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'App\Http\Controllers\ContactController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'App\Http\Controllers\ContactController@store'
]);

