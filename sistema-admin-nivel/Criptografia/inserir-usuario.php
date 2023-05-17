<?php

include_once("config/conexao.php");

if($_POST){

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
echo $senha . "<br>";
//Criptografar a senha
//Crypt(senha, options)


$salt = md5($usuario.$senha);
echo $salt . "<br>";
$custo = "06";
$senhaHash = crypt($senha, "$2b$" .$custo. "$" .$salt. "$");

echo $senhaHash . "<br>";

$query = "INSERT INTO tbl_acessos(usuario, senha) VALUES ('$usuario', '$senhaHash') ";



$inserir = mysqli_query($conexao, $query);

if($inserir){

    echo "Deu Certo :)";

}else{

    echo "Deu Errado ;(";

}


}else{

}