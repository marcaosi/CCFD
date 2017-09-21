<?php
include_once(dirname(__FILE__).'/../utils/Constraints.php');
$auth = false;

if(isset($_SESSION['user_ccfd'])){
    $auth = true;
}

if(!$auth){
    $_SESSION['msg_ccfd'] = array('msg'=>'Apenas Usuários Logados Podem Acessar a Página Solicitada.', 'type'=>'danger');
    header("location:".$urlBase.'privateArea/view/login.php');
}