<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TbbarangController;
use App\Models\tbbarang;
use App\Models\User;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/Home',function(){
        return view('Home',[
            'model' => Auth::user(),
            'tbbarang' => tbbarang::all(),
        ]);
    });
});
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/Login',function(){
    return view('login');
});
Route::get('/Add',function(){
    return view('addbarang',[
        'tbbarang' => tbbarang::all(),
    ]);
});
Route::get('/Adduser',function(){
    return view('adduser',[
        'user' => User::all(),
    ]);
});
Route::resource('addbarang',TbbarangController::class);
Route::resource('adduser',LoginController::class);
Route::get('LoginProcess',[LoginController::class,'login'])->name('login');
Route::get('/Logout',[LoginController::class,'logout']);
