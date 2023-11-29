<?php
include("conexao.php");
include("classes.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//echo "$nome";

//echo "$email";

//echo "$usuario";

//echo "$senha";

insereAluno($conexao, $nome, $email, $usuario, $senha);
header("Location:solicitado.php");

?>
