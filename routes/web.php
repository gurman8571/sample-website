<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//views
Route::view('add/blog','Blog/Add')->name('add.blog');

//blog routes
Route::controller(BlogController::class)->group(function(){


    Route::post('blog/create','Create')->name('blog.create');
    Route::get('blog/index', 'index')->name('index.blog');
    Route::get('blog/delete/{id}','Delete')->name('blog.delete');
    Route::get('blog/edit/{id}','Edit')->name('blog.edit');
    Route::post('blog/update','Update')->name('blog.update');
    Route::get('blog/change/staus/{id}','Change_status')->name('blog.status');

});
//user routes
Route::controller(UserController::class)->group(function(){



    Route::get('user/index', 'Index')->name('index.user');
    Route::get('user/delete/{id}','Delete')->name('user.delete');
    Route::get('user/edit/{id}','Edit')->name('user.edit');
    Route::post('user/update','Update')->name('user.update');
    Route::get('user/change/staus/{id}','Change_status')->name('user.status');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
