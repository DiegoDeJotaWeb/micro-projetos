<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, monster admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, "
    />
    <meta
      name="description"
      content="Monster is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Monster Template by WrapPixel</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monsteradmin/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicon.png"
    />
    <!-- This page CSS -->
    <link
      href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
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
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#009efb"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#009efb"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#009efb"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#009efb"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#009efb"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
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
     <?php require 'vendor/_menuLateral.php';?>
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
              <h3 class="page-title">Invoice List</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Invoice List
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div
              class="
                col-md-7
                justify-content-end
                align-self-center
                d-none d-md-flex
              "
            >
              <div class="d-flex">
                <div class="dropdown me-2">
                  <button
                    class="btn btn-secondary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    January 2021
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton"
                  >
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
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- basic table -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Invoice List</h4>
                  <h6 class="card-subtitle">
                    In these invoice, with these below
                    buttons(CSV,Copy,Excel,PDF,Print) you can save this content
                    ad per requirments.
                  </h6>
                  <div class="table-responsive">
                    <table id="file_export" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation1"
                              ></label>
                            </div>
                          </th>
                          <th>Setting</th>
                          <th>Date</th>
                          <th>Invoice</th>
                          <th>Order No</th>
                          <th>Customer Name</th>
                          <th>Due</th>
                          <th>Balance</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation2"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation2"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>11 March 2021</td>
                          <td>IWp-41</td>
                          <td>AONO-123456401</td>
                          <td>Nirav Joshi</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation3"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation3"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWp-42</td>
                          <td>AONO-147852001</td>
                          <td>Sunil Joshi</td>
                          <td>2011/07/25</td>
                          <td>$320,800</td>
                          <td>$170,750</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation4"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation4"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWp-43</td>
                          <td>AONO-190230145</td>
                          <td>Vishal Bhatt</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                          <td>$86,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation5"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation5"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWp-44</td>
                          <td>AONO-123456401</td>
                          <td>Nirav Joshi</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                          <td>$433,060</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation6"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation6"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>01 August 2015</td>
                          <td>IWp-45</td>
                          <td>AONO-123456401</td>
                          <td>Uday Navapara</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                          <td>$103,600</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation7"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation7"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>17 March 2016</td>
                          <td>IWp-46</td>
                          <td>AONO-145789620</td>
                          <td>Vishal Bhatt</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                          <td>$90,560</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation8"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation8"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWp-47</td>
                          <td>AONO-123456401</td>
                          <td>Sunil Joshi</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                          <td>$342,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation9"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation9"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWp-48</td>
                          <td>AONO-190230145</td>
                          <td>Uday Navapara</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                          <td>$470,600</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation10"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation10"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWp-49</td>
                          <td>AONO-145789620</td>
                          <td>Nirav Joshi</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                          <td>$313,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation11"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation11"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWp-210</td>
                          <td>AONO-145789620</td>
                          <td>Vishal Bhatt</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                          <td>$385,750</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation12"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation12"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWP-1121</td>
                          <td>AONO-145789620</td>
                          <td>Sunil Joshi</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                          <td>$198,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation13"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation13"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWP-1120</td>
                          <td>AONO-120320145</td>
                          <td>Uday Navapara</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                          <td>$725,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation14"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation14"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWP-1214</td>
                          <td>AONO-120320145</td>
                          <td>Nirav Joshi</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                          <td>$237,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation15"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation15"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>01 August 2015</td>
                          <td>IWP-1452</td>
                          <td>AONO-145789620</td>
                          <td>Vishal Bhatt</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                          <td>$132,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation16"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation16"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>17 March 2016</td>
                          <td>IWP-1250</td>
                          <td>AONO-123456401</td>
                          <td>Sunil Joshi</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                          <td>$217,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation17"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation17"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWP-1430</td>
                          <td>AONO-120320145</td>
                          <td>Vishal Bhatt</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                          <td>$345,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation18"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation18"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWP-1200</td>
                          <td>AONO-120320145</td>
                          <td>Ayaz Shekh</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                          <td>$675,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation19"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation19"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWP-1452</td>
                          <td>AONO-120320145</td>
                          <td>Sunil Joshi</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                          <td>$106,450</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation20"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation20"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>01 August 2015</td>
                          <td>IWP-1420</td>
                          <td>AONO-147852030</td>
                          <td>Nirav Joshi</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                          <td>$85,600</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation21"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation21"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWp-410</td>
                          <td>AONO-145789620</td>
                          <td>Uday Navapara</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                          <td>$1,200,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation22"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation22"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWP-1230</td>
                          <td>AONO-123456401</td>
                          <td>Vishal Bhatt</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                          <td>$92,575</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation23"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation23"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>17 March 2016</td>
                          <td>IWp-220</td>
                          <td>AONO-140250369</td>
                          <td>Sunil Joshi</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                          <td>$357,650</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation24"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation24"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWP-1200</td>
                          <td>AONO-190230145</td>
                          <td>Ayaz Shekh</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                          <td>$206,850</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation25"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation25"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWP-1458</td>
                          <td>AONO-190230145</td>
                          <td>Vishal Bhatt</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                          <td>$850,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation26"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation26"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWP-1457</td>
                          <td>AONO-147852001</td>
                          <td>Uday Navapara</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                          <td>$163,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation27"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation27"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWP-4582</td>
                          <td>AONO-147852030</td>
                          <td>Nirav Joshi</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                          <td>$95,400</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation28"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation28"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWP-1456</td>
                          <td>AONO-145789620</td>
                          <td>Ayaz Shekh</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                          <td>$114,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation29"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation29"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWP-1230</td>
                          <td>AONO-145789620</td>
                          <td>Sunil Joshi</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                          <td>$145,000</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation30"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation30"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>01 August 2015</td>
                          <td>IWp-430</td>
                          <td>AONO-190230145</td>
                          <td>Uday Navapara</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                          <td>$235,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation31"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation31"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>12 March 2021</td>
                          <td>IWP-1200</td>
                          <td>AONO-123456401</td>
                          <td>Ayaz Shekh</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                          <td>$324,050</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation32"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation32"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>01 August 2015</td>
                          <td>IWP-1250</td>
                          <td>AONO-190230145</td>
                          <td>Vishal Bhatt</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                          <td>$85,675</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation33"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation33"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWp-210</td>
                          <td>AONO-190230145</td>
                          <td>Sunil Joshi</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                          <td>$164,500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation34"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation34"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>31 January 2021</td>
                          <td>IWP-1478</td>
                          <td>AONO-190230145</td>
                          <td>Vishal Bhatt</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                          <td>$109,850</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation35"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation35"
                              ></label>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button
                                type="button"
                                class="
                                  btn btn-light-primary
                                  text-primary
                                  dropdown-toggle
                                "
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="fas fa-cog"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="eye"
                                    class="feather-sm me-2"
                                  ></i>
                                  Open</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="edit-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="trash-2"
                                    class="feather-sm me-2"
                                  ></i>
                                  Delete</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  ><i
                                    data-feather="message-circle"
                                    class="feather-sm me-2"
                                  ></i>
                                  Comments</a
                                >
                              </div>
                            </div>
                          </td>
                          <td>16 March 2021</td>
                          <td>IWP-1456</td>
                          <td>AONO-190230145</td>
                          <td>Nirav Joshi</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                          <td>$452,500</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="customControlValidation35"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="customControlValidation35"
                              ></label>
                            </div>
                          </th>
                          <th>Setting</th>
                          <th>Date</th>
                          <th>Invoice</th>
                          <th>Order No</th>
                          <th>Customer Name</th>
                          <th>Due</th>
                          <th>Balance</th>
                          <th>Amount</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
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
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i class="fa fa-spin fa-cog"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="mdi mdi-wrench fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="mdi mdi-message-reply fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="mdi mdi-star-circle fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
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
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
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
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/2.jpg"
                  />
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
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/1.jpg"
                  />
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
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/4.jpg"
                  />
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
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/6.jpg"
                  />
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
    <!--This page plugins -->
    <script src="assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/custom-datatable.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script>
      //=============================================//
      //    File export                              //
      //=============================================//
      $("#file_export").DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
      });
      $(
        ".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
      ).addClass("btn btn-cyan text-white mr-1");
    </script>
  </body>
</html>
