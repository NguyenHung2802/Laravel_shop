<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.users.login', [
            'title' => "Đăng nhập hệ thống!"
        ]);
    }

    public function store(Request $request){
        // dd($request->input());
        $this -> validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        if (Auth::attempt([
                'email' => $request -> input('email'),
                'password' => $request -> input('password')
            ], $request -> input('remember'))){
            // Đăng nhập thành công, chuyển sang trang admin
            return redirect()->back();
        }

        Session::flash('error', 'email hoặc mật khẩu không chính xác');

        return redirect() -> route('admin');
    }
}
