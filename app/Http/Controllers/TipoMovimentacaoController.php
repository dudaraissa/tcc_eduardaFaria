<?php

namespace App\Http\Controllers;

use App\Models\TipoMovimentacao;
use Illuminate\Http\Request;

class TipoMovimentacaoController extends Controller
{
    public function index()
    {
        $tiposMovimentacao = TipoMovimentacao::all();
        return view('tipo_movimentacao.index', compact('tiposMovimentacao'));
    }

    public function create()
    {
        return view('tipo_movimentacao.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:7',
        ]);

        TipoMovimentacao::create($request->all());
        return redirect()->route('tipo_movimentacao.index')->with('success', 'Tipo de movimentação criado com sucesso!');
    }

    public function edit(TipoMovimentacao $tipoMovimentacao)
    {
        return view('tipo_movimentacao.edit', compact('tipoMovimentacao'));
    }

    public function update(Request $request, TipoMovimentacao $tipoMovimentacao)
    {
        $request->validate([
            'descricao' => 'required|string|max:7',
        ]);

        $tipoMovimentacao->update($request->all());
        return redirect()->route('tipo_movimentacao.index')->with('success', 'Tipo de movimentação atualizado com sucesso!');
    }

    public function destroy(TipoMovimentacao $tipoMovimentacao)
    {
        $tipoMovimentacao->delete();
        return redirect()->route('tipo_movimentacao.index')->with('success', 'Tipo de movimentação deletado com sucesso!');
    }
}
