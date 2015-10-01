<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class testeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = [
            '0' => '1',
            '1' => '2',
            '2' => '3',
            '3' => '4',
            '4' => '5'


        ];
        return view('teste.index',compact('notas'));
    }
    public function exemploNome(Request $request){


        return view ('exemplo.nome',['nome'=>$request]);

    }

}
