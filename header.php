<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="/plateformeSoftLand/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/font-icone/icons-1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="lib/font-googleapis/css2.css">



      <link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}">
      <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/sidebarmenu.js')}}"></script>
      <script src="{{asset('js/app.min.js')}}"></script>
      <script src="{{asset('libs/simplebar/dist/simplebar.js')}}"></script>
      <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}"></script>
      <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
      <script src="{{asset('')}}"></script>
    <style>
        .breadcrumb-bg {
  background-image: url(img/breadcrumb-bg.jpg);
}

.breadcrumb-text p {
  color: #F28123;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 7px;
}

.breadcrumb-text h1 {
  font-size: 50px;
  font-weight: 900;
  color: #fff;
  margin: 0;
  margin-top: 20px;
}

.breadcrumb-section {
  padding: 150px 0;
  background-size: cover;
  background-position: center center;
  position: relative;
  z-index: 1;
  background-attachment: fixed;
  padding-top: 200px;
}

.breadcrumb-section:after {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  content: "";
  background-color: #07212e;
  z-index: -1;
  opacity: 0.8;
}
    </style>
    
</head>
<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0 text-primary">SOFTLAND</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="w-auto navbar-nav ms-auto py-0">
                    <a href="index.php" class="w-auto nav-item nav-link <?= (basename($_SERVER['PHP_SELF'])) == 'index.php'? "active" : "" ?> ">Acceuil</a>
                    <a href="about.php" class="w-auto nav-item nav-link <?= (basename($_SERVER['PHP_SELF'])) == 'about.php'? "active" : "" ?> ">A propos</a>
                    <a href="service.php" class="w-auto nav-item nav-link <?= (basename($_SERVER['PHP_SELF'])) == 'service.php'? "active" : "" ?> ">Services</a>
                    <a href="produit.php" class="w-auto nav-item nav-link <?= (basename($_SERVER['PHP_SELF'])) == 'produit.php'? "active" : "" ?> ">Produits</a>
                    <!-- <a href="actualite.php" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF'])) == 'actualite.php'? "active" : "" ?> ">Actualités</a> -->
                    <a href="contact.php" class="w-auto nav-item nav-link <?= (basename($_SERVER['PHP_SELF'])) == 'contact.php'? "active" : "" ?> ">Contact</a>
                </div>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"></button>
                <?php if(!isset($_SESSION['user_id'])){ ?>
                <a href="admin/login.php" class="w-auto btn btn-primary py-2 px-4 ms-3">Se connecter</a>
                <?php 
                }
                else{

                ?>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/plateformeSoftland/admin/dashboard.php" class="w-auto btn btn-primary py-2 px-4 ms-3">Tableau de bord</a>
                    <a href="admin/logout.php" class="w-auto btn btn-primary py-2 px-4 ms-0">Se déconnecter</a>
                </div>
                <?php
                }
                ?>
            </div>
        </nav>
        <?php
            if(basename($_SERVER['PHP_SELF']) == 'index.php')
        {
        ?>
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-test3.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <!-- <h1 class="display-1  mb-md-4 animated zoomIn text-primary"> SOFTLAND</h1> -->
                                <h6 class="display-1 text-white mb-md-4 animated zoomIn" style="sont-size:12px;">Création des solutions numériques</h6>
                                
                                <a href="contact.php" class="btn btn-outline-primary py-md-3 px-md-5 aminated slideInCenter">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-test4.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <!-- <h1 class="display-1 text-white mb-md-4 animated zoomIn">SOFTLAND</h1> -->
                                <h6 class="display-1 text-white mb-md-4 animated zoomIn" style="sont-size:12px;">Vente des équipements informatiques</h6>
                                
                                <a href="contact.php" class="btn btn-outline-primary py-md-3 px-md-5 aminated slideInCenter">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        <?php
        }
        else{
            ?>
            <div class="breadcrumb-section breadcrumb-bg">
		    <div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>
                            <?php

                            if(basename($_SERVER['PHP_SELF']) == 'about.php'){
                                echo "A PROPOS DE SOFTLAND";
                            }
                            elseif(basename($_SERVER['PHP_SELF']) == 'service.php'){
                                echo "NOS SERVICES";
                            }
                            elseif(basename($_SERVER['PHP_SELF']) == 'produit.php'){
                                echo "NOS PRODUITS";
                            }
                            elseif(basename($_SERVER['PHP_SELF']) == 'contact.php'){
                                echo "NOUS CONTACTER";
                            }
                            // elseif(basename($_SERVER['PHP_SELF']) == 'detail_actualite.php'){
                            //     echo "DETAIL ARTICLE";
                            // }
                            // elseif(basename($_SERVER['PHP_SELF']) == 'actualite.php'){
                            //     echo "NOS ARTICLES";
                            // }
                            elseif(basename($_SERVER['PHP_SELF']) == 'detail_produit.php'){
                                echo "DETAIL PRODUIT";
                            }
                            else{
                                echo "SOFTLAND";
                            }
                            ?>
                            
                        </h1>

					</div>
				</div>
			</div>
            </div>
            </div>

        <?php
            }
       
        ?>
        
        
    </div>
    <!-- Navbar & Carousel End -->

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

</body>
  


