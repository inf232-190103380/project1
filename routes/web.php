<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;


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

Route::get('/main', function(){
    return view('main');
})->name('main');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('post/add', function(){
    DB::table('post')->insert([
        'title'=> 'My first title',
        'body'=> 'My first body' 
    ]);
});

Route::get('blog', [BlogController::class, 'index']);


