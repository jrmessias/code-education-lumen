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

        $view['letras'] = DB::select(DB::raw('SELECT DISTINCT(LEFT(apelido, 1)) AS inicial FROM pessoas ORDER BY apelido'));
        $view['pessoas'] = Pessoa::where('apelido', 'like', $letra . '%')->get();
        return view('agenda', $view);
    }

    public function adicionar()
    {
        $letras = DB::select(DB::raw('SELECT DISTINCT(LEFT(apelido, 1)) AS inicial FROM pessoas ORDER BY apelido'));

        return view('adicionar', compact('letras'));
    }

    public function busca(Request $request)
    {
        $busca = $request->input('busca');
        $view['letras'] = DB::select(DB::raw('SELECT DISTINCT(LEFT(apelido, 1)) AS inicial FROM pessoas ORDER BY apelido'));
        $view['pessoas'] = Pessoa::where('apelido', 'like', '%' . $busca . '%')->orWhere('nome', 'like', '%' . $busca . '%')->get();
        return view('busca', $view);
    }

    public function apagarContato($id, Request $request)
    {
        Pessoa::where('id', '=', $id)->delete();
        return redirect('/')->with('status', 'Contato apagado com sucesso!');
    }

    public function apagarTelefone($id, Request $request)
    {
        Telefone::where('id', '=', $id)->delete();
        return redirect('/')->with('status', 'Telefone apagado com sucesso!');
    }
}