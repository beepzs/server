<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class UserController extends Controller
{
    
    public function userList() 
    {
    	 return view('user');
    }	

    public function submitForm() {
    	DB::table('users')->insert([
            'name' => 'bipin',
            'email' => $_POST['email'],
            'password' => $_POST['pass'], // Encrypt the password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         $users = DB::table('users')->get();
 		return $view = view('user_list_refresh', ['userList' => $users])->render();
    }
}
