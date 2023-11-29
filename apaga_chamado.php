<?php
include("conexao.php");
include("classes.php");
$codigo=$_POST['codigo'];

//echo "$codigo"; //<- TESTE DE VARIAVEL

apagaChamado($conexao,$codigo);
header("Location:chamados_resolvidos.php");
?>
