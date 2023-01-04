<?php
//Model Observer Real Programmer
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Post;
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
    
    //to delete uncomment following
//     Post::whereId(1)->delete();
    
//    dd('done');
});

//Model Observer//
Route::get('product',[ProductController::class,'index']);

