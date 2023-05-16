<?php
$pagina = @$_GET['pagina'];

if ($pagina == "listar-servicos") {
    header('Location:../listar-servicos.php');
} 
elseif ($pagina == "listar-cargos") {
    header('Location:../listar-cargos.php');
}
elseif ($pagina == "listar-usuarios") {
    header('Location:../listar-usuarios.php');
}
elseif ($pagina == "listar-materiais") {
    header('Location:../listar-materiais.php');
}
elseif ($pagina == "home") {
    header('Location:../index.php');
}
 else {
    require_once '404.html';
}

?>
