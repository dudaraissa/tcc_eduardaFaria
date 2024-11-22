<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <title>Editar Tipo de Movimentação</title>
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
                <img src="{{ asset('tema/assets/img/logoPad.png') }}" alt="quitandas da lê" style="width: 55px; height: 45px;">
                quitandas da lê
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="dashboard">
                        <p>Início</p>
                    </a>
                </li>
                <li>
                    <a href="perfil">
                        <p>Perfil Usuário</p>
                    </a>
                </li>
                <li>
                    <a href="produtos">
                        <p>Cadastrar Produtos</p>
                    </a>
                </li>
                <li>
                    <a href="fornecedores">
                        <p>Listar Fornecedores</p>
                    </a>
                </li>
                <li>
                    <a href="funcionarios">
                        <p>Cadastrar Funcionário</p>
                    </a>
                </li>
                <li>
                    <a href="relatorios">
                        <p>Relatórios</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4 text-primary">Editar Tipo de Movimentação</h1>

        <form action="{{ route('tipo_movimentacao.update', $tipoMovimentacao) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" value="{{ $tipoMovimentacao->descricao }}" required maxlength="7">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('tipo_movimentacao.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
