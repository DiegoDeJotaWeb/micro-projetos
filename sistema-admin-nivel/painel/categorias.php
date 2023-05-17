<?php
 require_once './../../config/_conexao.php';
 $pdo = PdoConexao::getInstancia();

$queryCategoriaPortfolio = $pdo->query("select * from categoriaPortfolio");

?>

<table>
    <thead>
        <tr>
            <td>Categoria</td>
            <td>Ação</td>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($linhaCategoriaPortfolio = $queryCategoriaPortfolio->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $linhaCategoriaPortfolio['tituloCategoriaPotfolio'];?></td>
            <td><a href="./categoriaEditar.php?id=<?php echo $linhaCategoriaPortfolio['idCategoriaPotfolio'];?>">alterar</a></td>
            <td><a href="./vendor/_categoriaPortfolio.php?categoriaDeletar=<?php echo $linhaCategoriaPortfolio['idCategoriaPotfolio'];?>">Deletar</a></td>
        </tr>
        <?php } ?>
    </tbody>
    
</table>

