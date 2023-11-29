<?php
include("conexao.php");
include("classes.php");

$id = $_POST['id'];
$fechado = $_POST['fechado'];
$dt_fechamento = $_POST['dt_fechamento'];

//echo "$id";
//echo "$dt_fechamento";


ConcluiChamado($conexao, $dt_fechamento, $id);
header("Location:chamados.php");

?>
