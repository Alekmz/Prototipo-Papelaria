<?php
include_once 'connect.php';
$query = "select saved from section where saved = 'logado'";
$result = mysqli_query($sql, $query);
$row = mysqli_num_rows($result);

if ($row == 1) { ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Sua conta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../../v3programação/Visual/favicon.ico" type="image/x-icon" />

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


        <link rel="stylesheet" href="../../v3programação/Visual/css/style.css">
        <link rel="stylesheet" href="../../v3programação/Visual/css/login.css">
        <style>
            .user-row {
                margin-bottom: 14px;
            }

            .user-row:last-child {
                margin-bottom: 0;
            }

            .img-profile {
                width: 150px;
            }

            .dropdown-user {
                margin: 13px 0;
                padding: 5px;
                height: 100%;
            }

            .dropdown-user:hover {
                cursor: pointer;
            }

            .table-user-information>tbody>tr {
                border-top: 1px solid rgb(221, 221, 221);
            }

            .table-user-information>tbody>tr:first-child {
                border-top: 0;
            }


            .table-user-information>tbody>tr>td {
                border-top: 0;
            }

            .toppad {
                margin-top: 20px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand h1 mb-0 mr-3" href="../../v3programação/Visual/index.html">
                    <img class="mb-2 mr-3" src="../../v3programação/Visual/image/logo.png" width="40" height="40" alt="">
                    Papelaria Magnos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto mb-1">
                        <li class="nav-item">
                            <a class="nav-link " href="../../v3programação/Visual/index.html">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../v3programação/Visual/produtos.html">Produtos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../v3programação/Visual/assinaturas.html">Assinaturas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../v3programação/Visual/filial.html">Filial</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../../v3programação/Visual/sobre.html">Sobre nós</a>
                        </li>
                        <ul class="navbar-nav ml-auto"></ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                Contatos
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../../v3programação/Visual/contato.html">Entrar em contato</a>
                                <a class="dropdown-item" href="../../v3programação/Visual/fornecedores.html">Fornecedor</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-link" href="../../v3programação/Controle/myaccount.php">
                            Minha conta
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="text-center">Sua conta</h1>
            <div class="panel panel-info ">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Nome</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 align-self-center row justify-content-center">
                            <img alt="User Pic" src="../Visual/image/profile.png" class="img-responsive img-profile ml-5 ">
                        </div>

                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>

                                    <tr>
                                        <td>País</td>
                                        <td>Brasil</td>
                                    </tr>
                                    <tr>
                                        <td>Estado</td>
                                        <td>Santa-Catarina</td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Cidade</td>
                                        <td>Fraiburgo</td>
                                    </tr>
                                    <tr>
                                        <td>CEP</td>
                                        <td>89580-000</td>
                                    </tr>

                                    <td>Telefone</td>
                                    <td>(49) 98982-0335</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <a href="delete.php" type="button" class="btn btn-md btn-danger">Sair</a>
                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
} else {
    header('Location: ../Visual/conta.html');
} ?>