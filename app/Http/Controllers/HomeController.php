<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    function home(){
        $users = User::paginate(30);
        return view('users.home', ['users' => $users]);

    }

    function profile(){
       return view('users.profile');

    }


}
