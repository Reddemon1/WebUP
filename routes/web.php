<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/Login',function(){
    return view('login');
});
Route::get('/Home',function(){
    return view('Home',[
        'model' => Auth::user(),
    ]);
});
Route::get('LoginProcess',[LoginController::class,'login'])->name('login');
