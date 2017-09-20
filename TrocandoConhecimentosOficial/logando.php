<?php

require_once 'Usuario.php';

include 'conexaobanco.php';

$email=$_POST['email'];
$senha=$_POST['senha'];

$usuario=new Usuario(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,$email,$senha);

$usuario->acessarConta();

?>