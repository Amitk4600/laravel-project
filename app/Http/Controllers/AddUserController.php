<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddUserController extends Controller
{
    // add user
    public function add_Users(Request $req)

    {
        $user = DB::table('registration')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'created_at' => $req->date(''),
            'updated_at' => $req->date(''),
        ]);

        if ($user) {
            return redirect()->route('home');
        }
    }

    // display user

    public function display_User()
    {
        $id =   session('id');
  
        $user = DB::table('registration')->get();
        return view('allUsrs', ['data' => $user]);
    }

    // update user
    public function updateUser(Request $req)
    {    $currentDateTime = date('Y-m-d H:i:s');

        $id =   session('id');
        $user = DB::table('registration')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'updated_at' => $currentDateTime,
            ]);
        if ($user) {
            return redirect()->route('displayUser');
        }
    }

    //delete user 
    public function  delete_user(string $id)
    {
        $user = DB::table('registration')
            ->where('id', $id)->delete();
        if ($user) {
            return redirect()->route('displayUser');
        }
    }
}
