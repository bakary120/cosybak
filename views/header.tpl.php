<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/css/font-awesome.min.css">
  <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./public/css/styles.css">
 
  <title>cosybak</title>
</head>

<body>
    <header>
        <div id="titre1">
            <h1 id="cosy">CosyBak</h1>
        <!-- <img src="images/cosybakban.png" alt="" style="width: 100%; height: 200px;"> -->
        </div>

       
        <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
        
            <div class="container-fluid">
                <!-- Navbar  -->
               
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="allproduct" class="nav-link">TOUT LES PRODUITS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">THES BIO</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">TISANES</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">INFUSIONS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">LES COFFRETS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
                        <!-- Bouton recherche-->
                        <div class="nav-item navbar-icon-link">
                            <a href="#" class="navbar-icon-link"><i class="fa fa-search"></i></a>
                        </div>

                        <div class="nav-item dropdown">
                            <div class="d-none d-lg-block">
                                <!-- lien panier -->
                                
                                <a id="cartdetails" href="panier" class="navbar-icon-link">
                                    <i class="fa fa-shopping-cart"></i>
                                   
                                    <span class="badge badge-secondary">
                                         <!-- <:?= array_sum($_SESSION["panier"])?>  -->
                                         <?= count($_SESSION["panier"]) ?> 
                                        </span>
                                    
                                      <!-- <a id="dropdownCart" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link"></a>
                                      <div aria-labelledby="dropdownCart" class="dropdown-menu dropdown-menu-right">
                                    </div> -->
                                </a>
                            </div>
                        </div>


                          <!-- profil et logout -->
                          <?php if (!empty($_SESSION['login'])): ?>
                                        <div id="membre">
                                    
                                   
                                    <div id="navbar" classe="btn btn-primary">
                                        <?php 
                                        // var_dump($viewVars['userInfo']); 
                                        ?>
                                    <a href="profil?userId=<?=  $_SESSION["login"]->getId() ?>" class="fa fa-user text-black">__PROFIL</a>
                                    <a href="logout" class="btn btn-danger">Déconnexion</a>
                                    
                                    <!-- <a href="logout" classe="btn btn-danger">
                                        <input type="button"  value="Déconnexion"></a> -->
                                    </div>
                                </div>
                                <?php endif; ?>
                            <!--fin de profil et logout -->


                            <?php if (empty($_SESSION['login'])): ?>
                                <!-- changer en profil en cas de connexion et affiche bouton deconnexion -->
                        <!-- lien vers la pages de connexion et d'inscription-->
                        <div class="nav-item">
                            <a href="connexion" class="navbar-icon-link"><i class="fa fa-user"></i></a>
                        </div>
                        <!-- panier-->
                        <?php endif; ?>


                    </div>
                </div>
        </nav>
      
        <!-- <:?php 
         print_r($_SESSION['login']);
         ?> -->
                            <br>
                            <br>

        <?php if (!empty($_SESSION['login'])): ?>
        <div id="inscre">
     
     <div class="text-center font-weight-bold h3">
         <p>Bonjour <span><?= $_SESSION['login']->getLastname()?></span></p>
       
     </div>
     <!-- <div id="navbar">
        <?php 
         // var_dump($viewVars['userInfo']); 
        ?>
       <a href="profil?userId=<:?=  $_SESSION["login"]->getId() ?>" class="fa fa-user">__PROFIL</a>
       <a href="connected" class="fa fa-home home-membre" ></a>
       <a href="logout">
         <input type="button" id="button" value="Déconnexion"></a>
     </div> -->
   </div>
   <?php endif; ?>
   <br>
        <br>
        <br>
    </header>