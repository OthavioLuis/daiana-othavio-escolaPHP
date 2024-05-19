<?php
include('conexao.php');

if(isset($_GET['turmas'])) {
    $lista = getTurma($_GET['turmas']);

    $retorno = '';
    while($turma = $lista->fetch_array()){
        $retorno .='<option value="'.$turma['cd_turma'].'">'.$turma['nm_turma'].'</option>';
    }
    echo $retorno;
}

if($_POST) {
    if(isset($_POST['cd_aluno']) && isset($_POST['nm_aluno'])) {
        cadastrarAluno($_POST['id_turma'], $_POST['cd_aluno'], $_POST['nm_aluno'], $_POST['dt_nasc']);
    }
}

if(isset($_GET['aluno'])){
    $lista = getAluno($_GET['alunos']);
    $retorno = '';
    while($aluno = $lista->fetch_array()){
        $retorno .='<tr>
                        <td>'.$aluno['cd_aluno'].'</td>
                        <td>'.$aluno['nm_aluno'].'</td>
                        <td>'.$aluno['dt_nasc'].'</td>
                        <td>'.$aluno['id_turma'].'</td>
                        <td>#</td>
                    </tr>';
    }
    echo $retorno;
}
?>