<?php $urlBase = "http://localhost/CCFD/"; ?>
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
				        <li><a href="#" class="active-link-menu">Home</a></li>
				        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O Clube <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Diretoria</a></li>
                            <li><a target="_blank" href="<?=$urlBase ?>docs/Estatuto.pdf">Estatuto</a></li>
                            <li><a href="#">História</a></li>
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
                    <li><a href="#">História</a></li>
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

    <div class="container-fluid">
    	<div class="row banner">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="<?=$urlBase?>img/Banner.png" alt="Temporada de Verão">
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row content">
    		<div class="col-xs-12">
    			<p class="title-page">Conheça o Clube</p>
    		</div>
    	</div>
    	<div class="row content">
    		<a href="<?=$urlBase ?>estrutura/academia" class="col-xs-12 col-sm-3 bloco-index">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/academia.png" alt="Academia">
    			</p>
    			<p>
    				Academia
    			</p>
    			<p>
    				Bem-estar e qualidade de vida. A academia prórpia do clube é o local para quem quer cuidar do corpo e da mente. Conheça o espaço.
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>estrutura/salaoSocial" class="col-xs-12 col-sm-3 bloco-index bloco-index-center">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/festa.png" alt="Salão Social">
    			</p>
    			<p>
    				Salão Social
    			</p>
    			<p>
    				Torne seu evento inesquecível. O salão social já faz parte da tradição de Pouso Alegre e pode marcar seus eventos
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>estrutura/parqueAquatico" class="col-xs-12 col-sm-3 bloco-index pull-right">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/nadar.png" alt="Parque Aquático">
    			</p>
    			<p>
    				Parque Aquático
    			</p>
    			<p>
    				Espaço para crianças e adultos e muita segurança para curtir os dias de sol e aproveitar o melhor do verão.
    			</p>
    		</a>
    	</div>
    	<div class="row content">
    		<a href="<?=$urlBase ?>estrutura/quadra" class="col-xs-12 col-sm-3 bloco-index">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/quadra.png" alt="Esportes">
    			</p>
    			<p>
    				Esportes
    			</p>
    			<p>
    				O esporte estimula o convívio social e melhora a qualidade de vida das pessoas. Conheça a programação para crianças e adultos e venha participar das atividades.
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>estrutura/sauna" class="col-xs-12 col-sm-3 bloco-index bloco-index-center">
    			<div class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/sauna.png" alt="Sauna">
    			</div>
    			<p>
    				Sauna
    			</p>
    			<p>
    				Você sabia que o hábito de frequentar a sauna promove o relaxamento do corpo aumentando a sensação de bem-estar?
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>estrutura/churrasqueiras" class="col-xs-12 col-sm-3 bloco-index pull-right">
    			<div class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/churrasco.png" alt="Estrutura">
    			</div>
    			<p>
    				Estrutura
    			</p>
    			<p>
    				Contato com a natureza e tranquilidade. Áreas esprotivas, playground, churrasqueiras, área para jogos e pequeno pesqueiro esportivo são algumas atrações do CCFD.
    			</p>
    		</a>
    	</div>
    </div>

    <div class="container-fluid">
        <div class="row content banner-rodape">
            <div class="col-xs-12">
                <img src="<?=$urlBase ?>img/BannerRod.png" alt="Banner Rodapé" class="img-responsive">
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row content">
            <div class="col-xs-12 col-sm-4 text-center">
                <a href="<?=$urlBase ?>"><img src="<?=$urBase ?>img/Logo-Footer.png" alt="Logo Rodapé" class="img-responsive" style="margin:0 auto;"></a>
            </div>
            <div class="col-sm-8 text-right hidden-xs">
                <address>
                    <br>
                    Rodovia Juscelino Kubitscheck de Oliveira, s/n - Ipiranga, Pouso Alegre/MG
                </address>
                <p>
                    35 3422.5020
                </p>
                <small>
                    Copyright &copy; 2016 CCFD - CLUBE DE CAMPO FERNÃO DIAS - Todos os direitos reservados
                </small>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=$urlBase ?>js/bootstrap.min.js"></script>
  </body>
</html>