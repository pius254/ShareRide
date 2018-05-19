<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Response;
use App\Http\Requests\UserFormRequest;
use App\User;

class UsersController extends Controller
{
  public function getCreate()
  {
    return view('layouts.signup');
  }

  public function postCreate(UserFormRequest $request)
  {
    $user = new User;
    $user -> name = $request -> get('first_name') . $request -> get('last_name');
    $user -> email = $request -> get('email');
    $user -> password = $request -> get('password');
    $user -> save();

    return Response::make('user added');
  }
}
