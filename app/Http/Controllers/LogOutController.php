<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LogOutController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::logout(); // Clear the authentication session

        // Redirect the user to the login page
        return redirect('/loginUser')->with('status', 'Logged out successfully');
    }

    
}


