<?php
include 'verificar.php';

echo   $_SESSION['email_admin'];
?>
<br>
<a href="categorias.php">Categoria</a>
<br>
<a href="cadastroCategoria.php">Cadastro Categoria</a>
<br>
<a href="../logout.php">Sair</a>

<br>

<?php
include './vendor/_menu.php';
?>