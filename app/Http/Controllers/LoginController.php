<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Cookie;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;

// class LoginController extends Controller
// {
//     function loginUsers(Request $req)

//     {

//         $user = DB::table('registration')
//             ->where('email', $req->email)
//             ->first();

//         session('id', $req->id);
//         $id =   session('id');

//         if ($user && $req->password === $user->password) {

//             if ($req->filled('rememberme')) {
//                 //     // Auth::loginUsingId($user-> $id, true);
//                 //     // Cookie::queue('userEmail', $req->email);
//                 //     // Cookie::queue('name', $req->name);
//                 // app(\App\Http\Controllers\CookieController::class)->setcookie();

//                 // }
//                 // $setCookie = setcookie('email', $req->email);
//                 // return response()->cookie($setCookie);
//                 // $cookieValue = $req->cookie('email');
//                 // return $cookieValue;
//                 // return;
//                 $cookie = cookie('Useremail', $req->email);
//                 // dd($cookie);
//                 if ($cookie) {

//                     return redirect('/')->withCookie($cookie);
//                 }else{
//                     $cookie = cookie()->forget('Useremail', $req->email);
//                     return redirect('/');
//                 }
//             }
//             return redirect('/');
//         } else {
//             return redirect('/loginUser');
//         }
//         return redirect('/loginUser');
//     }
// }

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showLoginform()
    {

        if (request()->cookie('Useremail')) {
            return redirect('/');
        }
    }
    public function loginUsers(Request $req)
    {

        $user = DB::table('registration')
            ->where('email', $req->email)
            ->first();

        if ($user && $req->password === $user->password) {
            if ($req->filled('rememberme')) {
                // Set cookie if "Remember me" checkbox is checked
                $cookie = cookie('Useremail', $req->email);
                return redirect('/')->withCookie($cookie);
            } else {
                // Clear cookie if "Remember me" checkbox is not checked
                $cookie = cookie()->forget('Useremail');
                return redirect('/')->withCookie($cookie);
            }
        } else {
            return redirect('/loginUser');
        }
        if ($req->cookie('Useremail')) {
            // If the cookie is set, redirect to the dashboard
            return redirect('/');
        }
    }
}
