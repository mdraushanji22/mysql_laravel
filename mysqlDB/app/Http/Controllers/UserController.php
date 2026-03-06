<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function users()
    {
        $user = DB::select('select * from user');
        return view('user', ['users' => $user]);
    }
}
