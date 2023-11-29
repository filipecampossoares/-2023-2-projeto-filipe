<?php
include("conexao.php");
include("classes.php");
$codigo=$_POST['id'];
excluirUsuarioADM($conexao,$codigo);
header("Location:index_admin.php");
?>
