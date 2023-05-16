<?php

function cadastroServico()
{
    try {
        require_once '../_conexao.php';
        $nomeServico = $_POST['nomeServico'];
        $valorServico = $_POST['valorServico'];
        $qtdHoraServico = $_POST['qtdHoraServico'];
        $descricaoServico = $_POST['descricaoServico'];
        // imagemServico

        date_default_timezone_set("Etc/GMT-8");

        if (isset($_POST['nomeServico'])) {
            // setando a foto do tipo de imovel
            $file_name_foto = $_FILES['imagemServico']['name'];
            $file_temp_foto = $_FILES['imagemServico']['tmp_name'];
            $file_size_foto = $_FILES['imagemServico']['size'];
            $file_type_foto = $_FILES['imagemServico']['type'];
            $date_uploaded = date("Y-m-d");
            $location = "./../../assets/images/sevicos/" . $file_name_foto;



            if ($file_size_foto != 0) {
                // if(move_uploaded_file($file_temp_foto, $location) && move_uploaded_file($file_temp_ficha, $location)){

                move_uploaded_file($file_temp_foto, $location);

                try {

                    $stmt = $pdo->prepare("insert into tb_servico (nomeServico,valorServico,descricaoServico,horaServico,capaServico) values (:nomeServico,:valorServico,:descricaoServico,:qtdHoraServico,:imagemServico)");
                    $stmt->execute(array(
                        ':nomeServico' => $nomeServico,
                        ':valorServico' => $valorServico,

                        ':descricaoServico' => $descricaoServico,
                        ':qtdHoraServico' => $qtdHoraServico,
                        ':imagemServico' => $file_name_foto
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
    cadastroServico();
} else {
    echo 'eroo 1';
}
