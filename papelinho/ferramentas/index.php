<?php
require_once "./vendor/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .profissional {
            text-align: center;
        }

        .profissional img {
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $query = $pdo->query("SELECT * FROM tb_servico");


        ?>
<!-- sistema/painel/vendor/cadastro/_cadastroAgendamento.php -->
        <form action="sistema/painel/vendor/cadastro/_cadastroAgendamento.php" method="post">
            <div class="row">
                <div class="mb-3">
                    <label for="" class="form-label">Serviços</label>
                    <select class="form-select" name="servico" id="servico" onchange="servico1()">
                        <option value="">Selecione o serviço</option>
                        <?php
                        while ($linha1 = $query->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='{$linha1['idServico']}'>{$linha1['nomeServico']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <script>
                    function servico1() {
                        var servico = document.getElementById("servico").value;
                        console.log(servico)
                        var http = new XMLHttpRequest();
                        var url = 'vendor/processarServico.php';
                        var params = 'servico=' + servico;
                        http.open('POST', url, true);
                        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        http.onreadystatechange = function() {
                            if (http.readyState == 4 && http.status == 200) {
                                let resposta = http.responseText;
                                resposta = JSON.parse(this.responseText);
                                console.log(resposta);
                                //  console.log(resposta.queryServicoHorario);
                                horariosResult = document.getElementById('optionHorario');
                                let result = '';

                                if (resposta) {
                                    for (let i = 0; i < resposta.queryServicoHorario.length; i++) {
                                        // console.log(resposta.queryServicoHorario[i]);

                                        horario = resposta.queryServicoHorario[i];

                                        console.log(horario.horarioHoraEntrada);

                                        result += `<option value="${horario.horarioHoraEntrada} - ${horario.horarioHoraSaida}" >${horario.horarioHoraEntrada} - ${horario.horarioHoraSaida}</option>
        
        
        `;

                                        horariosResult.innerHTML = "";
                                        horariosResult.innerHTML = result;
                                    }
                                }
                                alert(`servico: ${resposta.tipoServico}`);
                            }
                        }
                        http.send(params);
                    }
                </script>







                <div class="col-md-12">
                    <div class="mb-3 form-check">

                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="tipo" value="infantil">
                        <label class="form-check-label" for="exampleCheck2">Infantil</label>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tipo" value="aduldo">
                        <label class="form-check-label" for="exampleCheck1">Adulto</label>

                    </div>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Data</label>
                    <input type="date" class="form-control" id="" name="data">
                </div>

                <div class="mb-3 col-md-6">
                    <label for="" class="form-label">Horarios</label>
                    <select id="optionHorario" class="form-select" name="hora">
                        <option disabled>Selecione o serviço para desbloquer os horarios</option>
                    </select>
                </div>



            </div>
            <button type="button" class="col-md-12 btn btn-primary">Selecionar Profissional</button>

            <div class="row profissional">

            <div class="col-md-3  p-3 mb-3">
                        <div>
                            <input type="radio" name="user" id="qualquerUser" checked value="qualquerUser"/>
                            <label for="qualquerUser" class="p-3">
                                <img src="img/user-3.jpg" alt="">
                                <h3>Qualquer</h3>
                            </label>
                        </div>
                    </div>

                <?php
                $query4 = $pdo->query("SELECT * FROM tb_usuario");


                while ($linha4 = $query4->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col-md-3  p-3 mb-3">
                        <div>
                            <input type="radio" name="user" id="i<?php echo $linha4['idUsuario']?>" value="<?php echo $linha4['idUsuario']?>" />
                            <label for="i<?php echo $linha4['idUsuario']?>" class="p-3">
                                <img src="sistema/painel/assets/images/funcionarios/<?php echo $linha4['fotoUsuario'] ?>" alt="">
                                <h3><?php echo $linha4['nomeUsuario'] ?></h3>
                            </label>
                        </div>
                    </div>
                <?php
                }
                ?>
               
            </div>
            <style>
                .profissional input[type="radio"] {
                    visibility: hidden;
                }

                .profissional label {
                    display: block;
                    background-color: beige;
                }

                .profissional input[type="radio"]:checked+label {
                    background-color: crimson;
                }
            </style>


            <button type="button" class="col-md-12 btn btn-primary">Agendar serviço</button>


            <div class="card-group ">
                <div class="card">
                    <div class="img-agendamento" style="background-image: url('img/salao-1.jpg'); height: 100px; width: 100%;background-position: center;background-repeat: no-repeat;background-size:cover ;">
                    </div>
                    <!-- <img src="img/salao-1.jpg" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Serviço 1</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Profissional - <span>Nome do profissional</span></li>
                            <li class="list-group-item">Tipo - <span>Adulto</span></li>
                            <li class="list-group-item">Data - <span>08/11/2022 - 13:30</span></li>
                            <li class="list-group-item">Local - Rua das Rosas, n 999</li>
                            <li class="list-group-item">Valor - R$ 40,00</li>
                        </ul>
                        <p class="card-text"><small class="text-muted">Chegar 10 min antes</small></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Cancelar</small>
                    </div>
                </div>
            </div>

            <button type="submit" class="col-md-12 btn btn-primary">Confirmar agendamento</button>
        </form>



    </div>
    <input type="date" id="no-spin" onkeypress="return false" name="date" min="">

    <script>
        var today = new Date();
        today.setDate(today.getDate() + 7);
        console.log(today)
        today = today.toISOString().split('T')[0];

        document.getElementsByName("date")[0].setAttribute('min', today);
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        var inputs = $('[type="checkbox"]');
        inputs.on('click', function() {
            inputs.get().forEach(function(el) {
                el.checked = el == this && this.checked;
            }, this);
        });
    </script>
</body>

</html>