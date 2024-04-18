<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.users.login', [
            'title' => "Đăng nhập hệ thống!"
        ]);
    }

    public function store(Request $request){
        $this -> validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required|password:filter',
        ]);

        if ( Auth::attempt([
                'email' => $request -> input('email'),
                'password' => $request -> input('password')
            ], $request -> input('remember'))){

            return redirect()->route('admin');
        }

        return redirect()  -> back();
    }
}
