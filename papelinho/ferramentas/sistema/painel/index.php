<?php

require_once "verificar.php";
require_once "./vendor/_conexao.php";
require_once "./vendor/_logado.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, monster admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, " />
  <meta name="description" content="Monster is powerful and clean admin dashboard template, inpired from Google's Material Design" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Monster Template by WrapPixel</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/libs/apexcharts/dist/apexcharts.css" />
  <!-- Custom CSS -->
  <link href="dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div id="alerts">
    <div class="alert alert-info" id="sucessoTarefa" role="alert">
      Tarefa feita com sucesso
    </div>

    <div class="alert alert-danger" id="desfeitaTarefa" role="alert">
      Tarefa desfeita com sucesso
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#009efb" stroke-width="2"></path>
      <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#009efb" stroke-width="2"></path>
      <path id="teabag" fill="#009efb" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#009efb"></path>
      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#009efb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <?php require 'vendor/_menuSuperior.php'; ?>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php require 'vendor/_menuLateral.php'; ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-md-5 align-self-center">
            <h3 class="page-title">Dashboard</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="
                col-md-7
                justify-content-end
                align-self-center
                d-none d-md-flex
              ">
            <div class="d-flex">
              <div class="dropdown me-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  January 2021
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">February 2021</a></li>
                  <li><a class="dropdown-item" href="#">March 2021</a></li>
                  <li><a class="dropdown-item" href="#">April 2021</a></li>
                </ul>
              </div>
              <button class="btn btn-success">
                <i data-feather="plus" class="fill-white feather-sm"></i>
                Create
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Clientes cadastrados</h4>
                <div class="text-end">
                  <h2 class="fw-light mb-0">
                    <i class="ti-arrow-up text-success"></i>
                    <?php

                    // $query = $pdo->query("SELECT * FROM tb_cliente");
                    // $total = $query->rowCount();

                    // //   $query = $pdo->query("SELECT COUNT(*) FROM tb_cliente");
                    // //  $teste = $query->fetch(PDO::FETCH_ASSOC);
                    // echo $total;
                    // //  while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                    // //   echo $linha['idServico'];
                    // //  }
                    ?>
                  </h2>
                  <span class="text-muted">Total</span>
                </div>
                <span class="text-success">80%</span>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <div class="text-end">
                  <h2 class="fw-light mb-0">
                    <i class="ti-arrow-up text-success"></i> $120
                  </h2>
                  <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-success">80%</span>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Weekly Sales</h4>
                <div class="text-end">
                  <h2 class="fw-light mb-0">
                    <i class="ti-arrow-up text-info"></i> $5,000
                  </h2>
                  <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-info">30%</span>
                <div class="progress">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Monthly Sales</h4>
                <div class="text-end">
                  <h2 class="fw-light mb-0">
                    <i class="ti-arrow-up text-purple"></i> $8,000
                  </h2>
                  <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-purple">60%</span>
                <div class="progress">
                  <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Yearly Sales</h4>
                <div class="text-end">
                  <h2 class="fw-light mb-0">
                    <i class="ti-arrow-down text-danger"></i> $12,000
                  </h2>
                  <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-danger">80%</span>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Agendamentos recentes</h4>
              </div>
              <!-- ============================================================== -->
              <!-- Comment widgets -->
              <!-- ============================================================== -->
              <div class="comment-widgets scrollable position-relative mb-2" style="height: 450px">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">James Anderson</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Corte de cabelo
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <!-- <span class="badge bg-light-info text-info">Pending</span>
                      <span class="action-icons">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart"></i></a>
                      </span> -->
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">28/11/2022</span>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3 active">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        active
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">Michael Jorden</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry..
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <span class="badge bg-light-success text-success">Approved</span>
                      <span class="action-icons active">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="icon-close"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart text-danger"></i></a>
                      </span>
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/3.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">Johnathan Doeting</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry.
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <span class="badge bg-light-danger text-danger">Rejected</span>
                      <span class="action-icons">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart"></i></a>
                      </span>
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">James Anderson</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry..
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <!-- <span class="badge bg-light-info text-info">Pending</span> -->
                      <!-- <span class="action-icons">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart"></i></a>
                      </span> -->
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Lista de tarefas</h4>

                  <div class="ms-auto">
                    <button class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                      Adicionar tarefa
                    </button>
                  </div>
                </div>
                <!-- .modal for add task -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title">Adicionar uma nova tarefa</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form method="POST" action="vendor/cadastro/_cadastroTarefa.php">
                        <div class="modal-body">

                          <div class="col-md-12">
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="tituloTarefa">
                              <input type="hidden" class="form-control" name="usuarioId" value="<?php echo $id_user ?>">
                              <input type="hidden" class="form-control" name="statusTarefa" value="0">
                              <label for="tb-fname">Titulo</label>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-floating mb-3">
                              <select class="form-select col-12" name="nivelTarefa">
                                <option value="Pouco urgente">Pouco urgente</option>
                                <option value="Médio">Médio</option>
                                <option value="Urgente">Urgente</option>
                              </select>
                              <label for="tb-fname">Nivel da tarefa</label>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-floating mb-3">
                              <textarea name="descricaoTarefa" class="form-control" id="" cols="30" rows="30"></textarea>
                              <label for="tb-fname">Descrição</label>
                            </div>
                          </div>


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancelar
                          </button>
                          <button type="submit" class="btn btn-success" data-bs-dismiss="modal">
                            Cadastrar
                          </button>
                        </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                <div class="to-do-widget mt-3 scrollable" style="height: 444px">
                  <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                    <?php
                    $query = $pdo->query("SELECT *
FROM tb_tarefa");

                    ?>




                    <tbody>
                      <?php
                      while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                      ?>



                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                          <div class="
                            form-check
                            border-start border-2 border-info
                            ps-1
                          ">
                            <div>
                              <form action="#">
                                <input type="checkbox" class="form-check-input ms-2 statusTarefaCheck" id="statusTarefaCheck" <?php

                                                                                                                              if ($linha['statusTarefa'] == 1) {
                                                                                                                                echo 'checked';
                                                                                                                              } else {
                                                                                                                                echo  '';
                                                                                                                              }


                                                                                                                              ?> value="<?php echo $linha['idTarefa'] ?>" />
                              </form>




                              |





                              <i class="fas fa-trash-alt text-white" data-bs-toggle="modal" data-bs-target="#apagarTarefa" onclick="apagar('<?php echo $linha['idTarefa'] ?>','<?php echo $linha['tituloTarefa'] ?>')"></i>
                            </div>


                            <label for="inputSchedule" class="form-check-label ps-2 fw-normal">
                              <span class="text-white com-risco"><?php echo $linha['tituloTarefa'] ?></span>
                              <?php echo $linha['statusTarefa'] ?>
                              <?php
                              if ($linha['nivelTarefa'] == "Urgente") {
                                echo '<span class="badge bg-light-danger text-danger">Urgente</span>';
                              } elseif ($linha['nivelTarefa'] == "Médio") {
                                echo '<span class="badge bg-light-warning text-warning">Médio</span>';
                              } else {
                                echo  '<span class="badge bg-light-success text-success">Pouco Urgente</span>';
                              }



                              ?>







                              <p class="text-white"><?php echo $linha['descricaoTarefa'] ?></p>
                            </label>
                          </div>

                        </li>

                      <?php } ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->


        <!-- Modal -->
        <div class="modal fade" id="apagarTarefa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>O cargo <span id="nome-conf-apagar"></span> será removido e essa ação não podera ser revertida!</p>
                <p>Confirmar remoção.</p>
              </div>
              <div class="modal-footer">
                <form action="vendor/excluir/_excluirTarefa.php" method="POST">
                  <input type="hidden" name="idTarefaApagar" id="idTarefaApagar">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Excluir</button>
                </form>
              </div>
            </div>
          </div>
        </div>


        <script>
          function apagar(id, nome) {

            document.getElementById('idTarefaApagar').value = id;
            document.getElementById('nome-conf-apagar').innerHTML = nome;
            console.log(nome);
          }
        </script>

        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="d-flex flex-wrap">
                      <div>
                        <h3>Revenue Statistics</h3>
                        <h6 class="card-subtitle">January 2021</h6>
                      </div>
                      <div class="ms-auto">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <h6 class="text-muted">
                              <i class="fa fa-circle me-1 text-success"></i>Product A
                            </h6>
                          </li>
                          <li class="list-inline-item">
                            <h6 class="text-muted">
                              <i class="fa fa-circle me-1 text-info"></i>Product B
                            </h6>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div id="revenue-statistics"></div>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                    <h1 class="mb-0 fw-light">$54578</h1>
                    <h6 class="text-muted">Total Revenue</h6>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                    <h1 class="mb-0 fw-light">$43451</h1>
                    <h6 class="text-muted">Online Revenue</h6>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                    <h1 class="mb-0 fw-light">$44578</h1>
                    <h6 class="text-muted">Product A</h6>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                    <h1 class="mb-0 fw-light">$12578</h1>
                    <h6 class="text-muted">Product B</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <h4 class="card-title">Sales of the Month</h4>
                <div id="sales-of-the-month" class="mt-3 mx-auto"></div>
                <div class="round-overlap mt-2">
                  <i data-feather="shopping-cart" class="feather-lg"></i>
                </div>
                <ul class="list-inline mt-4 text-center pt-1">
                  <li class="list-inline-item">
                    <i class="fa fa-circle text-purple"></i> Item A
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-circle text-success"></i> Item B
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-circle text-info"></i> Item C
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sales Prediction</h4>
                    <div class="row mt-3">
                      <div class="col-6 col-xl-9 d-flex align-items-center">
                        <div>
                          <span class="display-6">$3528</span>
                          <h6 class="text-muted">(150-165 Sales)</h6>
                        </div>
                      </div>
                      <div class="col-6 col-xl-3">
                        <div id="sales-prediction"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sales Difference</h4>
                    <div class="row mt-3">
                      <div class="col-6 col-xl-9 d-flex align-items-center">
                        <div>
                          <span class="display-6">$4316</span>
                          <h6 class="text-muted">(150-165 Sales)</h6>
                        </div>
                      </div>
                      <div class="col-6 col-xl-3">
                        <div id="sales-difference"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-flex flex-row">
                  <div class="">
                    <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="100" />
                  </div>
                  <div class="ps-3">
                    <h3 class="font-weight-medium">Daniel Kristeen</h3>
                    <h6>UIUX Designer</h6>
                    <button class="btn btn-light-info text-info">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="row mt-4 pt-2">
                  <div class="col text-center border-end">
                    <h2 class="fw-light">14</h2>
                    <h6 class="text-muted">Photos</h6>
                  </div>
                  <div class="col text-center border-end">
                    <h2 class="fw-light">54</h2>
                    <h6 class="text-muted">Videos</h6>
                  </div>
                  <div class="col text-center">
                    <h2 class="fw-light">145</h2>
                    <h6 class="text-muted">Tasks</h6>
                  </div>
                </div>
              </div>
              <div class="card-body border-top">
                <p class="text-center text-muted scrollable" style="overflow: hidden; width: auto; height: 85px">
                  Lorem ipsum dolor sit ametetur adipisicing elit, sed do
                  eiusmod tempor incididunt adipisicing elit, sed do eiusmod
                  tempor incididunLorem ipsum dolor sit ametetur adipisicing
                  elit, sed do eiusmod tempor incididuntt
                </p>
                <ul class="
                      list-icons
                      d-flex
                      flex-item
                      text-center
                      list-style-none
                    ">
                  <li class="col my-1">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Website"><i data-feather="globe" class="ps-2"></i></a>
                  </li>
                  <li class="col my-1">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="twitter"><i data-feather="twitter" class="ps-2"></i></a>
                  </li>
                  <li class="col my-1">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Facebook"><i data-feather="facebook" class="ps-2"></i></a>
                  </li>
                  <li class="col my-1">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Youtube"><i data-feather="youtube" class="ps-2"></i></a>
                  </li>
                  <li class="col my-1">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Linkd-in"><i data-feather="linkedin" class="ps-2"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Chats</h4>
                <div class="chat-box scrollable" style="height: 375px">
                  <!--chat Row -->
                  <ul class="chat-list m-0 p-0">
                    <!--chat Row -->
                    <li class="mt-4">
                      <div class="chat-img d-inline-block align-top">
                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" />
                      </div>
                      <div class="chat-content ps-3 d-inline-block">
                        <h6 class="text-muted text-nowrap">James Anderson</h6>
                        <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fw-normal
                              fs-3
                              bg-light-info
                            ">
                          Lorem Ipsum is simply dummy text of the printing &
                          type setting industry.
                        </div>
                      </div>
                      <div class="chat-time d-inline-block text-end text-muted">
                        10:56 am
                      </div>
                    </li>
                    <!--chat Row -->
                    <li class="mt-4">
                      <div class="chat-img d-inline-block align-top">
                        <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle" />
                      </div>
                      <div class="chat-content ps-3 d-inline-block">
                        <h6 class="text-muted text-nowrap">Bianca Doe</h6>
                        <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fw-normal
                              fs-3
                              bg-light-success
                            ">
                          It’s Great opportunity to work.
                        </div>
                      </div>
                      <div class="chat-time d-inline-block text-end text-muted">
                        10:57 am
                      </div>
                    </li>
                    <!--chat Row -->
                    <li class="odd mt-4">
                      <div class="chat-content ps-3 d-inline-block text-end">
                        <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fw-normal
                              fs-3
                              bg-light-inverse
                            ">
                          I would love to join the team.
                        </div>
                        <br />
                      </div>
                      <div class="chat-time d-inline-block text-end text-muted">
                        10:58 am
                      </div>
                    </li>
                    <!--chat Row -->
                    <li class="odd mt-4">
                      <div class="chat-content ps-3 d-inline-block text-end">
                        <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fw-normal
                              fs-3
                              bg-light-inverse
                            ">
                          Whats budget of the new project.
                        </div>
                        <br />
                      </div>
                      <div class="chat-time d-inline-block text-end text-muted">
                        10:59 am
                      </div>
                    </li>
                    <!--chat Row -->
                    <li class="mt-4">
                      <div class="chat-img d-inline-block align-top">
                        <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle" />
                      </div>
                      <div class="chat-content ps-3 d-inline-block">
                        <h6 class="text-muted text-nowrap">
                          Angelina Rhodes
                        </h6>
                        <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fw-normal
                              fs-3
                              bg-light-primary
                            ">
                          Well we have good budget for the project
                        </div>
                      </div>
                      <div class="chat-time d-inline-block text-end text-muted">
                        11:00 am
                      </div>
                    </li>
                    <!--chat Row -->
                  </ul>
                </div>
              </div>
              <div class="card-body border-top">
                <div class="row">
                  <div class="col-8">
                    <textarea placeholder="Type your message here" class="form-control border-0"></textarea>
                  </div>
                  <div class="col-4 text-end">
                    <button type="button" class="btn btn-info btn-circle btn-lg">
                      <i class="fas fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Messages</h4>
                <div class="message-box scrollable" style="height: 476px">
                  <div class="message-widget message-scroll">
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle online"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">Lorem Ipsum is simply dummy text of the printing
                            and type setting industry. Lorem Ipsum has
                            been.</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:30 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle busy"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Sonu Nigam
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">I've sung a song! See you at</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:10 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <span class="
                              round
                              bg-info
                              d-inline-block
                              text-white text-center
                              rounded-circle
                            ">A</span>
                        <span class="profile-status rounded-circle away"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Arijit Sinh
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">Simply dummy text of the printing and typesetting
                            industry.</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:08 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle offline"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">Just see the my admin!</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:02 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle online"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">Welcome to the Elite Admin</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:30 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle busy"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Sonu Nigam
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">I've sung a song! See you at</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:10 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center border-bottom p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle away"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Arijit Sinh
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">I am a singer!</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:08 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#" class="d-flex align-items-center p-3">
                      <div class="
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          ">
                        <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                        <span class="profile-status rounded-circle offline"></span>
                      </div>
                      <div class="
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          ">
                        <div class="w-85">
                          <h5 class="mb-0 mt-1 font-weight-medium">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              ">Just see the my admin!</span>
                        </div>
                        <span class="fs-2 text-nowrap ms-auto time fw-normal">9:02</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-md-flex no-block">
                  <h4 class="card-title">Projects of the Month</h4>
                  <div class="ms-auto">
                    <select class="form-select">
                      <option selected>January</option>
                      <option value="1">February</option>
                      <option value="2">March</option>
                      <option value="3">April</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive mt-2">
                  <table class="table stylish-table mb-0 mt-2 no-wrap v-middle">
                    <thead>
                      <tr>
                        <th class="fw-normal text-muted border-0 border-bottom" colspan="2">
                          Assigned
                        </th>
                        <th class="fw-normal text-muted border-0 border-bottom">
                          Name
                        </th>
                        <th class="fw-normal text-muted border-0 border-bottom">
                          Priority
                        </th>
                        <th class="fw-normal text-muted border-0 border-bottom">
                          Budget
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 50px">
                          <span class="
                                round
                                rounded-circle
                                text-white
                                d-inline-block
                                text-center
                                bg-info
                              ">S</span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Sunil Joshi
                          </h6>
                          <small class="text-muted no-wrap">Web Designer</small>
                        </td>
                        <td>Elite Admin</td>
                        <td>
                          <span class="badge bg-light-success text-success">Low</span>
                        </td>
                        <td>$3.9K</td>
                      </tr>
                      <tr class="active">
                        <td>
                          <span class="
                                round
                                text-white
                                d-inline-block
                                text-center
                              "><img src="assets/images/users/2.jpg" alt="user" class="rounded-circle" width="50" /></span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Andrew
                          </h6>
                          <small class="text-muted no-wrap">Project Manager</small>
                        </td>
                        <td>Real Homes</td>
                        <td>
                          <span class="badge bg-light-info text-info">Medium</span>
                        </td>
                        <td>$23.9K</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="
                                round
                                rounded-circle
                                text-white
                                d-inline-block
                                text-center
                                bg-success
                              ">B</span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Bhavesh patel
                          </h6>
                          <small class="text-muted no-wrap">Developer</small>
                        </td>
                        <td>MedicalPro Theme</td>
                        <td>
                          <span class="badge bg-light-danger text-danger">High</span>
                        </td>
                        <td>$12.9K</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="
                                round
                                rounded-circle
                                text-white
                                d-inline-block
                                text-center
                                bg-primary
                              ">N</span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Nirav Joshi
                          </h6>
                          <small class="text-muted no-wrap">Frontend Eng</small>
                        </td>
                        <td>Elite Admin</td>
                        <td>
                          <span class="badge bg-light-success text-success">Low</span>
                        </td>
                        <td>$10.9K</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="
                                round
                                rounded-circle
                                text-white
                                d-inline-block
                                text-center
                                bg-warning
                              ">M</span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Micheal Doe
                          </h6>
                          <small class="text-muted no-wrap">Content Writer</small>
                        </td>
                        <td>Helping Hands</td>
                        <td>
                          <span class="badge bg-light-danger text-danger">High</span>
                        </td>
                        <td>$12.9K</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="
                                round
                                rounded-circle
                                text-white
                                d-inline-block
                                text-center
                                bg-danger
                              ">N</span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Johnathan
                          </h6>
                          <small class="text-muted no-wrap">Graphic</small>
                        </td>
                        <td>Digital Agency</td>
                        <td>
                          <span class="badge bg-light-danger text-danger">High</span>
                        </td>
                        <td>$2.6K</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="
                                round
                                rounded-circle
                                text-white
                                d-inline-block
                                text-center
                                bg-info
                              ">M</span>
                        </td>
                        <td>
                          <h6 class="font-weight-medium mb-0 nowrap">
                            Micheal Doe
                          </h6>
                          <small class="text-muted no-wrap">Content Writer</small>
                        </td>
                        <td>Helping Hands</td>
                        <td>
                          <span class="badge bg-light-info text-info">Medium</span>
                        </td>
                        <td>$12.9K</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-md-flex no-block">
                  <h4 class="card-title">Weather Report</h4>
                  <div class="ms-auto">
                    <select class="form-select">
                      <option selected>Today</option>
                      <option value="1">Weekly</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex align-items-center flex-row mt-4">
                  <div class="p-2 display-5 text-info">
                    <i class="wi wi-day-showers"></i>
                    <span>73<sup>°</sup></span>
                  </div>
                  <div class="p-2">
                    <h3 class="mb-0">Saturday</h3>
                    <small>Ahmedabad, India</small>
                  </div>
                </div>
                <table class="table table-borderless">
                  <tr>
                    <td>Wind</td>
                    <td class="font-weight-medium">ESE 17 mph</td>
                  </tr>
                  <tr>
                    <td>Humidity</td>
                    <td class="font-weight-medium">83%</td>
                  </tr>
                  <tr>
                    <td>Pressure</td>
                    <td class="font-weight-medium">28.56 in</td>
                  </tr>
                  <tr>
                    <td>Cloud Cover</td>
                    <td class="font-weight-medium">78%</td>
                  </tr>
                  <tr>
                    <td>Ceiling</td>
                    <td class="font-weight-medium">25760 ft</td>
                  </tr>
                </table>
                <ul class="
                      list-unstyled
                      row
                      text-center
                      city-weather-days
                      border-top
                      m-0
                      pt-3
                    ">
                  <li class="col col-6 col-md-3 text-center mt-2 pt-1">
                    <i class="d-block fs-6 text-info wi wi-day-sunny"></i><span class="d-block tetxt-muted text-nowrap pt-2">09:30</span>
                    <h3 class="fw-light mt-1">70<sup>°</sup></h3>
                  </li>
                  <li class="col col-6 col-md-3 text-center mt-2 pt-1">
                    <i class="d-block fs-6 text-info wi wi-day-cloudy"></i><span class="d-block tetxt-muted text-nowrap pt-2">11:30</span>
                    <h3 class="fw-light mt-1">72<sup>°</sup></h3>
                  </li>
                  <li class="col col-6 col-md-3 text-center mt-2 pt-1">
                    <i class="d-block fs-6 text-info wi wi-day-hail"></i><span class="d-block tetxt-muted text-nowrap pt-2">13:30</span>
                    <h3 class="fw-light mt-1">75<sup>°</sup></h3>
                  </li>
                  <li class="col col-6 col-md-3 text-center mt-2 pt-1">
                    <i class="d-block fs-6 text-info wi wi-day-sprinkle"></i><span class="d-block tetxt-muted text-nowrap pt-2">15:30</span>
                    <h3 class="fw-light mt-1">76<sup>°</sup></h3>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-4">
            <div class="card">
              <img class="card-img-top img-responsive" src="assets/images/big/img1.jpg" alt="Card" />
              <div class="card-body">
                <div class="d-flex align-items-center mb-3 fs-3 text-muted">
                  <span>20 May 2021</span>
                  <div class="ms-auto">
                    <a href="javascript:void(0)" class="link fw-normal"><i data-feather="message-circle" class="feather-sm me-2"></i>3 Comments</a>
                  </div>
                </div>
                <h3 class="font-normal">
                  Featured Hydroflora Pots Garden &amp; Outdoors
                </h3>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-4">
            <div class="card">
              <img class="card-img-top img-responsive" src="assets/images/big/img2.jpg" alt="Card" />
              <div class="card-body">
                <div class="d-flex align-items-center mb-3 fs-3 text-muted">
                  <span>20 May 2021</span>
                  <div class="ms-auto">
                    <a href="javascript:void(0)" class="link fw-normal"><i data-feather="message-circle" class="feather-sm me-2"></i>1 Comment</a>
                  </div>
                </div>
                <h3 class="font-normal">
                  Featured Hydroflora Pots Garden &amp; Outdoors
                </h3>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-4">
            <div class="card">
              <img class="card-img-top img-responsive" src="assets/images/big/img4.jpg" alt="Card" />
              <div class="card-body">
                <div class="d-flex align-items-center mb-3 fs-3 text-muted">
                  <span>20 May 2021</span>
                  <div class="ms-auto">
                    <a href="javascript:void(0)" class="link fw-normal"><i data-feather="message-circle" class="feather-sm me-2"></i>5 Comments</a>
                  </div>
                </div>
                <h3 class="font-normal">
                  Featured Hydroflora Pots Garden &amp; Outdoors
                </h3>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Comments</h4>
              </div>
              <!-- ============================================================== -->
              <!-- Comment widgets -->
              <!-- ============================================================== -->
              <div class="comment-widgets scrollable position-relative mb-2" style="height: 450px">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">James Anderson</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry.
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <span class="badge bg-light-info text-info">Pending</span>
                      <span class="action-icons">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart"></i></a>
                      </span>
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3 active">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        active
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">Michael Jorden</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry..
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <span class="badge bg-light-success text-success">Approved</span>
                      <span class="action-icons active">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="icon-close"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart text-danger"></i></a>
                      </span>
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/3.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">Johnathan Doeting</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry.
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <span class="badge bg-light-danger text-danger">Rejected</span>
                      <span class="action-icons">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart"></i></a>
                      </span>
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-2 p-md-3">
                  <div class="p-1 p-md-2">
                    <span class="round text-white d-inline-block text-center"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle" /></span>
                  </div>
                  <div class="
                        comment-text
                        w-100
                        py-1 py-md-3
                        pr-md-3
                        pl-md-4
                        px-2
                      ">
                    <h5 class="font-weight-medium">James Anderson</h5>
                    <p class="mb-1 fs-3 fw-light text-muted">
                      Lorem Ipsum is simply dummy text of the printing and
                      type setting industry. Lorem Ipsum has beenorem Ipsum is
                      simply dummy text of the printing and type setting
                      industry..
                    </p>
                    <div class="comment-footer d-md-flex align-items-center mt-2">
                      <span class="badge bg-light-info text-info">Pending</span>
                      <span class="action-icons">
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-pencil-alt"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)" class="ps-2 align-middle"><i class="ti-heart"></i></a>
                      </span>
                      <span class="
                            text-muted
                            ms-auto
                            d-block
                            text-end
                            fs-2
                            fw-normal
                          ">April 14, 2016</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">To Do list</h4>
                  <div class="ms-auto">
                    <button class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                      Add Task
                    </button>
                  </div>
                </div>
                <!-- .modal for add task -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title">Add Task</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" />
                          </div>
                          <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" />
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                          Submit
                        </button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                <div class="to-do-widget mt-3 scrollable" style="height: 444px">
                  <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-info
                            ps-1
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputSchedule" name="inputCheckboxesSchedule" />
                        <label for="inputSchedule" class="form-check-label ps-2 fw-normal">
                          <span>Schedule meeting with</span>
                        </label>
                      </div>
                      <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/1.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Steave" />
                        </li>
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/2.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Jessica" />
                        </li>
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka" />
                        </li>
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina" />
                        </li>
                      </ul>
                    </li>
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-danger
                            ps-1
                            d-flex
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputCall" name="inputCheckboxesCall" />
                        <label for="inputCall" class="form-check-label ps-2 fw-normal">
                          <span>Give Purchase report to</span>
                          <span class="badge bg-light-danger text-danger">Today</span>
                        </label>
                      </div>
                      <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka" />
                        </li>
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina" />
                        </li>
                      </ul>
                    </li>
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-primary
                            ps-1
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputBook" name="inputCheckboxesBook" />
                        <label for="inputBook" class="form-check-label ps-2 fw-normal">
                          <span>Book flight for holiday</span>
                        </label>
                      </div>
                      <div class="
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          ">
                        26 jun 2021
                      </div>
                    </li>
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-warning
                            ps-1
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputForward" name="inputCheckboxesForward" />
                        <label for="inputForward" class="form-check-label ps-2 fw-normal">
                          <span>Forward all tasks</span>
                          <span class="badge bg-light-warning text-warning">2 weeks</span>
                        </label>
                      </div>
                      <div class="
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          ">
                        26 jun 2021
                      </div>
                    </li>
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-primary
                            ps-1
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputRecieve" name="inputCheckboxesRecieve" />
                        <label for="inputRecieve" class="form-check-label ps-2 fw-normal">
                          <span>Recieve shipment</span>
                        </label>
                      </div>
                      <div class="
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          ">
                        26 jun 2021
                      </div>
                    </li>
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-info
                            ps-1
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputpayment" name="inputCheckboxespayment" />
                        <label for="inputpayment" class="form-check-label ps-2 fw-normal">
                          <span>Send payment today</span>
                        </label>
                      </div>
                      <div class="
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          ">
                        26 jun 2021
                      </div>
                    </li>
                    <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                      <div class="
                            form-check
                            border-start border-2 border-success
                            ps-1
                          ">
                        <input type="checkbox" class="form-check-input ms-2" id="inputForward2" name="inputCheckboxesd" />
                        <label for="inputForward2" class="form-check-label ps-2 fw-normal">
                          <span>Important tasks</span>
                          <span class="badge bg-light-success text-success">2 weeks</span>
                        </label>
                      </div>
                      <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/1.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Steave" />
                        </li>
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/2.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Jessica" />
                        </li>
                        <li class="list-inline-item">
                          <img class="rounded-circle" src="assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Selina" />
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer">All right reserved by Monster Admin.</footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- customizer Panel -->
  <!-- ============================================================== -->
  <aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
    <div class="customizer-body">
      <ul class="nav customizer-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench fs-6"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply fs-6"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle fs-6"></i></a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <!-- Tab 1 -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="p-3 border-bottom">
            <!-- Sidebar -->
            <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
            <div class="form-check mt-3">
              <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
              <label class="form-check-label" for="theme-view">
                <span>Dark Theme</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar" />
              <label class="form-check-label" for="collapssidebar">
                <span>Collapse Sidebar</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position" />
              <label class="form-check-label" for="sidebar-position">
                <span>Fixed Sidebar</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" name="header-position" class="form-check-input" id="header-position" />
              <label class="form-check-label" for="header-position">
                <span>Fixed Header</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
              <label class="form-check-label" for="boxed-layout">
                <span>Boxed Layout</span>
              </label>
            </div>
          </div>
          <div class="p-3 border-bottom">
            <!-- Logo BG -->
            <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
            <ul class="theme-color m-0 p-0">
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
              </li>
            </ul>
            <!-- Logo BG -->
          </div>
          <div class="p-3 border-bottom">
            <!-- Navbar BG -->
            <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
            <ul class="theme-color m-0 p-0">
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
              </li>
            </ul>
            <!-- Navbar BG -->
          </div>
          <div class="p-3 border-bottom">
            <!-- Logo BG -->
            <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
            <ul class="theme-color m-0 p-0">
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
              </li>
            </ul>
            <!-- Logo BG -->
          </div>
        </div>
        <!-- End Tab 1 -->
        <!-- Tab 2 -->
        <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
          <ul class="mailbox list-style-none mt-3">
            <li>
              <div class="message-center chat-scroll position-relative">
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle online"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle busy"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle away"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/5.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/6.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/7.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                  <span class="user-img position-relative d-inline-block">
                    <img src="assets/images/users/8.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
              </div>
            </li>
          </ul>
        </div>
        <!-- End Tab 2 -->
        <!-- Tab 3 -->
        <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <h6 class="mt-3 mb-3">Activity Timeline</h6>
          <div class="steamline">
            <div class="sl-item">
              <div class="sl-left bg-light-success text-success">
                <i data-feather="user" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Meeting today <span class="sl-date"> 5pm</span>
                </div>
                <div class="desc">you can write anything</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left bg-light-info text-info">
                <i data-feather="camera" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">Send documents to Clark</div>
                <div class="desc">Lorem Ipsum is simply</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="assets/images/users/2.jpg" />
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Go to the Doctor <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Contrary to popular belief</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="assets/images/users/1.jpg" />
              </div>
              <div class="sl-right">
                <div>
                  <a href="javascript:void(0)">Stephen</a>
                  <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Approve meeting with tiger</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left bg-light-primary text-primary">
                <i data-feather="user" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Meeting today <span class="sl-date"> 5pm</span>
                </div>
                <div class="desc">you can write anything</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left bg-light-info text-info">
                <i data-feather="send" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">Send documents to Clark</div>
                <div class="desc">Lorem Ipsum is simply</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="assets/images/users/4.jpg" />
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Go to the Doctor <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Contrary to popular belief</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="assets/images/users/6.jpg" />
              </div>
              <div class="sl-right">
                <div>
                  <a href="javascript:void(0)">Stephen</a>
                  <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Approve meeting with tiger</div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Tab 3 -->
      </div>
    </div>
  </aside>
  <div class="chat-windows"></div>


  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <style>
    #alerts {
      position: fixed;
      top: 90px;
      right: 10px;
      z-index: 999;
    }


    #sucessoTarefa,
    #desfeitaTarefa {
      display: none;

    }

    #sucessoTarefa {
      background-color: #1bdd85;
      border-color: #13cb77;
    }

    #desfeitaTarefa {
      background-color: #f62d51;
      border-color: #f62d51;
    }

    /* .com-risco {
      text-decoration: line-through;
    } */
  </style>
  <script>
    // var btnCheckTarefa = document.getElementById('statusTarefa');


    // btnCheckTarefa.addEventListener('click', function (event) {
    //     event.preventDefault();

    //     });
    $(document).ready(function() {


      $('.statusTarefaCheck').click(function() {

        if ($(this).prop("checked") == true) {


          $('#sucessoTarefa').css("display", "block");
          $('#sucessoTarefa').css("display", "block");

          setTimeout(tarefaFeita, 5000);

          function tarefaFeita() {
            $('#sucessoTarefa').css("display", "none");
          }



       
          // console.log($(this).prop( "checked" ));
          // console.log( $(this).val());



          $.post("vendor/editar/_editarTarefa.php", {
            checado: '1',
            statusTarefaCheck: $(this).val()
          }, function(data, status) {
            // alert("Data: " + data + "\nStatus: " + status );
            // console.log( "Checado");
          });


        } else {
       
          $('#desfeitaTarefa').css("display", "block");

          setTimeout(tarefaDesfeita, 5000);

          function tarefaDesfeita() {
            $('#desfeitaTarefa').css("display", "none");
          }


          // console.log($(this).prop( "checked" ));
          // console.log( $(this).val());

          $.post("vendor/editar/_editarTarefa.php", {
            checado: '0',
            statusTarefaCheck: $(this).val()
          }, function(data, status) {
            // alert("Data: " + data + "\nStatus: " + status );
          });
          // console.log( "Deschecado");

        }

      });


    });
  </script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- apps -->
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/app.init.dark.js"></script>
  <script src="dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!--Wave Effects -->
  <script src="dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="dist/js/feather.min.js"></script>
  <script src="dist/js/custom.min.js"></script>
  <!-- ############################################################### -->
  <!-- This Page Js Files Here -->
  <!-- ############################################################### -->
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>