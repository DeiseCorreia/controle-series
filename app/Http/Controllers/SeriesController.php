<?php

namespace App\Http\Controllers;
use App\Serie;
use Illuminate\Http\Request;


class SeriesController extends Controller
{
    public function index(Request $request){
        $series =[
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD',
            'Loki',
            'Wanda Vision'
        ];
    
        return view('series.index',compact('series'));//procura na pasta series o arquivo index, o parametro que a view irá receber
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;

        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());

    }
}