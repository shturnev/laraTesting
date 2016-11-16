<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserDashController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');


    }
    public function index()
    {

        return view('user-dash.index');

    }
}
