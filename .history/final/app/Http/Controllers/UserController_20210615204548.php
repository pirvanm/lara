<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function  cautareComanda()
    {
        $users = DB::table('users')


            ->get();
    }


    public function adaugaFormular(Request $request)
    {
        $getTitle = $request->title;
        // dd($getTitle);
        dd($request->all());
    }
    public function adaugaComenzi(Request $request)
    {
        return view('users.add_order');

        // luam datele din formular 

        //   dd($request->all());

        DB::table('comenzi')->insert(
            [
                [
                    'produs' => 'ca nu am inspiratie', 'categorie_produs' => 5,
                    "adresa" => 'adresa scurta'
                ],

            ]
        );
    }

    public function addOrder()
    {
        dd('metoda de adaugare comanda');
    }
    public function index()
    {
        // EXEMPLU STATIC
        // $valoareaCautata = 'S';
        //https://laravel.com/docs/8.x/queries#ordering
        // dd('aici'); pentru a vedea unde 
        $users = DB::table('orders')
            // ->orderBy('status')
            // where( 'coloana' , 'like', 'caracterul cerut sau caracterele')
            ->where(
                'status',
                'like',
                '%S%'
            )
            ->get();
        // cum aflua ce campuri am  tabela orders ?
        // dd($users);
        // dd($users->first());
        return view('users.index', ['users' => $users]);
    }
}
