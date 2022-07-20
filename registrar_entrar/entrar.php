<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Gamer Friends</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript - Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer></script>
    <!-- Icons - Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="alert alert-danger" id="notificacao" role="alert">
        Usuário ou senha estão Incorreto!!!
    </div>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>

    <!-- Pré Carregamento -->
    <div class="loading">
        <div class="spinner">
             <img src="../img/IMG_GamerFriends.jpg" alt="Gamer Friends" title="Gamer Friends" class="img-fluid">
            <div class="porcent">100%</div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12" id="link-Voltar">
                <a href="../index.html"><i class="bi bi-arrow-left-circle"></i> Voltar</a>
            </div>
            <div class="col-12" id="tituloRegistrar">
                <h1><strong>Entrar</strong></h1>
            </div>
            <div class="col-12">
                <form name="entrarConta" method="POST">
                    <div class="mb-4">
                        <label for="email">E-mail</label>
                        <input type="email" name="txt_email" class="form-control" placeholder="email@gmail.com" id="email" required>
                    </div>
                    <div class="mb-4" >
                        <label for="password">Senha</label>
                        <input type="password" name="txt_senha" class="form-control" placeholder="Senha" id="password" required>
                    </div>
                    <div class="espaco"></div>
                    <div class="col-12" id="bntRegistrar-inicio">
                        <button class="btn btn-primary" type="submit" onClick="document.entrarConta.action='logar.php'">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS do Pré Carregamento -->
    <script src="../js/loading.js"></script>
</body>
</html>