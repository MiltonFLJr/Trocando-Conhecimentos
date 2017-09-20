<?php


class Usuario {
   
private $cdUsuario;
private $cpfUsuario;
private $rgUsuario;
private $nomeUsuario;
private $dataNascimentoUsuario;
private $telefoneUsuario;
private $enderecoUsuario;
private $nomeMaeUsuario;
private $nomePaiUsuario;
private $emailUsuario;
private $senhaUsuario;
    

public function __construct($cdUsuario, $cpfUsuario, $rgUsuario, $nomeUsuario, $dataNascimentoUsuario, $telefoneUsuario, $enderecoUsuario, $nomeMaeUsuario, $nomePaiUsuario, $emailUsuario,$senhaUsuario) {
    $this->cdUsuario = $cdUsuario;
    $this->cpfUsuario = $cpfUsuario;
    $this->rgUsuario = $rgUsuario;
    $this->nomeUsuario = $nomeUsuario;
    $this->dataNascimentoUsuario = $dataNascimentoUsuario;
    $this->telefoneUsuario = $telefoneUsuario;
    $this->enderecoUsuario = $enderecoUsuario;
    $this->nomeMaeUsuario = $nomeMaeUsuario;
    $this->nomePaiUsuario = $nomePaiUsuario;
    $this->emailUsuario = $emailUsuario;
    $this->senhaUsuario = $senhaUsuario;
}

public function getSenhaUsuario(){
  return $this->senhaUsuario;
}
public function getCdUsuario() {
    return $this->cdUsuario;
}

public function getCpfUsuario() {
    return $this->cpfUsuario;
}

public function getRgUsuario() {
    return $this->rgUsuario;
}

public function getNomeUsuario() {
    return $this->nomeUsuario;
}

public function getDataNascimentoUsuario() {
    return $this->dataNascimentoUsuario;
}

public function getTelefoneUsuario() {
    return $this->telefoneUsuario;
}

public function getEnderecoUsuario() {
    return $this->enderecoUsuario;
}

public function getNomeMaeUsuario() {
    return $this->nomeMaeUsuario;
}

public function getNomePaiUsuario() {
    return $this->nomePaiUsuario;
}

public function getEmailUsuario() {
    return $this->emailUsuario;
}

public function setSenhaUsuario($senhaUsuario){
return $this->senhaUsuario=$senhaUsuario;
}

public function setCdUsuario($cdUsuario) {
    $this->cdUsuario = $cdUsuario;
}

public function setCpfUsuario($cpfUsuario) {
    $this->cpfUsuario = $cpfUsuario;
}

public function setRgUsuario($rgUsuario) {
    $this->rgUsuario = $rgUsuario;
}

public function setNomeUsuario($nomeUsuario) {
    $this->nomeUsuario = $nomeUsuario;
}

public function setDataNascimentoUsuario($dataNascimentoUsuario) {
    $this->dataNascimentoUsuario = $dataNascimentoUsuario;
}

public function setTelefoneUsuario($telefoneUsuario) {
    $this->telefoneUsuario = $telefoneUsuario;
}

public function setEnderecoUsuario($enderecoUsuario) {
    $this->enderecoUsuario = $enderecoUsuario;
}

public function setNomeMaeUsuario($nomeMaeUsuario) {
    $this->nomeMaeUsuario = $nomeMaeUsuario;
}

public function setNomePaiUsuario($nomePaiUsuario) {
    $this->nomePaiUsuario = $nomePaiUsuario;
}

public function setEmailUsuario($emailUsuario) {
    $this->emailUsuario = $emailUsuario;
}

public function criarConta(){
    
    include 'conexaobanco.php';

   $codigoDoUsuario = $this->getCdUsuario();
   $cpfDoUsuario = $this->getCpfUsuario();
   $rgDoUsuario = $this->getRgUsuario();
   $nomeDoUsuario = $this->getNomeUsuario();
   $dataNascimentoDoUsuario = $this->getDataNascimentoUsuario();
   $telefoneDoUsuario = $this->getTelefoneUsuario();
   $enderecoDoUsuario = $this->getEnderecoUsuario();
   $nomeMaeDoUsuario = $this->getNomeMaeUsuario();
   $nomePaiDoUsuario = $this->getNomePaiUsuario();
   $emailDoUsuario = $this->getEmailUsuario();
   $senhaDoUsuario = $this->getSenhaUsuario();

   $inserirNoBanco = mysqli_query($conexao,"INSERT INTO usuario
    VALUES 
    ('".$codigoDoUsuario."','".$cpfDoUsuario."','".$rgDoUsuario."','".$nomeDoUsuario."','".$dataNascimentoDoUsuario."','".$telefoneDoUsuario."','".$enderecoDoUsuario."','".$nomeMaeDoUsuario."','".$nomePaiDoUsuario."','".$emailDoUsuario."','".$senhaDoUsuario."')");
   
   echo "Os seus dados foram inseridos no banco!";
   
   /*
   var_dump($codigoDoUsuario);
   var_dump($cpfDoUsuario);
   var_dump($rgDoUsuario);
   var_dump($nomeDoUsuario);
   var_dump($dataNascimentoDoUsuario);
   var_dump($telefoneDoUsuario);
   var_dump($enderecoDoUsuario);
   var_dump($nomeMaeDoUsuario);
   var_dump($nomePaiDoUsuario);
   var_dump($emailDoUsuario);
   */
}

public function acessarConta(){

include 'conexaobanco.php';

$emailDoUsuario = $this->getEmailUsuario();
$senhaDoUsuario = $this->getSenhaUsuario();
$loginSucesso = "O login foi efetuado com sucesso";
$loginFalhou = "Email ou senha incorretos, tente novamente";

//$sql = "SELECT * from usuario WHERE email='".$this->emailUsuario."'";
$sql = "SELECT * from usuario WHERE email= '".$emailDoUsuario."' AND senha='".$senhaDoUsuario."' ";
$result = mysqli_query($conexao,$sql);
$num_rows = mysqli_num_rows($result);

if($num_rows>0){
while ($row = mysqli_fetch_array($result)) {
     
     /*
     echo $row['email']; 
     echo $row['senha'];
     */
     echo $loginSucesso;
     
    }

}else{

	echo $loginFalhou;
}

}



}


?>
