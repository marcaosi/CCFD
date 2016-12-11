<?php $urlBase = "http://localhost/CCFD/"; ?>
<!-- Ola mUndo -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcos Antônio dos Santos, Soraya Olivieri Rezende">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clube de campo Fernão Dias</title>

    <!-- Bootstrap -->
    <link href="<?=$urlBase ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$urlBase ?>css/app.css" rel="stylesheet">
	<link href="<?=$urlBase ?>css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid faixa-topo">
    	<div class="row content">
    		<div class="col-xs-12 text-right">
				<small>Siga-nos nas redes sociais</small>
				<a href="http://www.facebook.com"><i class="fa fa-facebook-square fa-lg"></i></a>
				<a href="http://www.youtube.com"><i class="fa fa-youtube-square fa-lg"></i></a>
    		</div>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row content">
    		<div class="col-xs-12 col-sm-4">
    			<a href="<?=$urlBase ?>"><img class="img-responsive" src="<?= $urlBase ?>img/Logo.png" alt="Logo Menu" /></a>
    		</div>
    		<div class="hidden-xs col-sm-8">
    			<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header text-center">
                        <p class="text-center brand-menu visible-xs">
                            Menu
                        </p>
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				      <ul class="nav navbar-nav">
				        <li><a href="/" class="active-link-menu">Home</a></li>
				        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O Clube <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?=$urlBase ?>menu/diretoria.php">Diretoria</a></li>
                            <li><a target="_blank" href="<?=$urlBase ?>docs/Estatuto.pdf">Estatuto</a></li>
                            <li><a href="<?=$urlBase ?>menu/historia.php">História</a></li>
                            <li><a target="_blank" href="<?=$urlBase ?>docs/CodigoDisciplinar.pdf">Código Disciplinar</a></li>
                          </ul>
                        </li>
				        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estrutura <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?=$urlBase ?>menu/estrutura/academia.php">Academia</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/playground.php">Playground</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/campos.php">Campos de Futebol</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/ginasio.php">Ginásio</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/churrasqueiras.php">Churrasqueria</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/grutaEMirante.php">Gruta e Mirante</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/quadras.php">Quadras</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/lago.php">Lago</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/parqueAquatico.php">Parque Aquático</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/salaoSocial.php">Salão Social</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/sauna.php">Sauna</a></li>
                            <li><a href="<?=$urlBase ?>menu/estrutura/vestiarios.php">Vestiários</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="<?=$urlBase ?>menu/atividades.php">Atividades</a>
                        </li>
				        <li><a href="#">Eventos</a></li>
				        <li><a href="#">Fotos</a></li>
				        <li><a href="#">Contato</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
    		</div>
    	</div>
    </div>

    <div class="container-fluid menu-xs visible-xs">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header text-center">
                <p class="text-center brand-menu visible-xs">
                    Menu
                </p>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#" class="active-link-menu">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O Clube <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Diretoria</a></li>
                    <li><a target="_blank" href="<?=$urlBase ?>docs/Estatuto.pdf">Estatuto</a></li>
                    <li><a href="<?=$urlBase ?>menu/historia">História</a></li>
                    <li><a target="_blank" href="<?=$urlBase ?>docs/CodigoDisciplinar.pdf">Código Disciplinar</a></li>
                    <li><a href="#">Diretrizes</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estrutura <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?=$urlBase ?>estrutura/academia">Academia</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/playground">Playground</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/campos">Campos de Futebos</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/churrasqueiras">Churrasqueria</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/ginasio">Ginásio</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/parqueAquatico">Parque Aquático</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/salaoSocial">Salão Social</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/sauna">Sauna</a></li>
                    <li><a href="<?=$urlBase ?>estrutura/vestiarios">Vestiários</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atividades <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Bocha</a></li>
                    <li><a href="#">Futebol</a></li>
                    <li><a href="#">Tênis</a></li>
                    <li><a href="#">Muay Thai</a></li>
                    <li><a href="#">Pilates</a></li>
                    <li><a href="#">Judô</a></li>
                    <li><a href="#">Zumba</a></li>
                  </ul>
                </li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Fotos</a></li>
                <li><a href="#">Contato</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div>