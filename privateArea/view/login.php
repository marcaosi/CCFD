<?php 
    include_once('../utils/Constraints.php'); 
?>
<html>
    <head>
        <title>CCFD - Clube De Campo Fernão Dias</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?=$urlBase ?>css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h2>Efetuar Login</h2>
                    <?php
                        if(isset($_SESSION['msg_ccfd']) && !empty($_SESSION['msg_ccfd']['msg'])){
                            echo "<p class='text-".$_SESSION['msg_ccfd']['type']."'>".$_SESSION['msg_ccfd']['msg']."</p>";
                            unset($_SESSION['msg_ccfd']);
                        }
                     ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="<?=$urlBase ?>/privateArea/service/loginService.php" method="post">
                                <div class="form-group">
                                    <label for="inputInscricao">Inscrição:</label>
                                    <input type="text" class="form-control" id="inputInscricao" name="inputInscricao">
                                </div>
                                <div class="form-group">
                                    <label for="inputSenha">Senha: <small>(Caso seja seu primeiro acesso, utilize seu CPF)</small></label>
                                    <input type="password" class="form-control" id="inputSenha" name="inputSenha">
                                </div>
                                <div class="text-right">
                                    <a href="<?=$urlBase ?>" class="btn btn-danger">Cancelar</a>
                                    <input type="submit" class="btn btn-success" value="Entrar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>