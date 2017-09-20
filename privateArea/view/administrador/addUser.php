<?php include_once('includes/cabecalho.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h2>Cadastrar novo associado</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 text-center">
            <?php 
                if(isset($_SESSION['msg_ccfd']) && !empty($_SESSION['msg_ccfd']['msg'])){
                    echo "<p class='msg bg-".$_SESSION['msg_ccfd']['type']."'>".$_SESSION['msg_ccfd']['msg']."</p>";
                    unset($_SESSION['msg_ccfd']);
                }
             ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <form action="<?=$urlBase ?>privateArea/service/usuarioPostService.php" method="post">
                <div class="form-group">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" id="inputNome" name="inputNome">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail">
                </div>
                <div class="form-group">
                    <label for="inputCPF">CPF:</label>
                    <input type="text" class="form-control" id="inputCPF" name="inputCPF">
                </div>
                <div class="form-group">
                    <label for="inputInscricao">Inscrição:</label>
                    <input type="text" class="form-control" id="inputInscricao" name="inputInscricao">
                </div>
                <div class="form-group">
                    <label for="inputInscricao">Inscrição:</label>
                    <select class="form-control" id="inputTipo" name="inputTipo">
                        <option value="associado" selected>Associado</option>
                        <option value="administrador">Administrador</option>
                        <!-- <option value="associado">Associado</option> -->
                    </select>
                </div>
                <div class="form-group text-right">
                    <a href="<?=$urlBase ?>privateArea/view/administrador/manageUser.php" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('includes/rodape.php'); ?>