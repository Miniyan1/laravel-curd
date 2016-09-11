<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function index()
    {
        $users = User::paginate(8);
        return view('users.list', ['users' => $users]);
    }

    function create()
    {
        return view('users.create');
    }

    function login()
    {
            return view('users.login');

    }
function postLogin( Request $request)
    {
        if(Auth::attempt($request->only('email','password') ) ){

            return redirect()->intended(route('userlist'));
        }
        return redirect()->route('login')->with('message','<div class="alert alert-danger">Sorry!! Email or Password did not match..  </div>');

    }

    function store(Request $request)
    {
        User:: create($request->all());
        return redirect('users');
    }

    function edit($id)
    {

        $user = User::find($id);
        return view('users.edit', ['users' => $user]);
    }

    function update(Request $requests, $id)
    {
        $user = User::find($id);
        $user->update($requests->all());
        return redirect('users');

    }

    function logout(){

        Auth::logout();
        return redirect()->route('login');
    }



    function delete($id){
        $user= User::find($id);
        $user->delete();
        return ['status'=>'success', 'message'=> 'User Successfully Deleted'];

    }

    public function cookie(CookieJar $cookieJar, Request $request)
    {


            $cookieJar->queue(cookie('referrer',"miniyan", 45000));




    }
}
