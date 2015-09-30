<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;
use App\Entities\Telefone;
use DB;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index($letra = 'A')
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra . '%')->get();
        return view('agenda', compact('pessoas'));
    }

    public function adicionar()
    {
        return view('adicionar');
    }

    public function busca(Request $request)
    {
        $busca = $request->input('busca');
        $pessoas = Pessoa::where('apelido', 'like', '%' . $busca . '%')->orWhere('nome', 'like', '%' . $busca . '%')->get();
        return view('busca', compact('pessoas'));
    }
}