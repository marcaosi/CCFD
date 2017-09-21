<?php
include_once(dirname(__FILE__)."/../utils/Constraints.php");
session_start();
session_destroy();
session_start();
$_SESSION['msg_ccfd'] = array('msg' => 'Logut Efetuado Com Sucesso.', 'type' => 'success');

header("Location:$urlBase".'privateArea/view/login.php');