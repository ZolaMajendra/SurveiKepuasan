<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm() {
        return view('auth.adminlogin');
    }

    public function showEasLoginForm() {
        return view('auth.easadminlogin');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|min:6'
        ]);

        if($request->is_eas){
            $is_eas = 1;
        }
        else{
            $is_eas = 0;
        }

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password, 'is_eas' => $is_eas], $request->remember)){
            //var_dump($is_eas); die();
            if($is_eas == 1)
                return redirect()->intended(route('easadminhome'));
            else
                return redirect()->intended(route('adminhome'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    public function index() {
        return view('admin.home');
    }
}
