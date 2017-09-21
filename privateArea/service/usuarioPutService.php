<?php
include_once(dirname(__FILE__).'/../utils/Constraints.php');

$link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

$input = $_POST;
// var_dump($_POST);
// die();
$id = $input['inputId'];
$nome = addslashes($input['inputNome']);
$email = addslashes($input['inputEmail']);
$cpf = addslashes($input['inputCPF']);
$inscricao = addslashes($input['inputInscricao']);
$tipo = addslashes($input['inputTipo']);
$senha = md5($input['inputCPF']);
$isvalid = true;
if($_SESSION['user_ccfd']['tipo'] == 'administrador'){
    $url = $urlBase."privateArea/view/administrador/manageUser.php";
}else{
    $url = $urlBase."privateArea/view/associado/myAcc.php";
}


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
    $query = "UPDATE usuario SET nome='$nome', email='$email', cpf='$cpf', inscricao='$inscricao', tipo='$tipo' WHERE id = $id";
    // echo $query;
    if(mysqli_query($link, $query)){
        $_SESSION['msg_ccfd'] = array('msg' => 'Associado Atualizado Com Sucesso.', 'type' => 'success');
        // echo "Salvo Com Sucesso.";
    }else{
        $_SESSION['msg_ccfd'] = array('msg' => 'Impossível Atualizar Registro. Tente Novamente Mais Tarde.', 'type' => 'danger');
        if($_SESSION['user_ccfd']['tipo'] == 'administrador'){
            $url = $urlBase."privateArea/view/administrador/addUser.php";
        }else{
            $url = $urlBase."privateArea/view/associado/myAcc.php";
        }
        // echo "Impossível Salvar Registro.";
    }
}else{
    if($_SESSION['user_ccfd']['tipo'] == 'administrador'){
        $url = $urlBase."privateArea/view/administrador/addUser.php";
    }else{
        $url = $urlBase."privateArea/view/associado/myAcc.php";
    }
}

header("location:$url");