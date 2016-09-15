<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller{
	
    public function getLogin(){
        return view('admin.login.login');
    }

    public function checkLogin(LoginRequest $request){
    	$data_login = array(
			'username' => $request->txtUser, 
			'password' => $request->txtPass,
    	);
    	if (Auth::attempt($data_login)) {
            if(Auth::user()->level == 1){
                return redirect()->route('getlogin');
            }
            return redirect()->route('getadmin');
        }else{
        	return redirect()->back();
        }
    }

    public function getLogout(){
    	Auth::logout();
	    return redirect()->route('getlogin');
    }
    public function test(){
        dd(Auth::user());die;
    }
}
