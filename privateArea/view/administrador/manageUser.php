<?php include_once('includes/cabecalho.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 text-right">
            <a href="<?=$urlBase ?>privateArea/view/administrador/addUser.php" class="btn btn-primary btn-md">Cadastrar</a><br><br>
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
        <div class="col-xs-8 col-xs-offset-2">
            <table id="table-user" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Inscrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="body-table">
                    <?php 
                        $link = mysqli_connect($server_db, $server_user, $server_psswd, $name_db);

                        $query = "SELECT * FROM usuario";
                        $result = mysqli_query($link, $query);
                        $array = array();

                        while($line = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?=$line['id']; ?></td>
                                <td><?=$line['nome'] ?></td>
                                <td><?=$line['inscricao'] ?></td>
                                <td>
                                    <a href="#" id="btn-modal-info" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a href="<?=$urlBase?>privateArea/view/administrador/updUser.php?id=<?=$line['id']?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="<?=$urlBase?>privateArea/service/usuarioDeleteService.php?id=<?=$line['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once('includes/rodape.php'); ?>

<script>
    $('#table-user').DataTable( {
        language: {
            processing:     "Processando...",
            search:         "Busca:",
            lengthMenu:    "Mostrar _MENU_ Registros",
            info:           "Mostrando _START_ &agrave; _END_ de _TOTAL_ registros",
            infoEmpty:      "Mostrando registro 0 &agrave; 0 de 0 registros",
            infoFiltered:   "(Filtro de _MAX_ registros no total)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            // zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Sem Registros Disponíveis",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Próximo",
                last:       "Último"
            },
            aria: {
                // sortAscending:  ": activer pour trier la colonne par ordre croissant",
                // sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    })

    $(document).ready(function() {
        $('#table-user').DataTable();
    })
</script>