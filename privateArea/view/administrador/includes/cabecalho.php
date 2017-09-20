<?php
include_once(dirname(__FILE__).'/../../../service/autorizacaoAdmService.php');
?>

<html>
    <head>
        <title>CCFD - Clube De Campo Fernão Dias</title>
        <link rel="stylesheet" href="<?= $urlBase?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.css"/>
        <meta charset="utf-8">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= $urlBase?>">CCFD</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?=$urlBase ?>privateArea/view/administrador/manageUser.php">Associados</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?= $urlBase ?>privateArea/service/logoutService.php">Sair</a></li>
                            </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>