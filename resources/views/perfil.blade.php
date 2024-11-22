<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Perfil</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/demo/demo.css')}}" rel="stylesheet" />

  <style>
    /* Custom styling */
    body {
      background-color: #8B4513; /* Fundo marrom */
    }

    .section-border {
      border-top: 1px solid #fff; /* Ajuste de cor para combinar com o fundo */
      margin-top: 20px;
      margin-bottom: 20px;
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
              <li class="active"><a href="perfil"><p>Perfil Usuário</p></a></li>
              <li><a href="produtos"><p>Cadastrar Produtos</p></a></li>
              <li><a href="fornecedores"><p>Cadastrar Fornecedor</p></a></li>
              <li><a href="register"><p>Cadastrar Funcionário</p></a></li>
              <li><a href="relatorios"><p>Estoque</p></a></li>
              <li><a href="movimentacao"><p>Movimentação</p></a></li>
              <li><a href="tipo_movimentacao"><p>Tipo de Movimentação</p></a></li>
            </ul>
          </div>

        </div>

    <!-- Main Content -->
    <div class="main-panel">
      <div class="content">
        <div class="profile-header text-center">
          <h1>{{ auth()->user()->name }}</h1>
        </div>

        <div class="form-section text-center">
          @livewire('profile.update-profile-information-form')

          <div class="section-border"></div>

          @livewire('profile.update-password-form')
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="{{ asset('tema/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/paper-dashboard.min.js?v=2.0.1')}}"></script>
</body>

</html>
