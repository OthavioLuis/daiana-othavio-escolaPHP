<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Escola </title>
</head>
<body>
    <div class="login">
        <form class="login-box" method="post">
            <img src="img/profile.png" alt="">
            <input class="cadastro z1" type="text" name="nome" id="nome" placeholder="Seu Nome">
            <input class="cadastro" type="password" name="senha" id="senha" placeholder="Sua melhor Senha">
            <?php
                include('conexao.php');
                if($_POST) {
                    Login($_POST['nome'],$_POST['senha']);
                }
            ?>
            <input class="button" id="btn" type="submit" value="Entrar">
            <p>
                <a href="#">Esqueceu a senha?</a>
            </p>
        </form>
    </div>
</body>
</html>