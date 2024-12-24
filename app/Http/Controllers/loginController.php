<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index(){

        return view('login');
    }

    public function store(Request $request){
        $username = $request->username;
        $password = $request->password;
        if($username === 'test' && $password === 'test'){
            session(['login' => true]);//membuat session login true
            return redirect()->route('dashboard');//jika login sukses, maka redirect ke halaman home

        }
        else{
           Session::flash('status', 'username atau password anda salah!');
            return redirect('login');
        }
    }

    public function logout(){
        Session::forget('login');
        return redirect('login');
    }
}
