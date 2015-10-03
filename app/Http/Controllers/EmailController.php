<?php

namespace App\Http\Controllers;

use App\Entities\Email;
use App\Entities\Pessoa;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{

    public function create($id)
    {
        $pessoa = Pessoa::find($id);
        return view('email.create', compact('pessoa'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descricao' => 'required|min:3|max:255',
            'email' => 'required|email'
        ]);

        if($validator->fails())
        {
            return redirect()->route('email.create',['id' => $request->get('pessoa_id')])
                ->withErrors($validator)
                ->withInput();
        }

        $pessoa = Pessoa::find($request->get('pessoa_id'));

        $email = new Email();
        $email->fill($request->all());
        $email->pessoa()->associate($pessoa);
        $email->save();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));

        return redirect()->route('agenda.letra', ['letra' => $letra])->with('msg', 'Sucesso ao criar email');

    }

    public function edit($id){
        $email = Email::find($id);

        return view('email.edit', compact('email'));
    }

    public function update(Request $request, $id){

        $email = Email::find($id);

        $validator = Validator::make($request->all(), [
            'descricao' => 'required|min:3|max:255',
            'email' => 'required|email'
        ]);

        if($validator->fails())
        {
            return redirect()->route('email.edit',['id' => $request->get('id')])
                ->withErrors($validator)
                ->withInput();
        }

        $pessoa = Pessoa::find($email->pessoa_id );

        $email->fill($request->all());
        $email->pessoa()->associate($pessoa);
        $email->save();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));

        return redirect()->route('agenda.letra', ['letra' => $letra])->with('msg', 'Sucesso ao editar email');
    }

    public function delete($id)
    {
        $email = Email::find($id);
        $pessoa = $email->pessoa;
        return view('email.delete', compact('email', 'pessoa'));
    }

    public function destroy($id)
    {
        Email::destroy($id);
        return redirect()->route('agenda.index')->with('msg', 'Email apagado com sucesso!');
    }
}