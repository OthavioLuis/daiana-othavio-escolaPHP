<?php

session_start();

$server = 'localhost';
$user = 'root';
$pass = ''; //se estiver no usb a senha é 'usbw'
$db = 'secretaria';

$conexao = new mysqli($server,$user,$pass,$db);

$conexao->query("set character set utf8");
if(!$conexao) {
    echo "Erro ao conectar: " .$conexao->error;
}

function Login($usuario, $senha)
{
    global $conexao;

    $comando = "SELECT * FROM aluno WHERE cd_aluno = ? AND senha = ?";
    
    $stmt = $conexao->prepare($comando);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $quem = $resultado->fetch_assoc();

        $_SESSION['entrou'] = "sim";
        $_SESSION['cd_aluno'] = $quem['cd_aluno'];
        $_SESSION['quem'] = $quem['nm_aluno'];
        $_SESSION['dt_nasc'] = $quem['dt_nasc'];
        $_SESSION['turma'] = $quem['id_turma'];

        header('Location: aluno.php');
        exit;
    } else {
        echo "Dados inválidos";
    }
}

function armariosLoad(){
    $comando = 'SELECT * FROM armario';
    $retorno = $GLOBALS['conexao']->query($comando);
    return $retorno;
}

function getCurso($cd_curso) {
    $sql = 'SELECT * FROM curso';
    if($cd_curso != null) {
        $sql.= ' WHERE cd_curso=' .$cd_curso;
    }
    $retorno = $GLOBALS['conexao']->query($sql);
    return $retorno;
}

function getTurma($curso) { //aqui elel vai filtrar conforme oque escolheu do curso
    $sql = 'SELECT * FROM turma';
    if($curso != null) {
        $sql.= ' WHERE id_curso=' .$curso;  //dps do WHERE ele pega o foreng key dentro da tabela turma
    }
    $retorno = $GLOBALS['conexao']->query($sql);
    return $retorno;
}

function cadastrarAluno($turma, $cd_aluno, $nm_aluno, $dt_nasc) {
	//a senha inicial do aluno será seu RM
	$sql='INSERT INTO aluno VALUES('.$cd_aluno.',"'.$nm_aluno.'","'.$dt_nasc.'","'.$cd_aluno.'",'.$turma.')';
	$retorno = $GLOBALS['conexao']->query($sql);
	if($retorno){
	    echo "Cadastrado com sucesso";
	}else{
	    echo "Erro ao cadastrar: ".$GLOBALS['conexao']->error;
	}
}

function getAlunos($turma){
    $sql = 'SELECT a.cd_aluno, a.nm_aluno, a.dt_nasc, t.nm_turma as turma
            FROM aluno a, turma t
            WHERE t.cd_turma = a.id_turma';
    if($turma != null){
        $sql .= ' AND a.id_turma='.$turma;
    }

    $retorno = $GLOBALS['conexao']->query($sql);
    return $retorno;
}
?>