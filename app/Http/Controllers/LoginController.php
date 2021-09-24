<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only(['email','password']))){
            return redirect('/Home');
        }else{
            echo 'gagal';
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->image = $request->file('image')->store('user-image');
        $user->save();
        return redirect('/Adduser');
    }
}
