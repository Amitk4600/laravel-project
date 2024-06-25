<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        // Check if rememberme checkbox was checked
        if ($request->filled('rememberme')) {
            $cookie = cookie('email', $request->email);
            dd($cookie);
            return response()->cookie($cookie);
        }
        // }

        return; // Return nothing if rememberme is not checkedT
    }

    public function getCookie(Request $request)
    {
        $cookieValue = $request->cookie('email');
        return $cookieValue;
    }
}
