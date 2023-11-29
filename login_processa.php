<?php
include("conexao.php");
include("classes.php");


//echo $_POST["usuario"];
//echo $_POST["senha"];

if($_POST){
    $login=$_POST["usuario"];
    $senha=$_POST["senha"];
    if(buscaUsuario($conexao,$login,$senha)){
       session_start();
       $resultado=buscaUsuario($conexao,$login,$senha);
       $_SESSION['login']=$login;
       $_SESSION['log']="ativo";
       $_SESSION['usuario']=$resultado['id'];
       $_SESSION['login']=$resultado['id'];
       header("Location:index.php");
       die();

    }else{
        header("location:login_inicio.php");
    }

}


?>
