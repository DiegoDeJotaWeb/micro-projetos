<?php
require_once './../../config/_conexao.php';
$pdo = PdoConexao::getInstancia();

$queryPortfolio = $pdo->query("SELECT *
FROM portfolio
INNER JOIN cliente 
ON portfolio.clienteID=cliente.idCliente
INNER JOIN categoriaPortfolio 
ON portfolio.categoriaID=categoriaPortfolio.idCategoriaPotfolio;
");


if (isset($_POST['pesquisa'])) {
    $pesquisa = $_POST['pesquisa'];

    $queryPortfolio = $pdo->query("SELECT *
FROM portfolio
INNER JOIN cliente 
ON portfolio.clienteID=cliente.idCliente
INNER JOIN categoriaPortfolio 
ON portfolio.categoriaID=categoriaPortfolio.idCategoriaPotfolio WHERE empresaCliente LIKE '%$pesquisa%'
");

  
}
// elseif( $queryPortfolio->rowCount() == 0){
//     echo "Nada encontrado";
// }

// } elseif (isset($_POST['pesquisaKey'])) {

//     $pesquisaKey = $_POST['pesquisaKey'];
//     $queryPortfolio = $pdo->query("select * from portfolio where categoriaID LIKE '%$pesquisaKey%'");
// }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <form method="POST" action="#">
        <div class="my-
  ">
            <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Pesquisar">

        </div>
        <!-- <select class="form-select" aria-label="Default select example" name="pesquisaKey">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select> -->

        <div class="d-grid gap-2 my-3">
                    <button class="btn btn-primary" type="submit">Pesquisa</button>
                    
                </div>

    </form>
    <div class="row">
    <?php
        while ($linhaPortfolio1 = $queryPortfolio->fetch(PDO::FETCH_ASSOC)) {
        ?>

        <div class="col-md-6  px-4 py-4">
            <div class="px-4 py-4" style="border:1px solid black">
                <div class="row">
                    <h1><?php echo $linhaPortfolio1['empresaCliente']; ?></h1>
                    <h4><?php echo $linhaPortfolio1['tituloCategoriaPotfolio']; ?></h4>
                   
                    <p><?php echo $linhaPortfolio1['descricaoPortfolio']; ?></p>

                    <div class="col-md-6">
                        <div>
                        

                        <img src="./../../assets/images/portfolio/<?php echo $linhaPortfolio1['img2Portfolio']; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <img src="./../../assets/images/portfolio/<?php echo $linhaPortfolio1['img1Portfolio']; ?>" alt="" class="img-fluid">
                        </div>
                        <div>
                        <img src="./../../assets/images/portfolio/<?php echo $linhaPortfolio1['capaPortfolio']; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 my-3">
                    <button class="btn btn-warning" type="button">Editar</button>
                    <button class="btn btn-danger" type="button">Apagar</button>
                </div>

            </div>
        </div>


<?php }?>

      
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table class="table">
    <thead>
        <tr>
            <td>Descrição</td>
            <td colspan="3">Imagens</td>
            <td>Categoria</td>
            <td>Empresa</td>
            <td colspan="2">Ações</td>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($linhaPortfolio = $queryPortfolio->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $linhaPortfolio['descricaoPortfolio']; ?></td>
                <td><img src="./../../assets/images/portfolio/<?php echo $linhaPortfolio['capaPortfolio']; ?>" alt="" class="img-fluid"></td>
                <td><img src="./../../assets/images/portfolio/<?php echo $linhaPortfolio['img1Portfolio']; ?>" alt="" class="img-fluid"></td>
                <td><img src="./../../assets/images/portfolio/<?php echo $linhaPortfolio['img2Portfolio']; ?>" alt="" class="img-fluid"></td>
                <td>Desenvolvimento web</td>
                <td>Nome da empresa</td>
                <td>Editar</td>
                <td>Apagar</td>
                <!-- <td><a href="./categoriaEditar.php?id=<?php // echo $linhaPortfolio['idCategoriaPotfolio'];
                                                            ?>">alterar</a></td> -->
                <!-- <td><a href="./vendor/_categoriaPortfolio.php?categoriaDeletar=<?php // echo $linhaCategoriaPortfolio['idCategoriaPotfolio'];
                                                                                    ?>">Deletar</a></td> -->
            </tr>
        <?php } ?>
    </tbody>

</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>