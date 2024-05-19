<?PHP 
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Alunos</title>
</head>
<body>
    <div class="corpo">
        <div >
            <form class="inputs" id="cadastrarAluno" action="ajax.php" method="post">
                <p>Cadastrar</p>
                <select name="curso" id="curso" class="botao-cadastro" type="text">
                    <option></option>
                    <?PHP
                        $lista = getCurso(null);
                        while($curso = $lista->fetch_array()){
                            echo '<option value="' .$curso['cd_curso']. '">' .$curso['nm_curso'].'</option>';
                        }
                    ?>
                </select>
                <select name="turma" id="turma" class="botao-cadastro">
                <option></option>
                    <?PHP
                        $lista = getTurma(null);
                        while($turma = $lista->fetch_array()){
                            echo '<option value="' .$turma['cd_turma']. '">' .$turma['nm_turma'].'</option>';
                        }
                    ?>
                </select>
                <input placeholder="RM" name="cd_aluno" type="number" id="cd_aluno" class="botao-rm">
                </input>
                <input placeholder="Nome" name="nm_aluno" id="nm_aluno" type="text" class="botao-rm">
                </input>
                <input name="dt_nasc" id="dt_nasc" type="date" class="botao-rm">
                </input>
                <label class="btn-arquivo">
                    <p>Arquivo</p>
                    <input type="file" name="arquivo" id="arquivo">
                    
                </label>
                <button class="btn-importar" type="submit">Enviar</button>
            </form>
        </div>
        <div class="lista-1">
            <div class="caixa-lista-1">
                <select name="Curso" id="curso">
                    <option>Cursos<option>
                    <option value="">ADS</option>
                    <option value="">FAR</option>
                    <option value="">ADM</option>
                </select>
                <select name="Curso" id="curso">
                    <option>Turma<option>
                    <option value="">1ADS</option>
                    <option value="">2ADS</option>
                    <option value="">3ADS</option>
                    <option value="">1FAR</option>
                    <option value="">2FAR</option>
                    <option value="">3FAR</option>
                    <option value="">1ADM</option>
                    <option value="">2ADM</option>
                    <option value="">3ADM</option>
                </select>
                <button class="btn-importar btn11">Listar</button>
            </div>
            <table id="alunos">
                <caption>
                    <h1>Alunos importados | Alunos encontrados</h1>
                </caption>
                <thead>
                    <tr>
                        <th>RM</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Turma</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody id="tb_alunos">
                    <!-- Linhas serão preenchidas via AJAX -->
                </tbody>
            </table>
            <button class="btn-importar btn2121">Promover Alunos</button>
        </div>
    </div>
    <script src="api.js"></script>
</body>
</html>