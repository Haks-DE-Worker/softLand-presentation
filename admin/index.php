<?php require_once 'auth_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - SOFTLAND</title>


  <!-- Favicons -->
  <link href="/plateformeSoftland/img/favicon.png" rel="icon">
  <link href="/plateformeSoftland/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/plateformeSoftland/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/plateformeSoftland/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/plateformeSoftland/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/plateformeSoftland/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/plateformeSoftland/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/plateformeSoftland/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/plateformeSoftland/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/plateformeSoftland/css/style-dashboard.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/plateformeSoftland/admin/dashboard.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">SOFTLAND</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/plateformeSoftland/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['user_last_name']. " ".$_SESSION['user_name']  ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
              <h6><?= $_SESSION['user_last_name']. " ".$_SESSION['user_name']?></h6>
              <span><?= $_SESSION['profile_user'] ?></span>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
              <a class="dropdown-item d-flex align-items-center" href="/plateformeSoftland/index.php">
                
                <span>Allez sur l'application</span>
              </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/plateformeSoftland/admin/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>se déconnecter</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/plateformeSoftland/admin/dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Tableau de board</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Produit</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/plateformeSoftland/admin/produits/create.php">
              <i class="bi bi-circle"></i><span>Ajouter un produit</span>
            </a>
          </li>
          <li>
            <a href="/plateformeSoftland/admin/produits/index.php">
              <i class="bi bi-circle"></i><span>Liste des produits</span>
            </a>
          </li>
          <li>
            <a href="/plateformeSoftland/admin/produits/afficheproduit.php">
              <i class="bi bi-circle"></i><span>Liste des produits et fonctionnalites</span>
            </a>
          </li>
        </ul>
     
        
      </li><!-- End Produit Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Articles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/plateformeSoftland/admin/articles/create.php">
              <i class="bi bi-circle"></i><span>Ajouter un article</span>
            </a>
          </li>
          <li>
            <a href="/plateformeSoftland/admin/articles/index.php">
              <i class="bi bi-circle"></i><span>Liste des articles</span>
            </a>
          </li>
        </ul>
      </li><!-- End Article Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Fonctionnalités</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/plateformeSoftland/admin/fonctionnalites/create.php">
              <i class="bi bi-circle"></i><span>Ajouter une fonctionnalité</span>
            </a>
          </li>
          <li>
            <a href="/plateformeSoftland/admin/fonctionnalites/index.php">
              <i class="bi bi-circle"></i><span>Liste des fonctionnalités</span>
            </a>
          </li>
        </ul>
      </li><!-- End fonctionnalites Nav -->

      <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#profiles-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Profiles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="profiles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/plateformeSoftland/admin/profiles/create.php">
              <i class="bi bi-circle"></i><span>Ajouter un profie</span>
            </a>
          </li>
          <li>
            <a href="/plateformeSoftland/admin/profiles/index.php">
              <i class="bi bi-circle"></i><span>Liste des profiles</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End profiles Nav -->

      <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/plateformeSoftland/admin/utilisateurs/index.php">
              <i class="bi bi-circle"></i><span>Liste des utilisateurs</span>
            </a>
          </li>
        </ul>
      </li>
      -->
      <!-- End users Nav -->


    </ul>

  </aside>
  <!-- End Sidebar-->

  
  <!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/plateformeSoftland/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/plateformeSoftland/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/plateformeSoftland/vendor/chart.js/chart.umd.js"></script>
  <script src="/plateformeSoftland/vendor/echarts/echarts.min.js"></script>
  <script src="/plateformeSoftland/vendor/quill/quill.js"></script>
  <script src="/plateformeSoftland/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/plateformeSoftland/vendor/tinymce/tinymce.min.js"></script>
  <script src="/plateformeSoftland/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/plateformeSoftland/js/main-dashboard.js"></script>

</body>

</html>