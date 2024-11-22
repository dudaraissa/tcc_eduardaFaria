<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Fornecedor;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with('fornecedor')->get();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $fornecedores = Fornecedor::all();
    return view('produtos.create', compact('fornecedores'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:45',
            'descricao' => 'required|string|max:60',
            'imagem' => 'required|string',
            'preco' => 'required|numeric',
            'total_estoque' => 'required|integer',
            'cod_barras' => 'required|string|max:45',
            'id_fornecedor' => 'required|exists:fornecedor,id',
        ]);

        Produto::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $fornecedores = Fornecedor::all();
        return view('produtos.edit', compact('produto', 'fornecedores'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:45',
            'descricao' => 'required|string|max:60',
            'imagem' => 'required|string',
            'preco' => 'required|numeric',
            'total_estoque' => 'required|integer',
            'cod_barras' => 'required|string|max:45',
            'id_fornecedor' => 'required|exists:fornecedor,id',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso!');
    }
}
