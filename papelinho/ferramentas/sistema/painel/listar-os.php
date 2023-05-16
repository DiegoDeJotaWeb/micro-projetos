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
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      href="assets/extra-libs/taskboard/css/lobilist.css"
    />
    <link
      rel="stylesheet"
      href="assets/extra-libs/taskboard/css/jquery-ui.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
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
      <?php require 'vendor/_menuLateral.php'?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <div class="invoice-application">
          <!-- Left Part -->
          <div class="left-part bg-white fixed-left-part list-of-user">
            <!-- Mobile toggle button -->
            <a
              class="
                ti-menu ti-close
                btn btn-success
                show-left-part
                d-block d-lg-none
              "
              href="javascript:void(0)"
            ></a>
            <!-- Mobile toggle button -->
            <div class="p-3">
              <h4>Chat Sidebar</h4>
            </div>
            <div class="scrollable position-relative" style="height: 100%">
              <div class="p-3 border-bottom">
                <h5 class="card-title">Search Invoice</h5>
                <form>
                  <div class="searchbar">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Search Invoice"
                    />
                  </div>
                </form>
              </div>
              <ul class="mailbox list-style-none app-invoice">
                <li>
                  <div class="message-center chat-scroll invoice-users">
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        active
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-123"
                      data-invoice-id="123"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-success btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                         Cliente: Diego Rodrigues
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #123</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 26/09/2022</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-124"
                      data-invoice-id="124"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-danger btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Nirav Joshi
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #124</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 21 Fab
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-125"
                      data-invoice-id="125"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-warning btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Sunil Joshi
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #125</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 21 Jan
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-126"
                      data-invoice-id="126"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-primary btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Vishank Joshi
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #126</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 15 Mar
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-127"
                      data-invoice-id="127"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-info btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Virat Kohali
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #127</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 19 Oct
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-128"
                      data-invoice-id="128"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-success btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Smith John
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #128</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 21 Oct
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-129"
                      data-invoice-id="129"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-dark btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Sachin Emily
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #129</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 29 Mar
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                      href="javascript:void(0)"
                      class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      "
                      id="invoice-130"
                      data-invoice-id="130"
                    >
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-dark btn-circle">
                          <i
                            data-feather="user"
                            class="feather-sm fill-white"
                          ></i>
                        </button>
                      </span>
                      <div
                        class="mail-contnet w-75 d-inline-block v-middle ps-2"
                      >
                        <h5
                          class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          "
                        >
                          To: Stiphan Robots
                        </h5>
                        <small class="mail-desc invoice-id d-block"
                          ><span class="fw-bold text-dark">Id:</span>
                          #130</small
                        >
                        <small class="time invoice-date"
                          ><span class="fw-bold text-dark">Date:</span> 31 Mar
                          2021</small
                        >
                      </div>
                    </a>
                    <!-- Message -->
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- ./Left part -->
          <!-- Right Part -->
          <div class="right-part invoice-box">
            <div class="p-4 invoice-inner-part">
              <div class="chat-not-selected">
                <div class="text-center">
                  <span class="display-5 text-info"
                    ><i class="mdi mdi-file-document-box"></i
                  ></span>
                  <h5>Abrir fatura da lista</h5>
                </div>
              </div>
              <div class="invoiceing-box">
                <div class="card card-body">
                  <div
                    class="
                      invoice-header
                      d-flex
                      align-items-center
                      border-bottom
                      pb-3
                    "
                  >
                    <h3 class="font-weight-medium text-uppercase mb-0">
                      Invoice
                    </h3>
                    <div class="ms-auto">
                      <h4 class="invoice-number"></h4>
                    </div>
                  </div>
                  <div class="" id="custom-invoice">
                    <!-- (1) -->
                    <div class="invoice-123" id="printableArea">
                      <div class="row pt-3">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                1108, Clair Street, <br />Massachusetts,
                                <br />Woods Hole - 02543
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Shraddha Chhatraliya,</h4>
                              <p class="text-muted ms-4">
                                455, Shobe Lane, <br />Colorado, <br />Fort
                                Collins - 80524
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 23rd Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 25th Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="table-responsive mt-5">
                            <table class="table table-hover no-wrap">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Milk Powder</td>
                                  <td class="text-end">2</td>
                                  <td class="text-end">$24</td>
                                  <td class="text-end">$48</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Air Conditioner</td>
                                  <td class="text-end">5</td>
                                  <td class="text-end">$500</td>
                                  <td class="text-end">$2500</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>RC Cars</td>
                                  <td class="text-end">30</td>
                                  <td class="text-end">$600</td>
                                  <td class="text-end">$18000</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Down Coat</td>
                                  <td class="text-end">62</td>
                                  <td class="text-end">$5</td>
                                  <td class="text-end">$310</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $20,858</p>
                            <p>vat (10%) : $2,085</p>
                            <hr />
                            <h3><b>Total :</b> $22,943</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(1) -->
                    <!-- (2) -->
                    <div class="invoice-124" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                4933, Goldcliff Circle, <br />Washington DC,
                                <br />Washington - 20002
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Nirav Joshi,</h4>
                              <p class="text-muted ms-4">
                                514, Point Street, <br />Illinois, <br />Hickory
                                Hills - 60457
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 26th Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 31st Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Book</td>
                                  <td class="text-end">6</td>
                                  <td class="text-end">$24</td>
                                  <td class="text-end">$144</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Backpack</td>
                                  <td class="text-end">3</td>
                                  <td class="text-end">$400</td>
                                  <td class="text-end">$1200</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Batteries</td>
                                  <td class="text-end">20</td>
                                  <td class="text-end">$1000</td>
                                  <td class="text-end">$20000</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Box</td>
                                  <td class="text-end">60</td>
                                  <td class="text-end">$50</td>
                                  <td class="text-end">$3000</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $24,344</p>
                            <p>vat (10%) : $2,434</p>
                            <hr />
                            <h3><b>Total :</b> $26,778</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(2)-->
                    <!-- (3) -->
                    <div class="invoice-125" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                4669, Thompson Drive, <br />California,
                                <br />San Francisco - 94108
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Sunil Joshi,</h4>
                              <p class="text-muted ms-4">
                                1673, Mcwhorter Road, <br />Mississippi,
                                <br />Cleveland - 38732
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 23rd Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 26th Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Brush</td>
                                  <td class="text-end">9</td>
                                  <td class="text-end">$124</td>
                                  <td class="text-end">$1116</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Calendar</td>
                                  <td class="text-end">6</td>
                                  <td class="text-end">$250</td>
                                  <td class="text-end">$1500</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Cassette</td>
                                  <td class="text-end">25</td>
                                  <td class="text-end">$60</td>
                                  <td class="text-end">$1500</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>CD Player</td>
                                  <td class="text-end">10</td>
                                  <td class="text-end">$50</td>
                                  <td class="text-end">$500</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $4,616</p>
                            <p>vat (10%) : $461</p>
                            <hr />
                            <h3><b>Total :</b> $5,077</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(3)-->
                    <!-- (4) -->
                    <div class="invoice-126" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                2280, Roosevelt Road, <br />Kansas,
                                <br />Wichita - 67213
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Vishank Joshi,</h4>
                              <p class="text-muted ms-4">
                                270, Shearwood Forest Drive, <br />New
                                Hampshire, <br />Manchester - 03103
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 19th Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 22nd Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Comb</td>
                                  <td class="text-end">5</td>
                                  <td class="text-end">$14</td>
                                  <td class="text-end">$70</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Computer</td>
                                  <td class="text-end">10</td>
                                  <td class="text-end">$500</td>
                                  <td class="text-end">$5000</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Match</td>
                                  <td class="text-end">30</td>
                                  <td class="text-end">$6</td>
                                  <td class="text-end">$180</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Down Coat</td>
                                  <td class="text-end">20</td>
                                  <td class="text-end">$6</td>
                                  <td class="text-end">$120</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $5,370</p>
                            <p>vat (10%) : $537</p>
                            <hr />
                            <h3><b>Total :</b> $5,907</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(4)-->
                    <!-- (5) -->
                    <div class="invoice-127" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                4006, Victoria Street, <br />Louisiana,
                                <br />Baton Rouge - 70814
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Virat Kohali,</h4>
                              <p class="text-muted ms-4">
                                1850, Tully Street, <br />Michigan,
                                <br />Detroit - 48219
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 22nd Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 26th Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Folder</td>
                                  <td class="text-end">123</td>
                                  <td class="text-end">$4</td>
                                  <td class="text-end">$192</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Lipstick</td>
                                  <td class="text-end">15</td>
                                  <td class="text-end">$5</td>
                                  <td class="text-end">$75</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Make-up</td>
                                  <td class="text-end">20</td>
                                  <td class="text-end">$300</td>
                                  <td class="text-end">$6000</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Mirror</td>
                                  <td class="text-end">60</td>
                                  <td class="text-end">$50</td>
                                  <td class="text-end">$3000</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $9,267</p>
                            <p>vat (10%) : $926</p>
                            <hr />
                            <h3><b>Total :</b> $10,193</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(5)-->
                    <!-- (6) -->
                    <div class="invoice-128" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                2874, Havanna Street, <br />Indiana,
                                <br />Butlerville - 47223
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Smith John,</h4>
                              <p class="text-muted ms-4">
                                3837, Oak Lane, <br />Missouri, <br />Kansas
                                City - 64106
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 3rd Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 5th Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Scissors</td>
                                  <td class="text-end">5</td>
                                  <td class="text-end">$52</td>
                                  <td class="text-end">$260</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Stereo system</td>
                                  <td class="text-end">2</td>
                                  <td class="text-end">$100</td>
                                  <td class="text-end">$200</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Television</td>
                                  <td class="text-end">22</td>
                                  <td class="text-end">$520</td>
                                  <td class="text-end">$11440</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Tickets</td>
                                  <td class="text-end">36</td>
                                  <td class="text-end">$52</td>
                                  <td class="text-end">$1872</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $13,772</p>
                            <p>vat (10%) : $1,377</p>
                            <hr />
                            <h3><b>Total :</b> $15,149</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(6)-->
                    <!-- (7) -->
                    <div class="invoice-129" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                902, Zappia Drive, <br />Kentucky,
                                <br />Lexington - 40509
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Sachin Emily,</h4>
                              <p class="text-muted ms-4">
                                2867, Rainbow Drive, <br />Ohio, <br />North
                                Canton - 44720
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 6th Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 25th Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Mobile phone</td>
                                  <td class="text-end">6</td>
                                  <td class="text-end">$214</td>
                                  <td class="text-end">$1284</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Trash can</td>
                                  <td class="text-end">31</td>
                                  <td class="text-end">$20</td>
                                  <td class="text-end">$620</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>CD</td>
                                  <td class="text-end">50</td>
                                  <td class="text-end">$600</td>
                                  <td class="text-end">$30000</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Headset</td>
                                  <td class="text-end">6</td>
                                  <td class="text-end">$5</td>
                                  <td class="text-end">$30</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $31,934</p>
                            <p>vat (10%) : $3,193</p>
                            <hr />
                            <h3><b>Total :</b> $35,127</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(7)-->
                    <!-- (8) -->
                    <div class="invoice-130" id="printableArea">
                      <div class="row pt-3 printableArea">
                        <div class="col-md-12">
                          <div class="">
                            <address>
                              <h3>&nbsp;From,</h3>
                              <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                              <div class="mb-2">
                                <span class="fw-bold ms-1">Invoice Id:</span
                                ><span class="invoice-number ms-2"></span>
                                <h6 class="text-muted font-weight-medium">
                                  &nbsp;Email: steve@gmail.com
                                </h6>
                              </div>
                              <p class="text-muted ms-1">
                                3004, Berkshire Circle, <br />Tennessee,
                                <br />Knoxville - 37917
                              </p>
                            </address>
                          </div>
                          <div class="text-end">
                            <address>
                              <h3>To,</h3>
                              <h4 class="fw-bold">Stiphan Robots,</h4>
                              <p class="text-muted ms-4">
                                3327, Fort Street, <br />Washington,
                                <br />Tacoma - 98402
                              </p>
                              <p class="mt-4">
                                <b>Invoice Date :</b>
                                <i class="fa fa-calendar"></i> 21st Jan 2021
                              </p>
                              <p>
                                <b>Due Date :</b>
                                <i class="fa fa-calendar"></i> 27th Jan 2021
                              </p>
                            </address>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div
                            class="table-responsive mt-5"
                            style="clear: both"
                          >
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-end">Quantity</th>
                                  <th class="text-end">Unit Cost</th>
                                  <th class="text-end">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Notebook</td>
                                  <td class="text-end">26</td>
                                  <td class="text-end">$24</td>
                                  <td class="text-end">$624</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Radio cassette player</td>
                                  <td class="text-end">13</td>
                                  <td class="text-end">$500</td>
                                  <td class="text-end">$6500</td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Scissors</td>
                                  <td class="text-end">60</td>
                                  <td class="text-end">$600</td>
                                  <td class="text-end">$36000</td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Speakers</td>
                                  <td class="text-end">20</td>
                                  <td class="text-end">$5</td>
                                  <td class="text-end">$100</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right mt-4 text-end">
                            <p>Sub - Total amount: $43,224</p>
                            <p>vat (10%) : $4,322</p>
                            <hr />
                            <h3><b>Total :</b> $47,546</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr />
                          <div class="text-end">
                            <button class="btn btn-danger" type="submit">
                              Proceed to payment
                            </button>
                            <button
                              class="btn btn-default print-page"
                              type="button"
                            >
                              <span><i class="fa fa-print"></i> Print</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./(8)-->
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Right Part -->
            <!-- -------------------------------------------------------------- -->
          </div>
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
    <script src="dist/js/pages/samplepages/jquery.PrintArea.js"></script>
    <script src="dist/js/pages/invoice/invoice.js"></script>
  </body>
</html>
