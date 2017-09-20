<?php
include_once('../utils/Constraints.php');
session_start();

$link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

$query = "SELECT * FROM usuario";
$result = mysqli_query($link, $query);
$array = array();

while($line = mysqli_fetch_assoc($result)){
    array_push($array, $line);
}

echo JSON_encode($array);