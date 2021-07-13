<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('persoane')->get();
        dd($users);
        return view('user.index', ['users' => $users]);
    }
}
