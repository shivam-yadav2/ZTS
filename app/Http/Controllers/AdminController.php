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
                        return redirect('/')->with('success',"Admin Login Successfully!");
                    }
                  
                    return back()->with('error',"Invalid email or password");
    }
}
