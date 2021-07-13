<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function  cautareComanda () {
        $users = DB::table('users')

          
                ->get();
    }

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
        $valoareaCautata = 'T '
        //https://laravel.com/docs/8.x/queries#ordering
        // dd('aici'); pentru a vedea unde 
        $users = DB::table('orders')
            ->orderBy('status')
            // where( 'coloana' , 'like', 'caracterul cerut sau caracterele')
            ->where('name', 'like', '$valoareaCautata%')
            ->get();
        // cum aflua ce campuri am  tabela orders ?
        // dd($users);
        // dd($users->first());
        return view('users.index', ['users' => $users]);
    }
}
