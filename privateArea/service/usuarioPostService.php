<?php
include_once('../utils/Constraints.php');

mysql_connect($server_db, $server_user, $server_psswd);
mysql_select_db($name_db);

$input = json_decode(file_get_contents('php://input'),true);

$nome = addslashes($input['inputNome']);
$email = addslashes($input['inputEmail']);
$cpf = addslashes($input['inputCpf']);
$inscricao = addslashes($input['inputInscricao']);
$senha = addslashes($input['inputSenha']);

$query = "INSERT INTO usuario(nome, email, senha, cpf, inscricao) VALUES('$nome', '$email', '$senha', '$cpf', '$inscricao');";

if(mssql_query($query)){
    echo "Salvo Com Sucesso.";
}else{
    echo "Impossível Salvar Registro.";
}