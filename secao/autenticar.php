<?php

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

session_cache_expire(120);
$cache_expire = session_cache_expire(); 


@session_start();
require_once './config/_conexao.php';
$pdo = PdoConexao::getInstancia();
$usuario = $_POST['usuario'];
echo $usuario . '<br>';
$senha = $_POST['senha'];
echo $senha . '<br>';
$salt = md5($usuario.$senha);
echo $salt . '<br>';
$custo = "06";
$senhaHash = crypt($senha, "$2b$" .$custo. "$" .$salt. "$");

echo $senhaHash . '<br>';

$query = $pdo->prepare("select * from admin where (nomeAdmin = :usuario) and senhaCripAdmin = :senha");

$query->bindValue(":usuario","$usuario");
$query->bindValue(":senha", "$senhaHash");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);
$total_result = @count($result);

if ($total_result > 0) {
    $_SESSION['id_admin'] = $result[0]['idAdmin'];
    $_SESSION['nome_admin'] = $result[0]['nomeAdmin'];
    $_SESSION['foto_admin'] = $result[0]['fotoAdmin'];
    $_SESSION['email_admin'] = $result[0]['emailAdmin'];
    echo "<script>window.location='painel';</script>";
    echo   'teste';
}else{
    echo   'teste';
    // echo "<script>window.alert('Dados incoretos');</script>";
    // echo "<script>window.location='index.php';</script>";
    // header('Location:index.php');
    // print_r($_POST);
}


?>