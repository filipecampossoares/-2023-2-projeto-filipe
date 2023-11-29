<?php
require_once __DIR__ . '/vendor/autoload.php';
include("conexao.php");
include("classes.php");

use Telegram\Bot\Api;

$id_aluno = $_POST['id_aluno'];
$tipo = $_POST['tipo'];
$prioridade = $_POST['prioridade'];
$descricao = $_POST['descricao'];
$dt_criacao = $_POST['dt_criacao'];

//<- TESTE DE VARIAVEL Inicio
//echo "$id_aluno";
//echo "$tipo";
//echo "$prioridade";
//echo "$descricao";
//echo "$dt_criacao";

try {

  insereTicket($conexao, $id_aluno, $tipo, $prioridade, $descricao, $dt_criacao);

  // Substitua 'YOUR_BOT_TOKEN' pelo token do seu bot
  $token = '6584568113:AAHDqzrRitEsv7dGnPqvVZ58Ou1ntwj_Dqg';

  $telegram = new Api($token);

  // ID do chat ou usuário para o qual você deseja enviar a mensagem
  $chatId = '5922069611';

  // Mensagem que você deseja enviar
  $message = "Novo chamado do tipo: $tipo com a descrição: $descricao" ;

  // Enviar a mensagem para o chat
  $response = $telegram->sendMessage([
      'chat_id' => $chatId,
      'text' => $message,
  ]);

header("Location:index.php");

} catch (Exception $e) {
  header("Location:index.php");
}



?>
