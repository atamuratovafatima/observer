<?php

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


Route::get('/', function () {
    return view('index');
});

Route::get('/email', function()
{
    $details['email'] = 'fatima.atamuratova@mail.ru';
    for($i = 1; $i <= 5; $i++){
        dispatch(new \App\Jobs\SendEmailTest($details))->delay(now()->addSeconds(5 * $i));
    }
    //return "Done!";
    dd('done');
});

Route::get('/product', 'ProductController@create');
Route::post('/product', 'ProductController@store');

