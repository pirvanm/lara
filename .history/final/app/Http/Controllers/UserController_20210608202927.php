<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function adaugaComenzi()
    {
        //dd('gol');
        DB::table('comenzi')->insert(
            [
                [
                    'produs' => 'produsnou', 'categorie_produs' => 5,
                    "adresa" => 'cevaa'
                ],
            ]
        );

       // return view('')
    }
    public function index()
    {
        $users = DB::table('orders')->get();
        // dd($users->first());
        return view('users.index', ['users' => $users]);
    }
}
