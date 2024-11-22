<!DOCTYPE html>
<html lang="en">
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
    <title>Adicionar Fornecedor</title>
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
              <li class="active "><a href="dashboard"><p>Início</p></a></li>
              <li><a href="perfil"><p>Perfil Usuário</p></a></li>
              <li><a href="produtos"><p>Cadastrar Produtos</p></a></li>
              <li><a href="fornecedores"><p>Cadastrar Fornecedor</p></a></li>
              <li><a href="register"><p>Cadastrar Funcionário</p></a></li>
              <li><a href="relatorios"><p>Estoque</p></a></li>
              <li><a href="movimentacao"><p>Movimentação</p></a></li>
              <li><a href="tipo_movimentacao"><p>Tipo de Movimentação</p></a></li>
            </ul>
          </div>

        </div>
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Adicionar Fornecedor</h1>
                    <form action="{{ route('fornecedores.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" name="celular" placeholder="Celular" required>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="{{ route('fornecedores.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
