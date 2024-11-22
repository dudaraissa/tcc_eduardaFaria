<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use App\Models\Produto;
use App\Models\TipoMovimentacao;
use App\Models\User;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index()
    {
        $movimentacoes = Movimentacao::with(['produto', 'tipoMovimentacao', 'usuario'])->get();
        return view('movimentacao.index', compact('movimentacoes'));
    }
    
    public function create()
    {
        $usuarios = User::all(); // Recupera todos os usuários
        $produtos = Produto::all(); // Recupera todos os produtos
        $tiposMovimentacao = TipoMovimentacao::all(); // Recupera todos os tipos de movimentação

        return view('movimentacao.create', compact('usuarios', 'produtos', 'tiposMovimentacao'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'quantidade' => 'required|integer',
            'data_movimentacao' => 'required|date',
            'id_usuario' => 'required|exists:users,id',
            'id_produto' => 'required|exists:produto,id',
            'id_tipo_movimentacao' => 'required|exists:tipo_movimentacao,id',
        ]);

        Movimentacao::create($request->all());
        return redirect()->route('movimentacao.index')->with('success', 'Movimentação criada com sucesso!');
    }

    public function edit(Movimentacao $movimentacao)
    {
        $produtos = Produto::all();
        $tiposMovimentacao = TipoMovimentacao::all();
        return view('movimentacao.edit', compact('movimentacao', 'produtos', 'tiposMovimentacao'));
    }

    public function update(Request $request, Movimentacao $movimentacao)
    {
        $request->validate([
            'quantidade' => 'required|integer',
            'data_movimentacao' => 'required|date',
            'id_usuario' => 'required|exists:users,id',
            'id_produto' => 'required|exists:produto,id',
            'id_tipo_movimentacao' => 'required|exists:tipo_movimentacao,id',
        ]);

        $movimentacao->update($request->all());
        return redirect()->route('movimentacao.index')->with('success', 'Movimentação atualizada com sucesso!');
    }

    public function destroy(Movimentacao $movimentacao)
    {
        $movimentacao->delete();
        return redirect()->route('movimentacao.index')->with('success', 'Movimentação deletada com sucesso!');
    }
}
