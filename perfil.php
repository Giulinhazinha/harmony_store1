<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Store</title>
    <!-- Incluir FAVICON -->
    <link rel="shortcut icon" href="img2/image_6483441-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS personalizado do projeto -->
    <link rel="stylesheet" href="perfil.css">

</head>
<body>
    <!-- Header -->
    <div class="container-fluid">
            <header class="row" id="header">
                <div id="logo-container">
                    <img class= "loguinho" src="img2/image_6483441-removebg-preview.png" alt="Art" id="logo">
                    <h1>Harmony Store</h1>
                </div>
                <p>Intrumentos Musicais</p>
               
            </header>
            <nav id="navbar" class="container">
                <div class="row justify-content-center">
                    <a href="index.html">Home</a>
                    <a href="instrumentos.html">Intrumentos</a>
                    <a href="contatos.html">Contatos</a>
                    <a href="sobre.html">Sobre</a>
                    <a href="perfil.php">Perfil</a>
                    <a href="TESTE CADASTRO/login.php">Login</a> <br><br>
                    
                </div>
            </nav>
    </div>

    <!-- PÁGINA PERFIL -->
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Perfil do Usuário</span><span class="text-black-50">Usuário logado com sucesso!</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Visualizar seu perfil</h4>
                    </div>
                    <?php
                        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['first_name']) && isset($_SESSION['secondary_name']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {

                            $first_name = $_SESSION['first_name'];
                            $secondary_name = $_SESSION['secondary_name'];
                            $email = $_SESSION['email'];
                            $password = $_SESSION['password'];

                            echo "<div class='row mt-2'>
                                    <div class='col-md-6'><label class='labels1'>Nome</label><p>$first_name</p></div>
                                    <div class='col-md-6'><label class='labels1'>Sobrenome</label><p>$secondary_name</p></div>
                                </div>
                                <div class='row mt-3'>
                                    <div class='col-md-12'><label class='labels1'>E-mail</label><p>$email</p></div>
                                    <div class='col-md-12'><label class='labels1'>Senha</label><p>$password</p></div>
                                </div>"; 

            
                        } else {
                            echo "<div class='row mt-2'>
                                    <div class='col-md-6'><label class='labels1'>Nome</label><p>Santástico</p></div>
                                    <div class='col-md-6'><label class='labels1'>Sobrenome</label><p>Rebaixado</p></div>
                                </div>
                                <div class='row mt-3'>
                                    <div class='col-md-12'><label class='labels1'>Senha</label><p>ruadosantosrebaixado@gmail.com</p></div>
                                    <div class='col-md-12'><label class='labels1'>Email</label><p>santosrebaixado@gmail.com</p></div>
                                </div>"; 
                        }
                    ?>
                </div>
            <div class="mt-5 text-center" ><button class="btn btn-primary profile-button1" type="button">Voltar</button></div>
    </div>
    
        <!-- Footer -->
        <footer>
            <p class="secondary-color">
                Nos encontre nas redes sociais
            </p>
            <div class="row justify-content-center" id="social-icons-container">
                <div class="col-1">
                    <a href="#"><i class="bi bi-facebook secondary-color"></i>
                    </a>
                </div>
                <div class="col-1">
                    <a href="#"><i class="bi bi-instagram secondary-color"></i>
                    </a>
                </div>
                <div class="col-1">
                    <a href="#"><i class="bi bi-twitter secondary-color"></i>
                    </a>
                </div>    
                </div>
                <p class="secondary-color">Harmony Store &copy; 2023</p>
            </div>
            
        </footer>
    </body>
    </html>