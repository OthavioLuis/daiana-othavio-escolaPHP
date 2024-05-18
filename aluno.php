
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aluno</title>
</head>
<body id="body-aluno">
    <section>
        <div>
            <p>Tela de acesso ao Sistema:</p>
            <p><strong>Dashboard: ALUNO</strong></p>
            <img src="img/perfil.png" alt="">
            <div class="body-aluno-o1">
                <div class="bao01">
                    <p>RM
                        <div class="div-input-aluno">
                        <?php echo $_SESSION['cd_aluno'] ?>
                        </div>
                    </p>
                </div>
                <div class="bao01">
                    <p>Nome
                        <div class="div-input-aluno">
                        <?php echo $_SESSION['quem'] ?>
                        </div>
                    </p>
                </div>
                <div class="bao01">
                    <p>Curso
                        <div class="div-input-aluno">
                            <?php echo $_SESSION['curso']?>
                        </div>
                    </p>
                </div>
                <div class="bao01">
                    <p>Turma
                        <div class="div-input-aluno">
                        <?php echo $_SESSION['turma'] ?>
                        </div>
                    </p>
                </div>
            </div>
            <div>
                <button class="btn-importar">Trocar Foto</button>
                <button>Alterar Senha</button>
            </div>
        </div>
        <div>
            <div class="alunos-figuras">
                <div class="x1-box">
                    <img src="img/pedidos.png" alt="">
                    <div class="h11">
                        <h1>Realizar Pedido</h1>
                    </div>
                </div>
                <div class="x1-box">
                    <img src="img/pac-internet.png" alt="">
                    <div class="h11">
                        <h1>Comprar Internet</h1>
                    </div>
                </div>
                <div class="x1-box">
                    <img src="img/armario.png" alt="">
                    <div class="h11">
                        <h1>Comprar Armário</h1>
                    </div>
                </div>
                <div class="x1-box">
                    <img src="img/pedido-realizado.png" alt="">
                    <div class="h11">
                        <h1>Pedidos Realizados</h1>
                    </div>
                </div>
                <div class="x1-box">
                    <img src="img/historico-pedido.png" alt="">
                    <div class="h11">
                        <h1>Histórico de Pedidos</h1>
                    </div>
                </div>
            </div>
            <div>
                <textarea name="texto2" id="txt02" cols="72" rows="23"></textarea>
            </div>
        </div>
    </section>
</body>
</html>