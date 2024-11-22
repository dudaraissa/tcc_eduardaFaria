<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Relatório
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('tema/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
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
              <li class="active"><a href="relatorios"><p>Estoque</p></a></li>
              <li><a href="movimentacao"><p>Movimentação</p></a></li>
              <li><a href="tipo_movimentacao"><p>Tipo de Movimentação</p></a></li>
            </ul>
          </div>

        </div>
     <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Relatório Produtos em Estoque</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Código
                      </th>
                      <th>
                        Nome
                      </th>
                      <th>
                        Descrição
                      </th>
                      <th class="text-right">
                        Quantidade
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>








        </div>
      </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('tema/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('tema/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('tema/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('tema/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('tema/assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('tema/assets/demo/demo.js')}}"></script>
</body>

</html>
