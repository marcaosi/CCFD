<?php
include_once(dirname(__FILE__).'/../utils/Constraints.php');

$link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

$input = $_POST;
// var_dump($_POST);
// die();
$id = $_SESSION['user_ccfd']['id'];
$senhaNew = md5($input['inputSenha']);
$senhaNewReType = md5($input['inputSenhaReType']);
$senhaOld = md5($input['inputSenhaOld']);
$isvalid = true;
$url = $urlBase."privateArea/view/associado/updPassword.php";

if($senhaNew != $senhaNewReType){
    $isvalid = false;
    $_SESSION['msg_ccfd'] = array('msg' => 'Campo Senha e Senha Novamente devem ser iguais.', 'type' => 'danger');
    $url = $urlBase."privateArea/view/associado/udpPassword.php";
}

if($senhaOld != $_SESSION['user_ccfd']['pwd']){
    $isvalid = false;
    $_SESSION['msg_ccfd'] = array('msg' => 'Campo Senha Antiga incorreto.', 'type' => 'danger');
    $url = $urlBase."privateArea/view/associado/udpPassword.php";
}

if($isvalid){
    $query = "UPDATE usuario SET senha='$senhaNew' WHERE id = $id";
    // echo $query;
    if(mysqli_query($link, $query)){
        $_SESSION['msg_ccfd'] = array('msg' => 'Senha Atualizada Com Sucesso.', 'type' => 'success');
        $_SESSION['user_ccfd']['pwd'] = $senhaNew;
        // echo "Salvo Com Sucesso.";
    }else{
        $_SESSION['msg_ccfd'] = array('msg' => 'Impossível Atualizar Registro. Tente Novamente Mais Tarde.', 'type' => 'danger');
        $url = $urlBase."privateArea/view/associado/updPassword.php";
        // echo "Impossível Salvar Registro.";
    }
}else{
    $url = $urlBase."privateArea/view/associado/updPassword.php";
}

header("location:$url");