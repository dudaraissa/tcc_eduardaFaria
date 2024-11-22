<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <title>Editar Produto</title>
    <style>
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            height: 100%;
            padding: 48px 0 0;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .main-panel {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body class="main-panel">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="" class="simple-text logo-normal">
                <img src="{{ asset('tema/assets/img/logoPad.png') }}" alt="Logo" style="width: 55px; height: 45px;">
                quitandas da lê
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li><a href="dashboard"><p>Início</p></a></li>
                <li><a href="perfil"><p>Perfil do Usuário</p></a></li>
                <li class="active"><a href="produtos"><p>Produtos</p></a></li>
                <li><a href="fornecedores"><p>Fornecedores</p></a></li>
                <li><a href="funcionarios"><p>Funcionários</p></a></li>
                <li><a href="relatorios"><p>Relatórios</p></a></li>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <h1>Editar Produto</h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $produto->descricao }}" required>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="text" class="form-control" name="imagem" id="imagem" value="{{ $produto->imagem }}" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" name="preco" id="preco" value="{{ $produto->preco }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="total_estoque">Total em Estoque</label>
                <input type="number" class="form-control" name="total_estoque" id="total_estoque" value="{{ $produto->total_estoque }}" required>
            </div>
            <div class="form-group">
                <label for="cod_barras">Código de Barras</label>
                <input type="text" class="form-control" name="cod_barras" id="cod_barras" value="{{ $produto->cod_barras }}" required>
            </div>
            <div class="form-group">
                <label for="id_fornecedor">Fornecedor</label>
                <select class="form-control" name="id_fornecedor" id="id_fornecedor" required>
                    @foreach ($fornecedores as $fornecedor)
                        <option value="{{ $fornecedor->id }}" {{ $fornecedor->id == $produto->id_fornecedor ? 'selected' : '' }}>{{ $fornecedor->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
