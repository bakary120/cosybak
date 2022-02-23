<?php
require(__DIR__.'/../pathUrl.php');
// Session start permet de démarrer notre $_SESSION
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./html/public/assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
  
  <link rel="stylesheet" href="./html/public/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./html/public/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./html/public/assets/css/styles.css">
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
                            <a href="<?= pathUrl().'index.php' ?>" class="nav-link">Home</a>
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
                        <!-- lien vers la pages de connexion et d'inscription-->
                        <div class="nav-item">
                            <a href="#" class="navbar-icon-link"><i class="fa fa-user"></i></a>
                        </div>
                        <!-- panier-->
                        <div class="nav-item dropdown">
                            <div class="d-none d-lg-block">
                                <!-- lien panier -->
                                <a id="cartdetails" href="" class="navbar-icon-link">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="badge badge-secondary">10</span>
                                      <a id="dropdownCart" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link"></a>
                                      <div aria-labelledby="dropdownCart" class="dropdown-menu dropdown-menu-right">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </header>
    
