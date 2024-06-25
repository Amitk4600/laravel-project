<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerUser(Request $req)
    {
        // Validate incoming request data
        $validation = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Ensure email uniqueness in users table
            'password' => 'required|min:8',
        ]);
        if ($validation->fails()) {
            return redirect()->route('register_user')->withErrors($validation)->withInput();
        }

        $currentDateTime = date('Y-m-d H:i:s');
        $user = DB::table('registration')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password, // Store the hashed password
            'created_at' =>  $currentDateTime,
            'updated_at' =>  $currentDateTime,
        ]);

        // Check if user was successfully inserted
        if ($user) {
            return redirect()->route('register_user')->with('success', 'Registration successful! You can now log in.');
        } else {
            return redirect()->route('register_user')->with('error', 'Failed to register user. Please try again.');
        }
    }
}
