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
  <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css" />
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
    <?php require 'vendor/_menuLateral.php'; ?>

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <div class="email-app todo-box-container">
        <!-- -------------------------------------------------------------- -->
        <!-- Left Part -->
        <!-- -------------------------------------------------------------- -->
        <div class="left-part list-of-tasks">
          <a class="
                ti-menu ti-close
                btn btn-success
                show-left-part
                d-block d-md-none
              " href="javascript:void(0)"></a>
          <div class="scrollable" style="height: 100%">
            <div class="p-3">
              <a class="waves-effect waves-light btn btn-info d-block" href="javascript: void(0)" id="add-task">Add nova tarefa</a>
            </div>
            <div class="divider"></div>
            <ul class="list-group">
              <li>
                <small class="
                      p-3
                      d-block
                      text-uppercase text-dark
                      font-weight-medium
                    ">Pastas</small>
              </li>
              <li class="list-group-item p-0 border-0">
                <a href="javascript:void(0)" class="
                      todo-link
                      active
                      list-group-item-action
                      p-3
                      d-flex
                      align-items-center
                    " id="all-todo-list">
                  <i data-feather="list" class="feather-sm me-2"></i> Todas as tarefas


                  <span class="
                        todo-badge
                        badge
                        bg-light-info
                        text-info
                        rounded-pill
                        px-3
                        font-weight-medium
                        ms-auto
                      "></span>
                </a>
              </li>
              <li class="list-group-item p-0 border-0">
                <a href="javascript:void(0)" class="
                      todo-link
                      list-group-item-action
                      p-3
                      d-flex
                      align-items-center
                    " id="current-task-important">
                  <i data-feather="star" class="feather-sm me-2"></i>

                  Importante

                  <span class="
                        todo-badge
                        badge
                        rounded-pill
                        px-3
                        bg-light-danger
                        ms-auto
                        text-danger
                        font-weight-medium
                      "></span>
                </a>
              </li>
              <li class="list-group-item p-0 border-0">
                <a href="javascript:void(0)" class="
                      todo-link
                      list-group-item-action
                      p-3
                      d-flex
                      align-items-center
                    " id="current-task-done">
                  <i data-feather="send" class="feather-sm me-2"></i>
                  Completo
                  <span class="
                        todo-badge
                        badge
                        rounded-pill
                        px-3
                        text-success
                        font-weight-medium
                        bg-light-success
                        ms-auto
                      "></span>
                </a>
              </li>
              <li class="list-group-item p-0 border-0">
                <hr />
              </li>
              <li class="list-group-item p-0 border-0">
                <a href="javascript:void(0)" class="list-group-item-action p-3 d-flex align-items-center" id="current-todo-delete">
                  <i data-feather="trash-2" class="feather-sm me-2"></i> Lixeira
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- Right Part -->
        <!-- -------------------------------------------------------------- -->
        <div class="right-part mail-list bg-white overflow-auto">
          <div id="todo-list-container">
            <div class="p-3 border-bottom">
              <div class="input-group searchbar">
                <span class="input-group-text" id="search"><i class="icon-magnifier text-muted"></i></span>
                <input type="text" class="form-control" placeholder="Pesquisar atividade" aria-describedby="search" />
              </div>
            </div>
            <!-- Todo list-->
            <div class="todo-listing">
              <div id="all-todo-container" class="p-3">
                <!-- Item 1 -->
                <div class="
                      todo-item
                      all-todo-list
                      p-3
                      border-bottom
                      position-relative
                    ">
                  <div class="inner-item d-flex align-items-start">
                    <div class="w-100">
                      <!-- Checkbox -->
                      <div class="
                            checkbox checkbox-info
                            d-flex
                            align-items-start
                            form-check
                          ">
                        <input type="checkbox" class="form-check-input flex-shrink-0 me-3" id="checkbox1" />
                        <label class="form-check-label" for="checkbox1"></label>
                        <div>
                          <div class="content-todo">
                            <h5 class="font-weight-medium fs-4 todo-header" data-todo-header="Meeting with Mr.Jojo Sukla at 5.00PM">
                              Meeting with Mr.Jojo Sukla at 5.00PM
                            </h5>
                            <div class="todo-subtext text-muted fs-3" data-todosubtext-html="<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. </p>" data-todosubtextText='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. \n"}]}'>
                              Lorem ipsum dolor sit amet, consectetur
                              adipiscing elit. Morbi pulvinar feugiat
                              consequat. Duis lacus nibh, sagittis id varius
                              vel, aliquet non augue.
                            </div>
                            <span class="todo-time fs-2 text-muted"><i class="icon-calender me-1"></i>14 Fab
                              2020</span>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <div class="dropdown-action">
                            <div class="dropdown todo-action-dropdown">
                              <button class="
                                    btn btn-link
                                    text-dark
                                    p-1
                                    dropdown-toggle
                                    text-decoration-none
                                    todo-action-dropdown
                                  " type="button" id="more-action-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-action-1">
                                <a class="edit dropdown-item" href="javascript:void(0);"><i class="fas fa-edit text-info me-1"></i>
                                  Edit</a>
                                <a class="important dropdown-item" href="javascript:void(0);"><i class="fas fa-star text-warning me-1"></i>
                                  Important</a>
                                <a class="remove dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt text-danger me-1"></i>Remove</a>
                                <a class="dropdown-item permanent-delete" href="javascript:void(0);"><i class="fas fa-trash text-danger me-1"></i>Permanent Delete</a>
                                <a class="dropdown-item revive" href="javascript:void(0);"><i class="fas fa-undo-alt text-success me-1"></i>Revive Task</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Content -->
                    </div>
                  </div>
                </div>
                <!-- ./Item 1 -->
                <!-- Item 2 -->
                <div class="
                      todo-item
                      all-todo-list
                      p-3
                      border-bottom
                      position-relative
                      current-task-done
                    ">
                  <div class="inner-item d-flex align-items-start">
                    <div class="w-100">
                      <!-- Checkbox -->
                      <div class="
                            checkbox checkbox-info
                            d-flex
                            align-items-start
                            form-check
                          ">
                        <input type="checkbox" class="form-check-input flex-shrink-0 me-3" id="checkbox2" checked />
                        <label class="form-check-label" for="checkbox2"></label>
                        <div>
                          <!-- Content -->
                          <div class="content-todo">
                            <h5 class="font-weight-medium fs-4 todo-header" data-todo-header="Book a ticket at night">
                              Book a ticket at night
                            </h5>
                            <div class="todo-subtext text-muted fs-3" data-todosubtext-html="<p>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis tempus porttitor aasfs. Integer posuere erat a ante venenatis.  </p>" data-todosubtextText='{"ops":[{"insert":"Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis tempus porttitor aasfs. Integer posuere erat a ante venenatis.  \n"}]}'>
                              Blandit tempus porttitor aasfs. Integer posuere
                              erat a ante venenatis tempus porttitor aasfs.
                              Integer posuere erat a ante venenatis.
                            </div>
                            <span class="todo-time fs-2 text-muted"><i class="icon-calender me-1"></i>01 Jan
                              2020</span>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <div class="dropdown-action">
                            <div class="dropdown todo-action-dropdown">
                              <button class="
                                    btn btn-link
                                    text-dark
                                    p-1
                                    dropdown-toggle
                                    text-decoration-none
                                    todo-action-dropdown
                                  " type="button" id="more-action-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-action-2">
                                <a class="edit dropdown-item" href="javascript:void(0);"><i class="fas fa-edit text-info me-1"></i>
                                  Edit</a>
                                <a class="important dropdown-item" href="javascript:void(0);"><i class="fas fa-star text-warning me-1"></i>
                                  Important</a>
                                <a class="remove dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt text-danger me-1"></i>Remove</a>
                                <a class="dropdown-item permanent-delete" href="javascript:void(0);"><i class="fas fa-trash text-danger me-1"></i>Permanent Delete</a>
                                <a class="dropdown-item revive" href="javascript:void(0);"><i class="fas fa-undo-alt text-success me-1"></i>Revive Task</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ./Item 2 -->
                <!-- Item 3 -->
                <div class="
                      todo-item
                      all-todo-list
                      p-3
                      border-bottom
                      position-relative
                      current-task-important
                    ">
                  <div class="inner-item d-flex align-items-start">
                    <div class="w-100">
                      <!-- Checkbox -->
                      <div class="
                            checkbox checkbox-info
                            d-flex
                            align-items-start
                            form-check
                          ">
                        <input type="checkbox" class="form-check-input flex-shrink-0 me-3" id="checkbox3" />
                        <label class="form-check-label" for="checkbox3"></label>
                        <div>
                          <!-- Content -->
                          <div class="content-todo">
                            <h5 class="font-weight-medium fs-4 todo-header" data-todo-header="Give Review for design in monster Vue Admin">
                              Give Review for design in monster Vue Admin
                            </h5>
                            <div class="todo-subtext text-muted fs-3" data-todosubtext-html="<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.Integer posuere erat a ante venenatis tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>" data-todosubtextText='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.Integer posuere erat a ante venenatis tempus porttitor aasfs. Integer posuere erat a ante venenatis. \n"}]}'>
                              Lorem ipsum dolor sit amet, consectetur
                              adipiscing elit. Morbi pulvinar feugiat
                              consequat. Duis lacus nibh, sagittis id varius
                              vel, aliquet non augue. Integer posuere erat a
                              ante venenatis tempus porttitor aasfs. Integer
                              posuere erat a ante venenatis.
                            </div>
                            <span class="todo-time fs-2 text-muted"><i class="icon-calender me-1"></i>19 Mar
                              2020</span>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <div class="dropdown-action">
                            <div class="dropdown todo-action-dropdown">
                              <button class="
                                    btn btn-link
                                    text-dark
                                    p-1
                                    dropdown-toggle
                                    text-decoration-none
                                    todo-action-dropdown
                                  " type="button" id="more-action-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-action-3">
                                <a class="edit dropdown-item" href="javascript:void(0);"><i class="fas fa-edit text-info me-1"></i>
                                  Edit</a>
                                <a class="important dropdown-item" href="javascript:void(0);"><i class="fas fa-star text-warning me-1"></i>
                                  Important</a>
                                <a class="remove dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt text-danger me-1"></i>Remove</a>
                                <a class="dropdown-item permanent-delete" href="javascript:void(0);"><i class="fas fa-trash text-danger me-1"></i>Permanent Delete</a>
                                <a class="dropdown-item revive" href="javascript:void(0);"><i class="fas fa-undo-alt text-success me-1"></i>Revive Task</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ./Item 3 -->
                <!-- Item 4 -->
                <div class="
                      todo-item
                      all-todo-list
                      p-3
                      border-bottom
                      position-relative
                      current-todo-delete
                    ">
                  <div class="inner-item d-flex align-items-start">
                    <div class="w-100">
                      <!-- Checkbox -->
                      <div class="
                            checkbox checkbox-info
                            d-flex
                            align-items-start
                            form-check
                          ">
                        <input type="checkbox" class="form-check-input flex-shrink-0 me-3" id="checkbox4" />
                        <label class="form-check-label" for="checkbox4"></label>
                        <div>
                          <!-- Content -->
                          <div class="content-todo">
                            <h5 class="font-weight-medium fs-4 todo-header" data-todo-header="Give salary to employee">
                              Give salary to employee
                            </h5>
                            <div class="todo-subtext text-muted fs-3" data-todosubtext-html="<p>Integer posuere erat a ante venenatis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. </p>" data-todosubtextText='{"ops":[{"insert":"Integer posuere erat a ante venenatis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. \n"}]}'>
                              Integer posuere erat a ante venenatis.Lorem
                              ipsum dolor sit amet, consectetur adipiscing
                              elit. Morbi pulvinar feugiat consequat. Duis
                              lacus nibh, sagittis id varius vel, aliquet non
                              augue.
                            </div>
                            <span class="todo-time fs-2 text-muted"><i class="icon-calender me-1"></i>31 Jan
                              2020</span>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <div class="dropdown-action">
                            <div class="dropdown todo-action-dropdown">
                              <button class="
                                    btn btn-link
                                    text-dark
                                    p-1
                                    dropdown-toggle
                                    text-decoration-none
                                    todo-action-dropdown
                                  " type="button" id="more-action-4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-action-4">
                                <a class="edit dropdown-item" href="javascript:void(0);"><i class="fas fa-edit text-info me-1"></i>
                                  Edit</a>
                                <a class="important dropdown-item" href="javascript:void(0);"><i class="fas fa-star text-warning me-1"></i>
                                  Important</a>
                                <a class="remove dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt text-danger me-1"></i>Remove</a>
                                <a class="dropdown-item permanent-delete" href="javascript:void(0);"><i class="fas fa-trash text-danger me-1"></i>Permanent Delete</a>
                                <a class="dropdown-item revive" href="javascript:void(0);"><i class="fas fa-undo-alt text-success me-1"></i>Revive Task</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ./Item 4 -->
                <!-- Item 5 -->
                <div class="
                      todo-item
                      all-todo-list
                      p-3
                      border-bottom
                      position-relative
                      current-task-important
                    ">
                  <div class="inner-item d-flex align-items-start">
                    <div class="w-100">
                      <!-- Checkbox -->
                      <div class="
                            checkbox checkbox-info
                            d-flex
                            align-items-start
                            form-check
                          ">
                        <input type="checkbox" class="form-check-input flex-shrink-0 me-3" id="checkbox5" />
                        <label class="form-check-label" for="checkbox5"></label>
                        <div>
                          <!-- Content -->
                          <div class="content-todo">
                            <h5 class="font-weight-medium fs-4 todo-header" data-todo-header="Launch new template using Vuejs within 20 hours">
                              Launch new template using Vuejs within 20 hours
                            </h5>
                            <div class="todo-subtext text-muted fs-3" data-todosubtext-html="<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. </p>" data-todosubtextText='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. \n"}]}'>
                              Lorem ipsum dolor sit amet, consectetur
                              adipiscing elit. Morbi pulvinar feugiat
                              consequat. Duis lacus nibh, sagittis id varius
                              vel, aliquet non augue.
                            </div>
                            <span class="todo-time fs-2 text-muted"><i class="icon-calender me-1"></i>20 Oct
                              2020</span>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <div class="dropdown-action">
                            <div class="dropdown todo-action-dropdown">
                              <button class="
                                    btn btn-link
                                    text-dark
                                    p-1
                                    dropdown-toggle
                                    text-decoration-none
                                    todo-action-dropdown
                                  " type="button" id="more-action-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-action-5">
                                <a class="edit dropdown-item" href="javascript:void(0);"><i class="fas fa-edit text-info me-1"></i>
                                  Edit</a>
                                <a class="important dropdown-item" href="javascript:void(0);"><i class="fas fa-star text-warning me-1"></i>
                                  Important</a>
                                <a class="remove dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt text-danger me-1"></i>Remove</a>
                                <a class="dropdown-item permanent-delete" href="javascript:void(0);"><i class="fas fa-trash text-danger me-1"></i>Permanent Delete</a>
                                <a class="dropdown-item revive" href="javascript:void(0);"><i class="fas fa-undo-alt text-success me-1"></i>Revive Task</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ./Item 5 -->
              </div>
              <!-- Modal -->
              <div class="modal fade" id="todoShowListItem" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content border-0">
                    <div class="modal-header bg-light d-flex">
                      <h5 class="modal-title task-heading"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="compose-box">
                        <div class="compose-content">
                          <label class="mb-0 fs-4">Task Details</label>
                          <p class="task-text text-muted"></p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-danger btn-block" data-bs-dismiss="modal">
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
              <div class="modal-header bg-info text-white">
                <h5 class="modal-title text-white">Add Task</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="compose-box">
                  <div class="compose-content" id="addTaskModalTitle">
                    <form>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="d-flex mail-to mb-4">
                            <div class="w-100">
                              <input id="task" type="text" placeholder="Task" class="form-control" name="task" required />
                              <span class="validation-text"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex mail-subject mb-4">
                        <div class="w-100">
                          <div id="taskdescription" class=""></div>
                          <span class="validation-text"></span>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal">
                  <i class="flaticon-cancel-12"></i> Discard
                </button>
                <button class="btn btn-info add-tsk" disabled>
                  Add Task
                </button>
                <button class="btn btn-success edit-tsk">Save</button>
              </div>
            </div>
          </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
        <footer class="footer text-center">
          <?php require 'vendor/_footer.php'?>
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- End Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
      </div>
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
  <script src="assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
  <script src="assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- apps -->
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/app.init.dark.js"></script>
  <script src="dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="dist/js/feather.min.js"></script>
  <script src="dist/js/custom.min.js"></script>
  <!--This page JavaScript -->
  <script src="assets/libs/quill/dist/quill.min.js"></script>
  <!-- Initialize Quill editor -->
  <script src="dist/js/pages/todo/todo.js"></script>
</body>

</html>