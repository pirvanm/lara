<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function adaugaComenzi()
    {
        DB::table('comenzi')->insert(
            [
                [
                    'produs' => 'ca nu am inspiratie', 'categorie_produs' => 5,
                    "adresa" => 'adresa scurta'
                ],

            ]
        );
    }
    public function index()
    {
        $users = DB::table('orders')

            ->get();
        // dd($users->first());
        return view('users.index', ['users' => $users]);
    }
}
