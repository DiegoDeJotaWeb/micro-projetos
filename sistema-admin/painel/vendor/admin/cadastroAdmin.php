<?php

include './../../../config/_conexao.php';
$pdo = PdoConexao::getInstancia();

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->query("select * from admin WHERE emailAdmin = '$email'");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$total_user = @count($result);

if ($total_user == 0) {
    $salt = md5($email . $senha);
    echo $salt . "<br>";
    $custo = "06";
    $senhaHash = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");

    $pdo->query("insert into admin(nomeAdmin,cpfAdmin,emailAdmin,descricaoAdmin,senhaAdmin,fotoAdmin)
    values
    ('admin', '000.000.000-00', '$email', 'Alterar descrição' , '$senhaHash','avatar1.png');");
} else {

    echo "<script>alert('Usuario já cadastrado');</script>";
    echo "<script>window.location.href = './admin.php'</script>";
}
