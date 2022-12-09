<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Investment;
use App\Models\Message;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginAdmin(Request $request){

          if (Auth::guard('admin')->attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
            return Redirect('admin/dashboard')->with('message', 'Logged In Successfully....');
        }
        else{
            return Redirect()->back()->with('message', 'Invalid Login Details');
        }
    }

    public function dashboard()
    {
        $investments = Investment::all();
        $sum = Investment::sum('amount');
        return view('admin.dashboard', compact('investments','sum'));
    }

    public function invest()
    {
        return view('admin.invest.invest');
    }

    public function activities()
    {
        $activities = Investment::all();
        $sum = Investment::sum('amount');

        return view('admin.activities', compact('activities','sum'));
    }

    public function message()
    {
       // $messages = Message::all();
        $names1 = Message::where('name','Johnny')->first();
        $names2 = Message::where('name','Jena')->first();
        
        return view('admin.message', compact('names1','names2'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return Redirect('/admin')->with('message', 'Logged Out Successfully... ');
    }
}
