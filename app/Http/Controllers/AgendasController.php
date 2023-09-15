<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendasController
{
    //FUNÇÃO PARA LISTAR
    public function index()
    {
        //$agendas = DB::select('SELECT id, name FROM agendas');
        //dd($agendas); //Imprime na tela e pausa o processamento (Parecido com vardump)

        $agendas = Agenda::all();
        //dd($agendas);

        return view('agendas.index')->with('agendas', $agendas);
    }

    public function show(Agenda $agenda)
    {
        return view('agendas.show')->with('agenda', $agenda);
    }

    public function create()
    {
        return view('agendas.create');
    }

    public function store(Request $request)
    {
        Agenda::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone')
        ]);

        return redirect('/agendas')->with('success', 'Contato cadastrado com sucesso!');
    }

    public function edit(Agenda $agenda)
    {
        return view('agendas.edit', compact('agenda'));
    }

    //FUNÇÃO PARA DAR UPDATE
    public function update(Request $request, Agenda $agenda)
    {
        $agenda->fill($request->all())->save();

        return redirect()->route('agendas.index')->with('success', 'Contato editado com sucesso!');
    }

    //FUNÇÃO PARA DELETAR
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('agendas.index')->with('success', 'Contato deletado com sucesso!');
    }
};