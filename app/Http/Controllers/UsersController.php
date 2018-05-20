<?php

namespace App\Http\Controllers;

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

        return redirect() -> route('users.index'); //TODO: change this redirect to the rides page or login page.
    }

    public function index() {
        $users = User::all();
        return \response($users); //TODO: This is only accessible to admins
    }
}
