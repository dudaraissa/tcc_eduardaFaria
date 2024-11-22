<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <title>Listar Fornecedores</title>
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
              <li class="active"><a href="fornecedores"><p>Cadastrar Fornecedor</p></a></li>
              <li><a href="register"><p>Cadastrar Funcionário</p></a></li>
              <li><a href="relatorios"><p>Estoque</p></a></li>
              <li><a href="movimentacao"><p>Movimentação</p></a></li>
              <li><a href="tipo_movimentacao"><p>Tipo de Movimentação</p></a></li>
            </ul>
          </div>

        </div>

    <div class="container mt-5">
        <h1>Fornecedores</h1>
        <a href="{{ route('fornecedores.create') }}" class="btn btn-success mb-3">Adicionar Fornecedor</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fornecedores as $fornecedor)
                <tr>
                    <td>{{ $fornecedor->nome }}</td>
                    <td>{{ $fornecedor->cnpj }}</td>
                    <td>{{ $fornecedor->email }}</td>
                    <td>{{ $fornecedor->celular }}</td>
                    <td>
                        <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este fornecedor?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
