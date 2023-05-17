<?php

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

session_cache_expire(120);
$cache_expire = session_cache_expire(); 


@session_start();
require_once './config/_conexao.php';
$pdo = PdoConexao::getInstancia();
$email = $_POST['email'];
$senha = $_POST['senha'];
$salt = md5($email . $senha);
$custo = "06";
$senhaHash = crypt($senha, "$2b$" .$custo. "$" .$salt. "$");


$query = $pdo->prepare("select * from admin where (emailAdmin = :email) and senhaAdmin = :senha");

$query->bindValue(":email","$email");
$query->bindValue(":senha", "$senhaHash");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
$total_result = @count($result);

if ($total_result > 0) {
    $_SESSION['id_admin'] = $result[0]['idAdmin'];
    $_SESSION['nome_admin'] = $result[0]['nomeAdmin'];
    $_SESSION['foto_admin'] = $result[0]['fotoAdmin'];
    $_SESSION['email_admin'] = $result[0]['emailAdmin'];
    echo "<script>window.location='painel';</script>";
}else{
    echo "<script>window.alert('Dados incoretos');</script>";
    echo "<script>window.location='index.php';</script>";
    header('Location:index.php');
}


?>