<?php
include_once(dirname(__FILE__).'/../utils/Constraints.php');
session_start();

$link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

$input = $_POST;
// var_dump($_POST);
// die();
$nome = addslashes($input['inputNome']);
$email = addslashes($input['inputEmail']);
$cpf = addslashes($input['inputCPF']);
$inscricao = addslashes($input['inputInscricao']);
$tipo = addslashes($input['inputTipo']);
$senha = md5($input['inputCPF']);
$isvalid = true;
$url = $urlBase."privateArea/view/administrador/manageUser.php";

if(!isset($nome) || empty($nome)){
    $_SESSION['msg_ccfd'] = array('msg' => 'Campo Nome Obrigatório.', 'type' => 'danger');
    $isvalid = false;
}

if(!isset($cpf) || empty($cpf)){
    $_SESSION['msg_ccfd'] = array('msg' => 'Campo CPF Obrigatório.', 'type' => 'danger');
    $isvalid = false;
}

if(!isset($inscricao) || empty($inscricao)){
    $_SESSION['msg_ccfd'] = array('msg' => 'Campo Inscrição Obrigatório.', 'type' => 'danger');
    $isvalid = false;
}

if(!isset($tipo) || empty($tipo)){
    $tipo = 'associado';
}

if($isvalid){
    $query = "INSERT INTO usuario(nome, email, senha, cpf, inscricao, tipo) VALUES('$nome', '$email', '$senha', '$cpf', '$inscricao', '$tipo');";
    // echo $query;
    if(mysqli_query($link, $query)){
        $_SESSION['msg_ccfd'] = array('msg' => 'Associado Salvo Com Sucesso.', 'type' => 'success');
        // echo "Salvo Com Sucesso.";
    }else{
        $_SESSION['msg_ccfd'] = array('msg' => 'Impossível Salvar Registro. Tente Novamente Mais Tarde.', 'type' => 'danger');
        $url = $urlBase."privateArea/view/administrador/addUser.php";
        // echo "Impossível Salvar Registro.";
    }
}else{
    $url = $urlBase."privateArea/view/administrador/addUser.php";
}

header("location:$url");