<?php
include_once('../../service/autorizacaoAssociadoService.php');

include_once('../../../includes/cabecalho_ccfd.php');

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h3 class="title-page-inside">Alterar Minha Senha</h3><br>
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
            <div class="col-xs-6 col-xs-offset-3">
                <form action="<?= $urlBase ?>privateArea/service/updatePasswordService.php" method="post">
                    <div class="form-group">
                        <label for="inputSenhaOld">Senha Antiga:</label>
                        <input type="password" name="inputSenhaOld" id="inputSenhaOld" autofocus class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSenha">Nova Senha:</label>
                        <input type="password" name="inputSenha" id="inputSenha" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSenhaReType">Nova Senha Novamente:</label>
                        <input type="password" name="inputSenhaReType" id="inputSenhaReType" class="form-control">
                    </div>
                    <div class="form-group text-right">
                        <a href="<?=$urlBase ?>privateArea/view/associado/myAcc.php" class="btn btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php

echo "<br><br><br><br><br><Br><br><Br><Br><Br><br><br><br><br>";        

include_once('../../../includes/rodape_ccfd.php');
