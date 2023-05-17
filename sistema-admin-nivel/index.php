<?php require_once "./config/_conexao.php";
$pdo = PdoConexao::getInstancia();
//criar um usuario administrador
$senha_crip = md5('admin');
//echo $senha_crip;

$query = $pdo->query("select * from admin");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$total_result = @count($result);

// exit();

if ($total_result == 0) {
	$email = "digital@digitalspacesw.com.br";
	$senha = "1234";

	$salt = md5($email . $senha);
	echo $salt . "<br>";
	$custo = "06";
	$senhaHash = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");

	$pdo->query("insert into admin(nomeAdmin,cpfAdmin,emailAdmin,descricaoAdmin,senhaAdmin,fotoAdmin,nivelAdmin)
    values
    ('admin', '000.000.000-00', '$email', 'Alterar descrição' , '$senhaHash','avatar1.png',0);");
}

?>



<div class="card-body">
	<form method="POST" action="autenticar.php">
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-user"></i></span>
			</div>
			<input type="text" class="form-control" placeholder="username" name="email">

		</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-key"></i></span>
			</div>
			<input type="password" class="form-control" placeholder="password" name="senha">
		</div>
		<div class="row align-items-center remember">
			<input type="checkbox">Lembre de mim
		</div>
		<div class="form-group">
			<input type="submit" value="Login" class="btn float-right login_btn">
		</div>
	</form>
</div>
<div class="card-footer">
	<!-- <div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div> -->
	<div class="d-flex justify-content-center">
		<a href="#">Esqueceu sua senha?</a>
	</div>
</div>

</body>

</html>