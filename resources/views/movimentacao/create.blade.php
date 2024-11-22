<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <title>Adicionar Movimentação</title>
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
    <div class="wrapper">
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
            <h1 class="mb-4 text-primary">Adicionar Movimentação</h1>

            <form action="{{ route('movimentacao.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" name="quantidade" class="form-control" required placeholder="Digite a quantidade">
                </div>

                <div class="form-group mb-3">
                    <label for="data_movimentacao" class="form-label">Data da Movimentação</label>
                    <input type="date" name="data_movimentacao" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="id_usuario" class="form-label">Usuário</label>
                    <select name="id_usuario" class="form-control" required>
                        <option value="" disabled selected>Selecione o usuário</option>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="id_produto" class="form-label">Produto</label>
                    <select name="id_produto" class="form-control" required>
                        <option value="" disabled selected>Selecione o produto</option>
                        @foreach($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="id_tipo_movimentacao" class="form-label">Tipo de Movimentação</label>
                    <select name="id_tipo_movimentacao" class="form-control" required>
                        <option value="" disabled selected>Selecione o tipo de movimentação</option>
                        @foreach($tiposMovimentacao as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->descricao }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Adicionar</button>
            </form>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
