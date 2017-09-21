<?php
include_once('../utils/Constraints.php');

$link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

$inscricao = $_POST['inputInscricao'];
$senha = md5($_POST['inputSenha']);

$query = "SELECT * FROM usuario WHERE inscricao='$inscricao' AND senha='$senha'";

$result = mysqli_query($link, $query);
$line = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) == 1){
    $_SESSION['user_ccfd'] = array('user'=>$inscricao, 'pwd'=>$senha, 'tipo'=>$line['tipo'], 'id' => $line['id']);
    $_SESSION['msg_ccfd'] = array('msg'=>'Login Efetuado Com Sucesso.','type'=>'success');

    if($line['tipo'] == 'administrador'){
        $url = $urlBase . 'privateArea/view/administrador/index.php';
    }else if($line['tipo'] == 'associado'){
        $url = $urlBase . 'privateArea/view/associado/index.php';
    }
}else{
    $_SESSION['user_ccfd'] = array();
    $_SESSION['msg_ccfd'] = array('msg'=>'Usuário Ou Senha Inválidos.', 'type'=>'danger');
    $url = $urlBase . 'privateArea/view/login.php';
}

header("location:$url");