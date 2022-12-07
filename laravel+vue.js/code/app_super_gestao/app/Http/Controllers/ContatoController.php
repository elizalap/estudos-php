<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function index()
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['title' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ];

        $feedbacks = [
            'required' => 'O campo precisa ser preenchido',
            'email.email' => 'O email informado não é válido'
        ];

        $request->validate($regras, $feedbacks);

        //$contato = new SiteContato();
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
