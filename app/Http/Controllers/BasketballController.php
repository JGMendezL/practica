<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BasketballController extends Controller
{
    //
    public function index()
    {   
        $players = $this->getData();
        return view('basketball/index',[
            'players' => $players
        ]);
    }

    private function getData(){
        $reponse = Http::get('https://www.balldontlie.io/api/v1/players');
        return $reponse->json()['data'];
    }
}
