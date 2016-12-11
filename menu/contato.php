<?php require_once("../includes/cabecalho_ccfd.php"); ?>

<div class="container-fluid">
	<div class="row content">
		<div class="col-xs-10 col-xs-offset-1 page-inside">
			<h3 class="title-page-inside">Contato</h3>
			<form action="" method="post">
				<div class="row">
					<div class="col-xs-6 form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 form-group">
						<label for="email">E-mail:</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>
				
					<div class="col-xs-6 form-group">
						<label for="telefone">Telefone:</label>
						<input type="text" name="telefone" id="telefone" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 form-group">
						<label for="mensagem">Mensagem:</label>
						<textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 form-group">
						<button type="submit" class="btn btn-default pull-right">Enviar Mensagem</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	
	if(isset($_POST['nome'])){
		$mensagem = "<h4>Mensagem enviada do formulário de contato do site do CCFD.</h4><br><br>";
		$mensagem .= "<strong>Nome:</strong> " . $_POST['nome'] . "<br>";
		$mensagem .= "<strong>E-mail:</strong> " . $_POST['email'] . "<br>";
		$mensagem .= "<strong>Telefone:</strong> " . $_POST['telefone'] . "<br>";
		$mensagem .= "<strong>Mensagem:</strong> <br>" . $_POST['mensagem'] . "<br>";

		$to      = 'marcaosi2014@gmail.com';
		$subject = 'Contato do site';

		$headers = 'From: secretaria@ccfd.com.br' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(mail($to, $subject, $mensagem, $headers)){
			echo "<script>alert('Mensagem enviada com sucesso.')</script>";
		}else{
			echo "<script>alert('Impossível enviar a mensagem neste momento. Desculpe!')</script>";
		}
	}
	
 ?>

<?php require_once("../includes/rodape_ccfd.php"); ?>