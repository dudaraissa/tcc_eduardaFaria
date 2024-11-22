<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <title>Movimentações de Estoque</title>
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
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                    <img src="{{ asset('tema/assets/img/logoPad.png') }}" alt="quitandas da lê" style="width: 55px; height: 45px;">
                    quitandas da lê
                </a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li><a href="dashboard"><p>Início</p></a></li>
                    <li><a href="perfil"><p>Perfil Usuário</p></a></li>
                    <li><a href="produtos"><p>Cadastrar Produtos</p></a></li>
                    <li><a href="fornecedores"><p>Cadastrar Fornecedor</p></a></li>
                    <li><a href="register"><p>Cadastrar Funcionário</p></a></li>
                    <li><a href="relatorios"><p>Estoque</p></a></li>
                    <li class="active"><a href="movimentacao"><p>Movimentação</p></a></li>
                    <li><a href="tipo_movimentacao"><p>Tipo de Movimentação</p></a></li>
                </ul>
            </div>
        </div>

        <div class="container mt-5">
            <h1>Movimentações de Estoque</h1>
            <a href="{{ route('movimentacao.create') }}" class="btn btn-primary mb-3">Adicionar Movimentação</a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Data da Movimentação</th>
                        <th>Tipo de Movimentação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movimentacoes as $movimentacao)
                        <tr>
                            <td>{{ $movimentacao->id }}</td>
                            <td>{{ $movimentacao->produto->nome }}</td>
                            <td>{{ $movimentacao->quantidade }}</td>
                            <td>{{ $movimentacao->data_movimentacao }}</td>
                            <td>{{ $movimentacao->tipoMovimentacao->descricao }}</td>
                            <td>
                                <a href="{{ route('movimentacao.edit', $movimentacao) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('movimentacao.destroy', $movimentacao) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta movimentação?')">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
