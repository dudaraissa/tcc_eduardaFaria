<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/demo/demo.css')}}" rel="stylesheet" />
    <title>Adicionar Produto</title>
</head>
<body class="main-panel">
    <div class="wrapper ">
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
                    <li><a href="perfil"><p>Perfil Usuário</p></a></li>
                    <li class="active"><a href="produtos"><p>Cadastrar Produtos</p></a></li>
                    <li><a href="fornecedores"><p>Cadastrar Fornecedor</p></a></li>
                    <li><a href="funcionarios"><p>Cadastrar Funcionário</p></a></li>
                    <li><a href="relatorios"><p>Relatórios</p></a></li>
                </ul>
            </div>
        </div>

        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Adicionar Produto</h1>
                    <form action="{{ route('produtos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao" placeholder="Descrição" required>
                        </div>
                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="text" class="form-control" name="imagem" placeholder="Imagem" required>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="number" class="form-control" name="preco" placeholder="Preço" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="total_estoque">Total em Estoque</label>
                            <input type="number" class="form-control" name="total_estoque" placeholder="Total em Estoque" required>
                        </div>
                        <div class="form-group">
                            <label for="cod_barras">Código de Barras</label>
                            <input type="text" class="form-control" name="cod_barras" placeholder="Código de Barras" required>
                        </div>
                        <div class="form-group">
                            <label for="id_fornecedor">Fornecedor</label>
                            <select class="form-control" name="id_fornecedor" required>
                                @foreach ($fornecedores as $fornecedor)
                                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
