<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddUserController extends Controller
{
    // add user
    public function add_Users(Request $req)
    {
        $user = DB::table('crud__operation')->insert([
            'name' => $req->name,
            'city' => $req->city,
            'email' => $req->email,
            'age' => $req->age,

        ]);

        if ($user) {
            return redirect()->route('home');
        }
    }

    // display user

    public function displayUser()
    {
        $user = DB::table('crud__operation')->get();
        return view('allUsrs', ['data' => $user]);
    }

    // update user
    public function updateUser(Request $req)
    {
        $user = DB::table('crud__operation')
            ->where('id', $req->id)
            ->update([
                'name' => $req->name,
                'city' => $req->city,
                'email' => $req->email,
                'age' => $req->age,

                'updated_at' => $req->date(''),
            ]);
        if ($user) {
            return redirect()->route('displayUser');
        }
    }

    //delete user 
    public function  delete_user(string $id)
    {
        $user = DB::table('crud__operation')
            ->where('id', $id)->delete();
        if ($user) {
            return redirect()->route('displayUser');
        }
    }
}
