<?php
include("conexao.php");
include("classes.php");


//echo $_POST["usuario"];
//echo $_POST["senha"];

if($_POST){
    $login=$_POST["usuario"];
    $senha=$_POST["senha"];
    if(buscaUsuarioADM($conexao,$login,$senha)){
       session_start();
       $resultado=buscaUsuarioADM($conexao,$login,$senha);
       $_SESSION['login']=$login;
       $_SESSION['log']='ativo';
       $_SESSION['login']=$resultado['codigo'];
       header("Location:chamados.php");
       die();

    }else{
        header("location:login_inicio_admin.php");
    }

}


?>
