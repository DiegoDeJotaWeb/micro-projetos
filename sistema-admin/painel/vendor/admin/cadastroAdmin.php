<?php

include './../../../../config/_conexao.php';
$pdo = PdoConexao::getInstancia();

$email = $_POST['email'];
$senha = $_POST['senha'];

$salt = md5($email . $senha);
echo $salt . "<br>";
$custo = "06";
$senhaHash = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");

$pdo->query("insert into admin(nomeAdmin,cpfAdmin,emailAdmin,descricaoAdmin,senhaAdmin,fotoAdmin)
    values
    ('admin', '000.000.000-00', '$email', 'Alterar descrição' , '$senhaHash','avatar1.png');");
?>