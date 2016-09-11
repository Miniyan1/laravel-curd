<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Psy\Util\Str;

class SearchController extends Controller
{
    function executeSearch(){
        $keywords = Input::get('keywords');

        $users = User::all();

        $searchUser =new \Illuminate\Database\Eloquent\Collection() ;

        foreach ($users as $u)
        {
            if(Str::contains(Str::lower($u->name), Str::lower($keywords)))
                $searchUser->add($u);
        }

            return View::make('serchUsers')->with('serchUsers',$searchUser);
    }
}
