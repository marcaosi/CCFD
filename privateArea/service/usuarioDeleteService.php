<?php
session_start();
include_once(dirname(__FILE__)."/../utils/Constraints.php");

$link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

$id = $_GET['id'];

if(!isset($id) || empty($id)){
    $_SESSION['msg_ccfd'] = array('msg' => 'Obrigatório Código De Usuário Para Excluir.', 'type' => 'danger');
    header("location:$urlBase".'privateArea/view/administrador/manageUser.php');
    die();
}

$query = "DELETE FROM usuario WHERE id=$id";

if(mysqli_query($link, $query)){
    $_SESSION['msg_ccfd'] = array('msg' => 'Registro Excluído Com Sucesso.', 'type' => 'success');
}else{
    $_SESSION['msg_ccfd'] = array('msg' => 'Impossível Excluir Registro No Momento. Tente Novamente Mais Tarde.', 'type' => 'danger');
}

header("location:$urlBase".'privateArea/view/administrador/manageUser.php');