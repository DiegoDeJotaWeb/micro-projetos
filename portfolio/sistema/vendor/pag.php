<?php
$pagina = @$_GET['pagina'];

if ($pagina == "listar-categorias") {
    header('Location:../listar-categorias.php');
} 
elseif ($pagina == "listar-cliente") {
    header('Location:../listar-clientes.php');
}
 else {
    require_once '404.html';
}

?>
