<?php
include('includes/session.php');
require('includes/utile.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Achieve</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logoo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    
    <!--fin Prloader -->
   
<?php if ((!est_connecte())):?>
        <!-- Navbar Area -->
        <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
    
                        <!-- Logo -->
                        <a class="nav-brand" href="accueil.php"><img src="img\logo.png" alt=""></a>
    
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
    
                        <!-- Menu -->
                        <div class="classy-menu">
    
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
    
                            <!-- Nav Start -->
                            <div  class="classynav">
                                <ul>
                                    <li ><a href="accueil.php">Accueil</a></li>
                                    <li><a href="#">Cours en ligne</a></li>
                                </ul>

    
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    <a href="register.php" class="btn">Inscription</a>
    
                                    <a type="button" class="btn active" href="formconnexion.php">Connexion</a>
    
                                </div>
    
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->

        <?php else :
        ?>
        <!-- ##### Header Area Start ##### -->
  <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="accueil.php"><img src="img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div></div>

                         <!-- Nav Start -->
                         <div id="a" class="classynav">
                            <ul>
                                <li ><a href="accueil.php">Accueil</a></li>
                                <li><a href="#">Cours en ligne</a></li>
                                <?php if(statut()!=0):?><li><a href="espace.php" >Mon Espace</a></li> <?php else: ?><li><a  href="notification.php">Mon Espace</a></li>  <?php endif; ?>
                                <?php if(notification()==0 && statut()==0):?>
                                    <li><a href="#"><i class="fa fa-bell">&nbsp;</i></a></li>
                                <?php elseif(notification()!=0 && statut()==0): ?>
                                    <li><a href="notification.php"><i class="fa fa-bell"><sup class='badge badge-danger'><?php echo notification()?></sup>&nbsp;</i></a></li> 
                                    
                                    

                                    <?php endif;?>
                            </ul>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (est_connecte()) echo $_SESSION['nom'];?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a type="submit" href="deconnexion.php"class="dropdown-item"  name="deconnexion">Déconnexion</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img\divers\profile.jpg" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                       </header>


                    <?php endif; ?>
         <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100" style="background-image: url(img/bg-img/bg2.jpg); height: 350px; ;" >
       
         
    </section>
    <?php if(statut()==0):?>
        </br></br>
    <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms" >
                        <a class="btn clever-btn btn-2" data-toggle='collapse' href='#choix2'>Ajouter Une Catégorie</a></br>
                            <div class='collapse mx-auto cours' id='choix2'>
                                <form method="POST" action="redirection/redirection-categorie.php" enctype='multipart/form-data'>
                                    <div class="form-group">
                                      <input type="text" class="form-control form-control-sm" placeholder="Ajouter Une Catégorie" required name="domaine">
                                    </div>
                                    <div>
                                      <input type="file" class="form-control form-control-sm" id="img" hidden="true" name='img'>
                                      <label for="img" ><img class=" mx-auto"  data-toggle="tooltip" data-placement="top" title="Sélectionner une Image" src='img/camera.png'/></label></div>
                                    <button type="submit"  class="btn btn-outline-secondary btn-sm mx-auto">Ajouter</button>
                                  </form>
                            </div>
                        
                    </div>
    <?php endif; ?>
    <!-- ##### Blog Area End ##### -->

            <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                    <!-- Single Catagories -->
                   <?php include('includes/ajout-categorie.php'); ?>
                    
                </div>

                </div>
                </div>
        </div></section>

                   

    </div>
    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="accueil.php"><p style="font-size: xx-large;font-weight: bolder;">Achieve</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
    </body></html>

 <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>