<?php

// print_r($file_name_foto = $_FILES['imagemServico']);
// echo  $_FILES['imagemUsuario']['name'];



// die;

function editarUsuario()
{

    echo $_FILES['fotoUsuario']['name'];
    echo $_POST['nomeUsuario'];
    try {
        require_once './../_conexao.php';
        $idUsuario = $_POST['idUsuario'];
        $nomeUsuario = $_POST['nomeUsuario'];
        $dtNascimentoUsuario = $_POST['dtNascimentoUsuario'];
        $cpfUsuario = $_POST['cpfUsuario'];
        $rgUsuario = $_POST['rgUsuario'];
        $emailUsuario = $_POST['emailUsuario'];
        $telefoneUsuario = $_POST['telefoneUsuario'];
        $celularUsuario = $_POST['celularUsuario'];
        $dtAdmissaoUsuario = $_POST['dtAdmissaoUsuario'];
        $cargoUsuario = $_POST['cargoUsuario'];
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
        // $fotoUsuario = $_POST['fotoUsuario'];
        $senhaUsuario = $_POST['senhaUsuario'];
        $observacaoUsuario = $_POST['observacaoUsuario'];
             
        // echo $nomeCargo . " " .  $idCargo;


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
        $stmt = $pdo->prepare('UPDATE tb_usuario SET    
        nomeUsuario = :nomeUsuario,
        dtNascimentoUsuario = :dtNascimentoUsuario,
cpfUsuario = :cpfUsuario,
rgUsuario = :rgUsuario,
emailUsuario = :emailUsuario,
telefoneUsuario = :telefoneUsuario,
celularUsuario = :celularUsuario,
dtAdmissaoUsuario = :dtAdmissaoUsuario,
cargoUsuario = :cargoUsuario,
adminUsuario = :adminUsuario,
bancoUsuario = :bancoUsuario,
tipoContaUsuario = :tipoContaUsuario,
contaUsuario = :contaUsuario,
agenciaUsuario = :agenciaUsuario,
pixUsuario = :pixUsuario,
cepUsuario = :cepUsuario,
enderecoUsuario = :enderecoUsuario,
bairroUsuario = :bairroUsuario,
cidadeUsuario = :cidadeUsuario,
fotoUsuario = :fotoUsuario,
senhaUsuario = :senhaUsuario,
observacaoUsuario = :observacaoUsuario
        
        
           WHERE idUsuario = :idUsuario');

       
        $stmt->execute(array(
            ':idUsuario'=>  $idUsuario,      
            ':nomeUsuario' => $nomeUsuario,
            ':dtNascimentoUsuario' => $dtNascimentoUsuario,
':cpfUsuario' => $cpfUsuario,
':rgUsuario' => $rgUsuario,
':emailUsuario' => $emailUsuario,
':telefoneUsuario' => $telefoneUsuario,
':celularUsuario' => $celularUsuario,
':dtAdmissaoUsuario' => $dtAdmissaoUsuario,
':cargoUsuario' => $cargoUsuario,
':adminUsuario' => $adminUsuario,
':bancoUsuario' => $bancoUsuario,
':tipoContaUsuario' => $tipoContaUsuario,
':contaUsuario' => $contaUsuario,
':agenciaUsuario' => $agenciaUsuario,
':pixUsuario' => $pixUsuario,
':cepUsuario' => $cepUsuario,
':enderecoUsuario' => $enderecoUsuario,
':bairroUsuario' => $bairroUsuario,
':cidadeUsuario' => $cidadeUsuario,
':fotoUsuario' => $file_name_foto,
':senhaUsuario' => $senhaUsuario,
':observacaoUsuario' => $observacaoUsuario
        ));
     
        echo $stmt->rowCount();
        // header('Location:../_pag.php?pagina=listar-usuarios');
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

if (isset($_POST['nomeUsuario'])) {
    editarUsuario();
} else {
    echo 'eroo 3';
}
