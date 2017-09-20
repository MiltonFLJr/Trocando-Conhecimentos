<?php

$host = "localhost";
$user = "root";
$password = "trocalivro";
$banco = "id2832453_trocalivro";
$conexao = mysqli_connect($host,$user,$password,$banco);

if(mysqli_connect_errno()){

	echo "A conexão com o banco não foi estabelecida";

}

?>