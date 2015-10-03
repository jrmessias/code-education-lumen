<?php

namespace App\Http\Controllers;

use App\Entities\Telefone;
use App\Entities\Pessoa;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TelefoneController extends Controller
{

    public function create($id)
    {
        $pessoa = Pessoa::find($id);
        return view('telefone.create', compact('pessoa'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descricao' => 'required|min:3|max:255',
            'codpais' => 'required|min:2',
            'ddd' => 'required|min:2',
            'prefixo' => 'required|min:2',
            'sufixo' => 'required|min:2'
        ]);

        if($validator->fails())
        {
            return redirect()->route('telefone.create',['id' => $request->get('pessoa_id')])
                ->withErrors($validator)
                ->withInput();
        }

        $pessoa = Pessoa::find($request->get('pessoa_id'));

        $telefone = new Telefone();
        $telefone->fill($request->all());
        $telefone->pessoa()->associate($pessoa);
        $telefone->save();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));

        return redirect()->route('agenda.letra', ['letra' => $letra])->with('msg', 'Sucesso ao criar telefone');

    }

    public function edit($id){
        $telefone = Telefone::find($id);

        return view('telefone.edit', compact('telefone'));
    }

    public function update(Request $request, $id){

        $telefone = Telefone::find($id);

        $validator = Validator::make($request->all(), [
            'descricao' => 'required|min:3|max:255',
            'codpais' => 'required|min:2',
            'ddd' => 'required|min:2',
            'prefixo' => 'required|min:2',
            'sufixo' => 'required|min:2'

        ]);

        if($validator->fails())
        {
            return redirect()->route('telefone.edit',['id' => $request->get('id')])
                ->withErrors($validator)
                ->withInput();
        }

        $pessoa = Pessoa::find($telefone->pessoa_id );

        $telefone->fill($request->all());
        $telefone->pessoa()->associate($pessoa);
        $telefone->save();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));

        return redirect()->route('agenda.letra', ['letra' => $letra])->with('msg', 'Sucesso ao editar telefone');
    }

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