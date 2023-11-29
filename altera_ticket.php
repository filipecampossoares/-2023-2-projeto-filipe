<?php
include("conexao.php");
include("classes.php");

$retorno = $_POST['retorno'];
$id = $_POST['id'];


//<- TESTE DE VARIAVEL Inicio
//echo "$tipo";
//echo "$ticket";
//echo "$relacionado";
//echo "$dt_criacao";
//echo "$data_inserida";
//echo "$data_formatada";
//echo "$data_formatada_br";
//echo "$st_azure";
//echo "$descricao";
//echo "$CCC";
//echo "$resp_ericsson";
//echo "$ult_atualizacao";
//<- TESTE DE VARIAVEL fim

alteraChamado($conexao, $retorno, $id);
header("Location:chamados_resolvidos.php");

?>
