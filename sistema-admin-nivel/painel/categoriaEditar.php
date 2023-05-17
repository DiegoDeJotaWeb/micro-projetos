<?php
require_once './../../config/_conexao.php';
$pdo = PdoConexao::getInstancia();
$idCategoria = $_GET['id'];


echo $idCategoria;
$queryCategoriaPortfolio = $pdo->query("select * from categoriaPortfolio where  idCategoriaPotfolio = $idCategoria");

?>

<form action="./vendor/_categoriaPortfolio.php" method="POST">
    <?php

    while ($linhaCategoriaPortfolio = $queryCategoriaPortfolio->fetch(PDO::FETCH_ASSOC)) { ?>
        <input type="text" value="<?php echo $linhaCategoriaPortfolio['tituloCategoriaPotfolio'] ?>" name="categoriaEditar">
        <input type="hidden" value="<?php echo $linhaCategoriaPortfolio['idCategoriaPotfolio']?>" name="idCategoriaEditar">

    <?php } ?>
    <input type="submit" value="Alterar">
</form>