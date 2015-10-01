<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\ListaRepository as Lista;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $lista;

    public function __construct(Lista $lista){
        $this->lista = $lista;
    }
    public function index()
    {
        return view('form.index');
    }

    public function exemploNome(Request $request){
        $nome = $request['nome'];

        return view ('exemplo.nome',['nome'=>$nome]);

    }

    public function lista(){
        $listas = $this->lista->forData();

        return view('exemplo.lista',compact('listas'));
    }

    public function getContato(){
        return view ('form.contato');
    }
    public function postContato(Request $request){


        return view('exemplo.contato',[
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'idade'=>$request->idade,
            'cidade'=>$request->cidade

        ]);
    }
}
