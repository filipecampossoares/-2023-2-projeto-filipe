<?php
include("conexao.php");
include("classes.php");

$id = $_POST['id'];

//echo "$id";

reabreChamado($conexao, $id);
header("Location:chamados_resolvidos.php");

?>
