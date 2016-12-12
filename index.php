<?php require_once("includes/cabecalho_ccfd.php"); ?>

    <div class="container-fluid">
    	<div class="row banner">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner slideshow-index" role="listbox">
			    <div class="item active">
			      <img class="img-responsive" src="<?=$urlBase?>img/Banner.png" alt="Temporada de Verão">
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
    		<a href="<?=$urlBase ?>menu/estrutura/academia.php" class="col-xs-12 col-sm-3 bloco-index">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/academia.png" alt="Academia">
    			</p>
    			<h4>
    				Academia
    			</h4>
    			<p>
    				Bem-estar e qualidade de vida. A academia prórpia do clube é o local para quem quer cuidar do corpo e da mente. Conheça o espaço.
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>menu/estrutura/salaoSocial.php" class="col-xs-12 col-sm-3 bloco-index bloco-index-center">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/festa.png" alt="Salão Social">
    			</p>
    			<h4>
    				Salão Social
    			</h4>
    			<p>
    				Torne seu evento inesquecível. O salão social já faz parte da tradição de Pouso Alegre e pode marcar seus eventos.
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>menu/estrutura/parqueAquatico.php" class="col-xs-12 col-sm-3 bloco-index pull-right">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/nadar.png" alt="Parque Aquático">
    			</p>
    			<h4>
    				Parque Aquático
    			</h4>
    			<p>
    				Espaço para crianças e adultos e muita segurança para curtir os dias de sol e aproveitar o melhor do verão.
    			</p>
    		</a>
    	</div>
    	<div class="row content">
    		<a href="<?=$urlBase ?>menu/estrutura/ginasio.php" class="col-xs-12 col-sm-3 bloco-index">
    			<p class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/quadra.png" alt="Esportes">
    			</p>
    			<h4>
    				Esportes
    			</h4>
    			<p>
    				O esporte estimula o convívio social e melhora a qualidade de vida das pessoas. Conheça a programação para crianças e adultos e venha participar das atividades.
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>menu/estrutura/sauna.php" class="col-xs-12 col-sm-3 bloco-index bloco-index-center">
    			<div class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/sauna.png" alt="Sauna">
    			</div>
    			<h4>
    				Sauna
    			</h4>
    			<p>
    				Você sabia que o hábito de frequentar a sauna promove o relaxamento do corpo aumentando a sensação de bem-estar?
    			</p>
    		</a>
    		<a href="<?=$urlBase ?>menu/estrutura/churrasqueiras.php" class="col-xs-12 col-sm-3 bloco-index pull-right">
    			<div class="img-bloco-index">
    				<img class="img-responsive icon-conheca-clube" src="<?=$urlBase ?>img/churrasco.png" alt="Estrutura">
    			</div>
    			<h4>
    				Estrutura
    			</h4>
    			<p>
    				Contato com a natureza e tranquilidade. Áreas esportivas, playground, churrasqueiras, área para jogos e pequeno pesqueiro esportivo são algumas atrações do CCFD.
    			</p>
    		</a>
    	</div>
    </div>

    <div class="container-fluid">
        <div class="row content banner-rodape">
            <div class="col-xs-12">
                <img src="<?=$urlBase ?>img/BannerRod.png" alt="Banner Rodapé" class="img-responsive hidden-xs">
                <img src="<?=$urlBase ?>img/associarmobile.png" alt="Associe-se" class="img-responsive visible-xs pull-center">
            </div>
        </div>
    </div>

<?php require_once("includes/rodape_ccfd.php"); ?>