<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>1er Desempeño</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="css/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com 
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="listado.php">
              <i class="bi bi-circle"></i><span>Los mas vendidos</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Listado de Productos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Productos</a></li>
          <li class="breadcrumb-item active">Los mas vendidos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Los mas vendidos </h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Stock Inicial</th>
                        <th scope="col">Cant. Pedida</th>
                        <th scope="col">Stock Final</th>
                        <th scope="col">Precio Unit.</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row">1</th>
                        <th scope="row">
                          <a href="#"><img src="assets/img/auriculares1.jpg" title="#1516">
                          </a>
                        </th>
                        <td><a href="#" class="text-primary fw-bold">
                            Auriculares in-ear inalámbricos Soundpeats TrueFree 2 negro </a>
                          <span class="badge bg-danger" title='Destacado 10% Descuento!!'><i
                              class="bx bxs-star"></i></span>
                        </td>
                        <td>15</td>
                        <td>7</td>
                        <td>
                          <span class="badge bg-danger">8</span>
                        </td>
                        <td>$5664</td>
                        <td class="fw-bold">$39648</td>
                        <td>
                          <small> $3964.8</small>
                        </td>

                        <td class="fw-bold">
                          $35683.2 </td>
                      </tr>


                      <tr>
                        <th scope="row">2</th>
                        <th scope="row">
                          <a href="#"><img src="assets/img/auriculares2.jpg" title="#1218">
                          </a>
                        </th>
                        <td><a href="#" class="text-primary fw-bold">
                            Auricular inalámbrico JBL Tune 510BT blanco </a>
                          <span class="badge bg-danger" title='Destacado 10% Descuento!!'><i
                              class="bx bxs-star"></i></span>
                        </td>
                        <td>32</td>
                        <td>3</td>
                        <td>
                          <span class="badge bg-warning">29</span>
                        </td>
                        <td>$4899</td>
                        <td class="fw-bold">$14697</td>
                        <td>
                          <small> $1469.7</small>
                        </td>

                        <td class="fw-bold">
                          $13227.3 </td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <th scope="row">
                          <a href="#"><img src="assets/img/reloj.jpg" title="#1470">
                          </a>
                        </th>
                        <td><a href="#" class="text-primary fw-bold">
                            Reloj Led Touch Pulsera Silicona Unisex Deportivo Ajustable </a>
                        </td>
                        <td>36</td>
                        <td>8</td>
                        <td>
                          <span class="badge bg-warning">28</span>
                        </td>
                        <td>$750</td>
                        <td class="fw-bold">$6000</td>
                        <td>
                          $0 </td>

                        <td class="fw-bold">
                          $6000 </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <th scope="row">
                          <a href="#"><img src="assets/img/funda.jpg" title="#1623">
                          </a>
                        </th>
                        <td><a href="#" class="text-primary fw-bold">
                            Funda Deportiva Para iPhone 6s 7 8 X Plus Brazalete Correr </a>
                          <span class="badge bg-danger" title='Destacado 10% Descuento!!'><i
                              class="bx bxs-star"></i></span>
                        </td>
                        <td>29</td>
                        <td>3</td>
                        <td>
                          <span class="badge bg-warning">26</span>
                        </td>
                        <td>$750</td>
                        <td class="fw-bold">$2250</td>
                        <td>
                          <small> $225</small>
                        </td>

                        <td class="fw-bold">
                          $2025 </td>
                      </tr>


                      <tr>
                        <th scope="row">5</th>
                        <th scope="row">
                          <a href="#"><img src="assets/img/soporte.jpg" title="#1697">
                          </a>
                        </th>
                        <td><a href="#" class="text-primary fw-bold">
                            Soporte Extensible Apoya Celular Para Notebook Holder Iman </a>
                        </td>
                        <td>41</td>
                        <td>1</td>
                        <td>
                          <span class="badge bg-success">40</span>
                        </td>
                        <td>$1399</td>
                        <td class="fw-bold">$1399</td>
                        <td>
                          $0 </td>

                        <td class="fw-bold">
                          $1399 </td>
                      </tr>

                      <tr>
                        <th scope="row">6</th>
                        <th scope="row">
                          <a href="#"><img src="assets/img/monitor.jpg" title="#3567">
                          </a>
                        </th>
                        <td><a href="#" class="text-primary fw-bold">
                          Monitor ASUS VA27EHE</a>
                        </td>
                        <td>14</td>
                        <td>5</td>
                        <td>
                          <span class="badge bg-danger">9</span>
                        </td>
                        <td>$102040</td>
                        <td class="fw-bold">$510200</td>
                        <td>
                          $0 </td>

                        <td class="fw-bold">
                          $510200 </td>
                      </tr>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Productos <span>| Cantidad Total Pedida</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>27</h6>
                  <span class="text-success small pt-1 fw-bold">6</span> <span
                    class="text-muted small pt-2 ps-1">artículos diferentes</span>

                </div>
              </div>
            </div>


          </div>
        </div>

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Ventas <span>| Total general</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-exchange"></i>
                </div>
                <div class="ps-3">
                  <h6>$568534.5</h6>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working html/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>