<?php
include("conexao.php");
include("classes.php");

$id = $_POST['id'];
$ativo = $_POST['ativo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

alteraUsuarioADM($conexao, $id, $ativo, $nome, $email, $usuario, $senha);
header("Location:index_admin.php");

?>
