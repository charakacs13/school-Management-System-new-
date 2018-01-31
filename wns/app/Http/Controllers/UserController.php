<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getLoggin()
    {
      return view('logUser');
    }

// user login
    public function loginUser(Request $request)
    {

      $this->validate($request, [
        'admition'=> 'required',
        'password'=> 'required'
      ]);

      $data = $request->only('admition','password');

      if(Auth::attempt($data)){
        if (Auth::user()->position=='student') {
          return view('stdHome');
        }
        else if (Auth::user()->position=='teacher') {
          return view('teaHome');
        }
        else if (Auth::user()->position=='admin') {
          return view('admHome');
        }
      }
      return redirect()->back()->with('message','Login Failed');
    }

    //student page
    public function getStuLog()
    {
      return view('stdHome');
    }

    //teacher page
    public function getTeaLog()
    {
      return view('teaHome');
    }
    //admin page
    public function getAdmLog()
    {
      return view('admHome');
    }

    public function logOut()
    {
      Auth::logout();
      Session::flush();
      return redirect('/')->with('message','Logged out');
    }
}
