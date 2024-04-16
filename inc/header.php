<?php 
    $active_nav = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $pageTitle; ?></title>
    <link href="img/favicon.ico" rel="icon">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" role="status" style="width: 4rem; height: 4rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-warning text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">Accessify!</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>No 3A, Akinlade Street Alekuwodo Osogbo </small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>olakanmisola042@gmail.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+234 8058769488</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-warning rounded-circle ms-2" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-warning rounded-circle ms-2" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-warning rounded-circle ms-2" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!--Start of Navbar-->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index" class="nav-item nav-link <?php  
                            if($pageTitle == 'Home'){
                                $active_nav = 'active';
                            }else{
                                $active_nav = '';
                            }
                            echo $active_nav;
                        ?>">Home</a>
                        <a href="about" class="nav-item nav-link <?php  
                            if($pageTitle == 'About'){
                                $active_nav = 'active';
                            }else{
                                $active_nav = '';
                            }
                            echo $active_nav;
                        ?>">About</a>
                        <a href="service" class="nav-item nav-link <?php  
                            if($pageTitle == 'Services'){
                                $active_nav = 'active';
                            }else{
                                $active_nav = '';
                            }
                            echo $active_nav;
                        ?>">Services</a>
                        <a href="project" class="nav-item nav-link <?php  
                            if($pageTitle == 'Projects'){
                                $active_nav = 'active';
                            }else{
                                $active_nav = '';
                            }
                            echo $active_nav;
                        ?>">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature" class="dropdown-item">Features</a>
                                <a href="team" class="dropdown-item">Our Team</a>
                                <a href="testimonial" class="dropdown-item">Testimonial</a>
                                <a href="quote" class="dropdown-item">Quotation</a>
                                <a href="simple" class="dropdown-item">Simple Page</a>
                            </div>
                        </div>
                        <a href="contact" class="nav-item nav-link <?php  
                            if($pageTitle == 'Contact'){
                                $active_nav = 'active';
                            }else{
                                $active_nav = '';
                            }
                            echo $active_nav;
                        ?>">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="quote" class="btn btn-warning rounded-pill py-2 px-3 dog">Get A Quote</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->