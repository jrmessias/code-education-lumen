<?php

namespace App\Http\Controllers;

use App\Entities\Telefone;
use DB;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{

    public function delete($id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('telefone', 'pessoa'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index')->with('msg', 'Telefone apagado com sucesso!');
    }
}