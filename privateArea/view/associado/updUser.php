<?php
include_once('../../service/autorizacaoAssociadoService.php');

include_once('../../../includes/cabecalho_ccfd.php');

?>

<?php 
    $id = $_SESSION['user_ccfd']['id'];
    // if(!isset($id) || empty($id)){
    //     $_SESSION['msg_ccfd'] = array('msg' => 'Obrigatório Código De Usuário Para Alterar.', 'type' => 'danger');
    //     header("location:$urlBase".'privateArea/view/administrador/manageUser.php');
    //     die();
    // }

    $link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

    $query = "SELECT * FROM usuario WHERE id=$id";
    $result = mysqli_query($link, $query);
    $line = mysqli_fetch_assoc($result);
 ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h2>Alterar dados</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 text-center">
            <?php 
                if(isset($_SESSION['msg_ccfd']) && !empty($_SESSION['msg_ccfd']['msg'])){
                    echo "<p class='msg bg-".$_SESSION['msg_ccfd']['type']."'>".$_SESSION['msg_ccfd']['msg']."</p>";
                    unset($_SESSION['msg_ccfd']);
                }
             ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <form action="<?=$urlBase ?>privateArea/service/usuarioPutService.php" method="post">
                <input type="hidden" name="inputId" value="<?=$id?>">
                <div class="form-group">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" id="inputNome" name="inputNome" value="<?=$line['nome']?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" value="<?=$line['email']?>">
                </div>
                <div class="form-group">
                    <label for="inputCPF">CPF:</label>
                    <input type="text" class="form-control" id="inputCPF" readonly name="inputCPF" value="<?=$line['cpf']?>">
                </div>
                <div class="form-group">
                    <label for="inputInscricao">Inscrição:</label>
                    <input type="text" class="form-control" id="inputInscricao" readonly name="inputInscricao" value="<?=$line['inscricao']?>">
                </div>
                <div class="form-group text-right">
                    <a href="<?=$urlBase ?>privateArea/view/associado/myAcc.php" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

echo "<br><br><br><br><br><Br><br><Br><Br><Br><br><br><br><br>";        

include_once('../../../includes/rodape_ccfd.php');
