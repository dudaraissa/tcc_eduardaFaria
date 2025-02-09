<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('tema/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('tema/assets/demo/demo.css" rel="stylesheet')}}" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <head>
      <title>
        Cadastrar Produtos
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>Fonecedor</h1></div>
        </div>
        <div class="row">
              <div class="col-sm-3"><!--left col-->


          <div class="text-center">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Carregue uma foto diferente...</h6>
            <input type="file" class="text-center center-block file-upload">

          </div></hr><br>

            </div><!--/col-3-->
            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Cadastrar</a></li>
                    <li><a data-toggle="tab" href="#messages">Alterar</a></li>
                    <li><a data-toggle="tab" href="#settings">Excluir</a></li>
                  </ul>


              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                          <div class="form-group">

                              <div class="col-xs-12">
                                  <label for="first_name"><h4>Nome</h4></label>
                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" title="">
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-xs-12">
                                <label for="last_name"><h4>Código</h4></label>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" title="">
                              </div>
                          </div>

                          <div class="form-group">

                              <div class="col-xs-12">
                                  <label for="phone"><h4>Email</h4></label>
                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="" title="">
                              </div>
                          </div>

                          <div class="form-group">

                            <div class="col-xs-12">
                                <label for="phone"><h4>Celular</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="" title="">
                            </div>
                        </div>

                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                      <button class="btn btn-lg btn-success" type="submit">
                                        <i class="glyphicon glyphicon-ok-sign"></i> Cadastrar</button>
                                       <button class="btn btn-lg" type="reset">
                                        <i class="glyphicon glyphicon-repeat"></i> Resetar</button>
                                </div>
                          </div>

                      </form>

                  <hr>

                 </div><!--/tab-pane-->
                 <div class="tab-pane" id="messages">

                   <h2></h2>

                   <hr>
                   <form class="form" action="##" method="post" id="registrationForm">
                    <div class="form-group">

                        <div class="col-xs-12">
                            <label for="first_name"><h4>Nome</h4></label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" title="">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-12">
                          <label for="last_name"><h4>Código</h4></label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" title="">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-12">
                            <label for="phone"><h4>Email</h4></label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="" title="">
                        </div>
                    </div>

                    <div class="form-group">

                      <div class="col-xs-12">
                          <label for="phone"><h4>Celular</h4></label>
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="" title="">
                      </div>
                  </div>

                    <div class="form-group">
                         <div class="col-xs-12">
                              <br>
                                <button class="btn btn-lg btn-success" type="submit">
                                  <i class="glyphicon glyphicon-ok-sign"></i> Alterar</button>
                                 <button class="btn btn-lg" type="reset">
                                  <i class="glyphicon glyphicon-repeat"></i> Resetar</button>
                          </div>
                    </div>

                </form>
                 </div><!--/tab-pane-->
                 <div class="tab-pane" id="settings">


                      <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-12">
                                <label for="first_name"><h4>Nome</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" title="">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-12">
                              <label for="last_name"><h4>Código</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" title="">
                            </div>
                        </div>

                        <div class="form-group">
                             <div class="col-xs-12">
                                  <br>
                                    <button class="btn btn-lg btn-success" type="submit">
                                      <i class="glyphicon glyphicon-ok-sign"></i> Excluir</button>
                              </div>
                        </div>

                    </form>
                  </div>

                  </div><!--/tab-pane-->
              </div><!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->

</body>
<script>
$(document).ready(function() {
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".file-upload").on('change', function(){
    readURL(this);
});
});
</script>
</html>
