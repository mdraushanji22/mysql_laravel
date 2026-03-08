<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function users()
    {
        $users = DB::select('select * from user');

        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $data = json_decode($response->body());

        return view('user', ['users' => $users, 'data' => $data]);
    }
}
