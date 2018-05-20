<?php

namespace App\Http\Controllers;

use App\Http\Requests\RideFormRequest;
use App\Ride;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RidesController extends Controller
{
    public function create() {
        return \view('layouts.create_ride');
    }

    public function store(RideFormRequest $request) {
        $ride = new Ride;

        $ride -> origin = $request -> get('origin');
        $ride -> destination = $request -> get('destination');
        $ride -> capacity = $request -> get('capacity');

        $ride -> save();

        return redirect() -> route('rides.index');
    }

    public function index() {
        return Ride::all();
    }
}
