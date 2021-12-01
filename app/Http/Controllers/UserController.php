<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'Korn';
        $users = array(
            "name" => "korn",
            "email" => "korn@gmail.com",
            "phone" => "1234567890"
        );
        return view('user', compact('name', 'users'));
    }
}
