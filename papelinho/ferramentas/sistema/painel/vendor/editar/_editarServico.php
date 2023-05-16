<?php

// print_r($file_name_foto = $_FILES['imagemServico']);
echo  $_FILES['imagemServico']['name'];

function editarServico()
{
    try {
        require_once './../_conexao.php';
        $idServico = $_POST['idServico'];
        $nomeServico = $_POST['nomeServico'];
        $valorServico = $_POST['valorServico'];
        $horasServico = $_POST['horasServico'];
        $descricaoServico = $_POST['descricaoServico'];
        
        // echo $nomeCargo . " " .  $idCargo;


        date_default_timezone_set("Etc/GMT-8");

        if (isset($_POST['nomeServico'])) {
            // setando a foto do tipo de imovel
            $file_name_foto = $_FILES['imagemServico']['name'];
          
            $file_temp_foto = $_FILES['imagemServico']['tmp_name'];
            $file_size_foto = $_FILES['imagemServico']['size'];
            $file_type_foto = $_FILES['imagemServico']['type'];
            $date_uploaded = date("Y-m-d");
            $location = "./../../assets/images/servicos/" . $file_name_foto;
            


            if ($file_size_foto != 0) {
                // if(move_uploaded_file($file_temp_foto, $location) && move_uploaded_file($file_temp_ficha, $location)){

                    move_uploaded_file($file_temp_foto, $location);

                try {
        $stmt = $pdo->prepare('UPDATE tb_servico SET nomeServico = :nomeServico,valorServico = :valorServico,horaServico = :horasServico,descricaoServico = :descricaoServico, capaServico = :capaServico    WHERE idServico = :idServico');

       
        $stmt->execute(array(
            ':idServico' => $idServico,
            ':nomeServico' => $nomeServico,
            ':valorServico' => $valorServico,
            ':horasServico' => $horasServico,
            ':descricaoServico' => $descricaoServico,
            ':capaServico' => $file_name_foto
        ));
     
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-servicos');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $pdo = null;
}
}
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeServico'])) {
    editarServico();
} else {
    echo 'eroo 3';
}

?>

