<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Routing\Route;
use View;

class UsersController extends Controller
{
    public function create()
    {
        return view('layouts.signup');
    }

    public function store(UserFormRequest $request)
    {
        $user = new User;
        $user-> first_name = $request->get('first_name');
        $user-> last_name = $request->get('last_name');
        $user-> email = $request->get('email');
        $user -> phone_number = $request -> get('phone_number');
        $user -> username = $request -> get('username'); 
        $user->password = Hash::make($request->get('password'));
        $user->save();

        // return redirect() -> route('users.index'); 

        if ($user) {
            // return "Successfully Registered";
            return view('layouts.login');
        }

        return back()->withInputs();
    }

    public function index() {
        $users = User::all();
        return \response($users); //TODO: This is only accessible to admins
    }

    public function login() {
        return view('layouts.login');
    }

    public function postLogin(Request $request) {
        // dd($request -> get('email_username'));
        // dd($request -> get('password'));
        $data = $request->only('email_username','password');
        if (\Auth::attempt($data)) {
            return view('layouts.create_ride');
        }

        return back()->withInputs();
    }
}
