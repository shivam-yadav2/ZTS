<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function loginCheck(Request $request){
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        $data=User::where('email',$request->email)
                    ->where('password',$request->password)
                    ->first();
                    if($data){
                        session()->put('name',$data->name);
                        session()->put('id',$data->id);
                        session()->put('email',$data->email);
                        return redirect()->intended('admin/dashboard')->with('success',"Admin Login Successfully!");
                    }
                    return back()->with('error',"Invalid email or password");
    }

    public function logout(Request $request){
        $request->session()->flush();

        // Redirect to login
        return redirect('admin/login')->with('success', 'Logged out successfully!');
    }
}
