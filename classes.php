<?php
include('conexao.php');

//COMEÇO CÓDIGOS SQL PARA USUARIOS PADRÃO

//LOGIN_PRINCIPAL
function buscaUsuario($conexao,$login,$senha){
$sql="select * from usuarios where usuario='$login' and senha='$senha' and ativo = 1";//Instrução sql
$resultado=mysqli_query($conexao,$sql);//realiza a consulta
return mysqli_fetch_assoc($resultado);//retornar os valores
}

//LOGIN_ADM
function buscaUsuarioADM($conexao,$login,$senha){
$sql="select * from usuario_adm where usuario='$login' and senha='$senha'";
$resultado=mysqli_query($conexao,$sql);
return mysqli_fetch_assoc($resultado);
}

//LISTA USUARIO NO index_admin
function listaUsuario($conexao){
    $agendas=array();
    $sql="select * from usuarios where ativo=1";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

function listaUsuario2($conexao){
    $agendas=array();
    $sql="select * from usuarios where ativo=0";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

//APAGA USUARIO NO index_admin
function excluirUsuarioADM($conexao,$codigo){
    $sql="delete from usuarios where id='$codigo'";
    return mysqli_query($conexao,$sql);
}

//INSERE USUARIO PADRÃO
function insereAluno($conexao, $nome, $email, $usuario, $senha){
    $sql="insert into usuarios(nome, email, usuario, senha, ativo) values('$nome', '$email', '$usuario','$senha', 0)";
    return mysqli_query($conexao,$sql);
}

//ALTERAR USUARIO PADRÃO
function alteraUsuarioADM($conexao, $id, $ativo, $nome, $email, $usuario, $senha){
    $sql="update usuarios set ativo ='$ativo', nome ='$nome', email ='$email', usuario ='$usuario', senha ='$senha' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function aprovaUsuario($conexao, $id){
    $sql="update usuarios set ativo = 1 where id ='$id'";
    return mysqli_query($conexao,$sql);
}

//UPDATE USUÁRIO PADRÃO
function buscaUsuarioAlterar($conexao,$id){
    $sql="select * from usuarios where id = '$id'";
    $resultado=mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

//FIM CÓDIGOS SQL PARA USUARIOS PADRÃO --------------------------------------------------------------------------------------------------------------------------

//COMEÇO CÓDIGOS SQL PARA CHAMADOS --------------------------------------------------------------------------------------------------------------------------

function listaChamadosAvaliacao($conexao){
    $agendas=array();
    $sql="SELECT chamados.*, usuarios.nome
    FROM chamados
    JOIN usuarios ON chamados.id_aluno = usuarios.id
    WHERE chamados.caso = 'Avaliação'
    ORDER BY STR_TO_DATE(dt_fechamento, '%d/%m/%Y %H:%i') DESC;";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

function listaChamadosAlunos($conexao, $id){
    $agendas=array();
    $sql="SELECT chamados.*, usuarios.nome
    FROM chamados
    JOIN usuarios ON chamados.id_aluno = usuarios.id
    WHERE chamados.id_aluno = $id";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

function listaChamadosConcluido($conexao){
    $agendas=array();
    $sql="SELECT chamados.*, usuarios.nome
    FROM chamados
    JOIN usuarios ON chamados.id_aluno = usuarios.id
    WHERE chamados.caso = 'Concluido'
    ORDER BY STR_TO_DATE(dt_fechamento, '%d/%m/%Y %H:%i') DESC;";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

function ConcluiChamado($conexao, $dt_fechamento, $id){
    $sql="update chamados set caso ='Concluido', dt_fechamento = '$dt_fechamento' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function reabreChamado($conexao, $id){
    $sql="update chamados set caso ='Avaliação' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function insereTicket($conexao, $id_aluno, $tipo, $prioridade, $descricao, $dt_criacao){
    $sql="insert into chamados(id_aluno, tipo, prioridade, descricao, dt_criacao, dt_fechamento, retorno, caso) values('$id_aluno','$tipo','$prioridade', '$descricao', '$dt_criacao', 'NULO', 'Pendente', 'Avaliação')";
    return mysqli_query($conexao,$sql);
}

function apagaChamado($conexao,$codigo){
    $sql="delete from chamados where id='$codigo'";
    return mysqli_query($conexao,$sql);
}

function alteraChamado($conexao, $retorno, $id){
    $sql="update chamados set retorno = '$retorno', caso = 'Concluido' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function buscaChamadoAlterar($conexao,$id){
    $sql="select * from chamados where id = '$id'";
    $resultado=mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
