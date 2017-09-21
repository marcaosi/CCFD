<?php
include_once('../../service/autorizacaoAssociadoService.php');

include_once('../../../includes/cabecalho_ccfd.php');

?>

<div class="container-fluid">
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
        <div class="col-xs-8 col-xs-offset-2">
            <h3 class="title-page-inside">Opções Particulares</h3><br>

            <ul>
                <li><a href="">Documento 1</a></li>
            </ul>
        </div>
    </div>
</div>



<?php

echo "<br><br><br><br><br><Br><br><br>";        

include_once('../../../includes/rodape_ccfd.php');