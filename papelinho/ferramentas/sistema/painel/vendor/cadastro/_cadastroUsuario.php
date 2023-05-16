<?php

// echo $_POST['nomeUsuario'];
// echo "<br>";
// echo $_POST['cargoUsuario'];
// echo "<br>";
// echo $_POST['dtNascimentoUsuario'];
// echo "<br>";
// echo $_POST['cpfUsuario'];
// echo "<br>";


// var_dump($_POST) ;
echo '<pre>';
print_r($_POST);
echo '</pre>';




function cadastroUsuario()
{
    try {
        require_once '../_conexao.php';
        $nomeUsuario = $_POST['nomeUsuario'];
        $cargoUsuario = $_POST['cargoUsuario'];
        $dtNascimentoUsuario = $_POST['dtNascimentoUsuario'];
        $cpfUsuario = $_POST['cpfUsuario'];
        $rgUsuario = $_POST['rgUsuario'];
        $emailUsuario = $_POST['emailUsuario'];
        $telefoneUsuario = $_POST['telefoneUsuario'];
        $celularUsuario = $_POST['celularUsuario'];
        $dtAdmissaoUsuario = $_POST['dtAdmissaoUsuario'];
        $adminUsuario = $_POST['adminUsuario'];
        $bancoUsuario = $_POST['bancoUsuario'];
        $tipoContaUsuario = $_POST['tipoContaUsuario'];
        $contaUsuario = $_POST['contaUsuario'];
        $agenciaUsuario = $_POST['agenciaUsuario'];
        $pixUsuario = $_POST['pixUsuario'];
        $cepUsuario = $_POST['cepUsuario'];
        $enderecoUsuario = $_POST['enderecoUsuario'];
        $bairroUsuario = $_POST['bairroUsuario'];
        $cidadeUsuario = $_POST['cidadeUsuario'];
        $fotoUsuario = $_POST['fotoUsuario'];
        $senhaUsuario = $_POST['senhaUsuario'];
        $descricaoSUsuario = $_POST['observacaoUsuario'];

echo '<pre></pre>';
print_r($_FILES['fotoUsuario']) ;
echo '</pre>';
        echo $emailUsuario;

        date_default_timezone_set("Etc/GMT-8");

        if (isset($_POST['nomeUsuario'])) {
            // setando a foto do tipo de imovel
            $file_name_foto = $_FILES['fotoUsuario']['name'];
            $file_temp_foto = $_FILES['fotoUsuario']['tmp_name'];
            $file_size_foto = $_FILES['fotoUsuario']['size'];
            $file_type_foto = $_FILES['fotoUsuario']['type'];
            $date_uploaded = date("Y-m-d");
            $location = "./../../assets/images/funcionarios/" . $file_name_foto;



            if ($file_size_foto != 0) {
                // if(move_uploaded_file($file_temp_foto, $location) && move_uploaded_file($file_temp_ficha, $location)){

                move_uploaded_file($file_temp_foto, $location);

                try {

                    $stmt = $pdo->prepare("insert into tb_usuario (nomeUsuario,cargoUsuario,dtNascimentoUsuario,cpfUsuario,rgUsuario,emailUsuario,telefoneUsuario,celularUsuario,dtAdmissaoUsuario,adminUsuario,bancoUsuario,tipoContaUsuario,contaUsuario,agenciaUsuario,pixUsuario,cepUsuario,enderecoUsuario,bairroUsuario,
        cidadeUsuario,senhaUsuario,fotoUsuario,observacaoUsuario) values (:nomeUsuario,:cargoUsuario,:dtNascimentoUsuario,:cpfUsuario,:rgUsuario,:emailUsuario,:telefoneUsuario,:celularUsuario,:dtAdmissaoUsuario,:adminUsuario,:bancoUsuario,:tipoContaUsuario,:contaUsuario,:agenciaUsuario,:pixUsuario,:cepUsuario,:enderecoUsuario,:bairroUsuario,
        :cidadeUsuario,:senhaUsuario,:fotoUsuario,:observacaoUsuario)");
                    $stmt->execute(array(



                        ':nomeUsuario' => $nomeUsuario,
                        ':cargoUsuario' => $cargoUsuario,
                        ':dtNascimentoUsuario' => $dtNascimentoUsuario,
                        ':cpfUsuario' =>  $cpfUsuario,
                        ':rgUsuario' => $rgUsuario,
                        ':emailUsuario' =>  $emailUsuario,
                        ':telefoneUsuario' =>  $telefoneUsuario,
                        ':celularUsuario' => $celularUsuario,
                        ':dtAdmissaoUsuario' => $dtAdmissaoUsuario,
                        ':adminUsuario' => $adminUsuario,
                        ':bancoUsuario' =>  $bancoUsuario,
                        ':tipoContaUsuario' => $tipoContaUsuario,
                        ':contaUsuario' => $contaUsuario,
                        ':agenciaUsuario' => $agenciaUsuario,
                        ':pixUsuario' => $pixUsuario,
                        ':cepUsuario' => $cepUsuario,
                        ':enderecoUsuario' => $enderecoUsuario,
                        ':bairroUsuario' => $bairroUsuario,
                        ':cidadeUsuario' => $cidadeUsuario,
                        ':senhaUsuario' => $senhaUsuario,
                        ':fotoUsuario' => $file_name_foto,
                        ':observacaoUsuario' => $descricaoSUsuario
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
        echo 'eroo 0';
    }
}

if (isset($_POST['nomeUsuario'])) {
    cadastroUsuario();
} else {
    echo 'eroo 1';
}


?>
