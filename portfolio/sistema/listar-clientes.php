<?php require_once "./vendor/conexao.php"; ?>
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
  <link href="assets/libs/tablesaw/dist/tablesaw.css" rel="stylesheet" />
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
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <?php require 'vendor/_menuSuperior.php'; ?>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php require 'vendor/_menuLateral.php' ?>
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
            <h3 class="page-title">Lista de clientes</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Responsive Table
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

              <a href="cadastro-categoria.php" class="btn btn-success">
                <i data-feather="plus" class="fill-white feather-sm"></i>
                Nova categoria
              </a>
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
        <div class="row">
          <div class="col-12">
            <!-- Column -->

            <!-- Column -->
            <div class="card">
              <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0">Usuarios</h4>
              </div>
              <div class="card-body">
                <!-- <h5 class="card-subtitle mb-3">
                  The Column Toggle Table allows the user to select which
                  columns they want to be visible.
                </h5> -->

                <table class="
                      tablesaw
                      table-striped table-hover table-bordered table
                      no-wrap
                    " data-tablesaw-mode="columntoggle">
                  <thead>
                    <tr>
                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="" class="border">
                        ID
                      </th>
                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                        Nome da empresa
                      </th>

                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                        Data de cadastro
                      </th>

                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                        Telefone
                      </th>

                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                    Email
                      </th>
                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                      Representante
                      </th>
                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                      Imagem
                      </th>
                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border">
                      Descricao
                      </th>

                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3" class="border">
                        <abbr title="Rotten Tomato Rating">Ação</abbr>
                      </th>

                    </tr>
                  </thead>


                  <tbody>
                    <?php


                    // $id_usuario = $_SESSION['id_usuario'];

                    $query = $pdo->query("select * from cliente");

                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                      echo '<tr>';






                      echo "<td class='title'>
        <a class='link' href='javascript:void(0)'>{$linha['idCliente']}</a>
      </td>";

                      echo "<td class='title'>
          <a class='link' href='javascript:void(0)'>{$linha['nomeCliente']}</a>
        </td>";

        echo "<td class='title'>
          <a class='link' href='javascript:void(0)'>{$linha['dataCliente']}</a>
        </td>";

        echo "<td class='title'>
          <a class='link' href='javascript:void(0)'>{$linha['telefoneCliente']}</a>
        </td>";

        echo "<td class='title'>
          <a class='link' href='javascript:void(0)'>{$linha['emailCliente']}</a>
        </td>";

        echo "<td class='title'>
          <a class='link' href='javascript:void(0)'>{$linha['representanteCliente']}</a>
        </td>";

        echo "<td class='title'>
          <a class='link' href='javascript:void(0)'><img src='{$linha['imagemCliente']}'></a>
        </td>";
        echo "<td class='title'>
          <a class='link' href='javascript:void(0)'>{$linha['descricaoCliente']}</a>
        </td>";

     






                      echo "<td>

                      <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editarModal' onclick='editar({$linha['idCliente']},";

                  echo '"'.$linha["nomeCliente"].'"';
                      
                    echo ")'>
        <i class='fa fa-edit (alias)' data-toggle='tooltip' data-placement='top' title='Editar registro' ></i>
      </button>
      |
      <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#apagarModal' onclick='apagar({$linha['idCliente']})'>
      <i class='fas fa-trash-alt'></i>
    </button>

      </td>";

                      // echo '<td>

                      //                 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                      //                 echo $linha["idCategoria"];



                      //                 echo ',';




                      //                 echo "'" . $linha['nomeCategoria'] . "'";



                      //                 echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                      //                     |
                      //                     <button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                      //                 echo $linha["idCategoria"];
                      //                 echo ')"><span class="glyphicon glyphicon-trash 
                      //                 text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>
                      //                 </td>';

                      //     echo "<td>

                      //      <a href='vendor/categoria.php?apagar={$linha['idCategoria']}'><i class=' fas fa-edit'></i> </a>
                      //      |                         
                      //      <a href='vendor/categoria.php?apagar={$linha['idCategoria']}'><i class='fas fa-trash-alt'></i></a>
                      //    </td>";


                      echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="apagarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Confirmar exclusão?</p>
            </div>
            <div class="modal-footer">
              <form action="vendor/categoria.php" method="POST">
                <input type="hidden" id="idApagar" name="apagar">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Apagar</button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form action="vendor/categoria.php" method="POST">
                        <div class="form-group">
                            <label for="nomeCargo" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria">
                            <input type="hidden" id="idCategoria" name="idCategoria" >
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
          </div>
        </div>
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

  <!-- modal editar registro -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Editar cargo</h4>
        </div>
        <div class="modal-body">
          <form action="vendor/functions/cadastros/cargos.php" method="POST">
            <div class="form-group">
              <label for="nomeCargo" class="control-label">Nome:</label>
              <input type="text" class="form-control" id="nomeCargo" name="nomeCargo">
              <input type="hidden" id="idcargo" name="idCargo" name="idCargo">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- modal apagar registro -->


  </div>

  <script>
    function apagar(id) {
      var idCategoria = id;
      console.log(idCategoria);
      document.getElementById('idApagar').value = id;
    }

    function editar(id, categoria) {
      console.log(id);
      console.log(categoria);
      document.getElementById('idCategoria').value = id;
      document.getElementById('nomeCategoria').value = categoria;
    }
  </script>
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
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
  <script src="assets/libs/tablesaw/dist/tablesaw.jquery.js"></script>
  <script src="assets/libs/tablesaw/dist/tablesaw-init.js"></script>
</body>

</html>