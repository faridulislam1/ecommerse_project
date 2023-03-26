<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function user(){
        return view('admin.user.add_user');
    }
    public function userRegisterer(Request $request){
        $request->validate([
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);
        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]);
        return back()->with('success','ures register successfully');
    }



}
