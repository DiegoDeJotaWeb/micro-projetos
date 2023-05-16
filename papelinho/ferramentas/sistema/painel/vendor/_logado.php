<?php
$id_usuario = $_SESSION['id_usuario'];
$query = $pdo->query("select * from tb_usuario where idUsuario = $id_usuario");

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_res = @count($res);

//recuperar os dados do usuario logado

if ($total_res > 0) {
	$nome_user = $res[0]['nomeUsuario'];
	$foto_user = $res[0]['fotoUsuario'];
	$nivel_user = $res[0]['adminUsuario'];
	$cpf_user = $res[0]['cpfUsuario'];
	$senha_user = $res[0]['senhaUsuario'];
	$email_user = $res[0]['emailUsuario'];
	$id_user = $res[0]['idUsuario'];
	$foto_user = $res[0]['fotoUsuario'];
}

$pagina = @$_GET['pagina'];

?>