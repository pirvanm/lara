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
        // dd('aici'); pentru a vedea unde 
        $users = DB::table('orders')
            ->orderBy('status')
            ->get();
        // cum aflua ce campuri am  tabela orders ?
        // dd($users);
        // dd($users->first());
        return view('users.index', ['users' => $users]);
    }
}
