<?php
include_once(dirname(__FILE__).'/../utils/Constraints.php');
$auth = false;

if($_SESSION['user_ccfd']['tipo'] == 'administrador'){
    $auth = true;
}

if(!$auth){
    $_SESSION['msg_ccfd'] = array('msg'=>'Apenas Usuários Administradores Podem Acessar a Página Solicitada.', 'type'=>'danger');
    header("location:".$urlBase.'privateArea/view/login.php');
}