<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function index()
    {
if(!Auth::check()){
    return redirect('loginUser');
}
      return view('/');
    }
}
