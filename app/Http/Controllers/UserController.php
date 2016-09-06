<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    function login()
    {
        return view('users.login');
    }


    function index()
    {
        $users = User::all();
        return view('users.list', ['users' => $users]);
    }

    function create()
    {

        return view('users.create');
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
}
