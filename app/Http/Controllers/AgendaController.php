<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;

class AgendaController extends Controller
{
    public function index($letra  = 'A'){

        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

}