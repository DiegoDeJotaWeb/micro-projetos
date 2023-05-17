<?php 
date_default_timezone_set('America/Sao_Paulo');


$nome_site = "IMOBILIÁRIA CAIPORA";

//conexao local
//conexao local
// $usuario = "id20171703_diegocodigocomcafe";
// $senha = "][#6(iDM{-IA$3uW";
// $banco = "id20171703_codigocomcafe";
// $servidor = "localhost";


$usuario = "root";
$senha = "";
$banco = "secao";
$servidor = "localhost";



try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
} catch (\Throwable $th) {
    echo "Erro ao conectar ao banco de dados <br>";
    echo $th;
}
?>