<?php
include_once('../../service/autorizacaoAssociadoService.php');

include_once('../../../includes/cabecalho_ccfd.php');

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h3 class="title-page-inside">Minha Conta</h3><br>

            <ul>
                <li><a href="<?=$urlBase?>privateArea/view/associado/updPassword.php">Alterar Minha Senha</a></li>
                <li><a href="<?=$urlBase?>privateArea/view/associado/updUser.php">Dados Cadastrais</a></li>
            </ul>
        </div>
    </div>
</div>



<?php

echo "<br><br><br><br><br><Br><br><Br><Br><Br><br><br><br><br>";        

include_once('../../../includes/rodape_ccfd.php');
