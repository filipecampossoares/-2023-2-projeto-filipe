<?php
include("conexao.php");
include("classes.php");

$id = $_POST['codigo'];

//echo "$id";

aprovaUsuario($conexao, $id);
header("Location:solicitacoes.php");

?>
