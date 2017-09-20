<?php

include 'conexaobanco.php';

require_once 'Usuario.php';

$codigo=$_POST['codigo'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$nome=$_POST['nome'];
$datanascimento=$_POST['datadenascimento'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$nomemae=$_POST['mae'];
$nomepai=$_POST['pai'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$usuario= new Usuario($codigo, $cpf, $rg, $nome, $datanascimento, $telefone, $endereco, $nomemae, $nomepai, $email,$senha);

$usuario->criarConta();

?>
