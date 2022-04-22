<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class listcontroller extends Controller
{
    function show()
    {
        $data= user::all();
        return view('list',['users'=>$data]);

    }
}
