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
        </div>


<!-- navbar en cas de session vide -->
        <?php if (empty($_SESSION['login']) && empty($_SESSION['admin'])): ?>
        <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
        
            <div class="container-fluid h5">
                <!-- Navbar  -->               
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="allproduct" class="nav-link">TOUS LES PRODUITS</a>
                        </li>
                        <?php foreach($viewVars['categories'] as $category) : ?>
                         <li class="nav-item">
                            <a href="./category?category_id=<?= $category->getId() ?>" class="nav-link"><?= $category->getName() ?></a>
                        </li>
                        <?php endforeach ?>
                      
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
                                         <?= count($_SESSION["panier"]) ?> 
                                    </span>
                                  
                                    <!-- <:?php  unset($_SESSION);  ?>   -->
                                    <!-- <:?php  var_dump($_SESSION['login']);  ?>   -->
                                
                                </a>
                            </div>
                        </div>

                         
                            <div class="nav-item">
                                <a href="connexion" class="navbar-icon-link"><i class="fa fa-user"></i></a>
                            </div>
                            
                       

                    </div>
                </div>
</nav>
        
<?php endif; ?> 







<!-- navbar session login client -->



        <?php if (!empty($_SESSION['login'])): ?>
        <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
        
            <div class="container-fluid h5">
                <!-- Navbar  -->               
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="allproduct" class="nav-link">TOUT LES PRODUITS</a>
                        </li>
                        <?php foreach($viewVars['categories'] as $category) : ?>
                         <li class="nav-item">
                            <a href="./category?category_id=<?= $category->getId() ?>" class="nav-link"><?= $category->getName() ?></a>
                        </li>
                        <?php endforeach ?>
                      
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
                                         <?= count($_SESSION["panier"]) ?> 
                                    </span>
                                  
                                    <!-- <:?php  unset($_SESSION);  ?>   -->
                                    <!-- <:?php  var_dump($_SESSION['login']);  ?>   -->
                                
                                </a>
                            </div>
                        </div>


                        <!-- profil et logout -->                                        


                         
                            <div id="membre">
                                <div id="navbar">                             
                                
                                <a href="profilmembre?userId=<?=$_SESSION["login"]->getId()?>" class="navbar-icon-link">
                                <i class="fa fa-user">_
                                    <?=$_SESSION['login']->getLastname()?>
                                </i></a>

                                <a href="logout" class="btn btn-danger">Déconnexion</a>                                        
                                </div>
                            </div>
                     

                    </div>
                </div>
</nav>
        
<?php endif; ?> 





















        <!-- navbar admin -->
        <?php if (!empty($_SESSION['admin'])): ?>


            <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
        
        <div class="container-fluid h5">
            <!-- Navbar  -->
           
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="adm" class="nav-link">Admin</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link">TOUT LES PRODUITS</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Membre</a>
                    </li>
                    -->
                                        
                   
                </ul>
                <div id="membre">
                            <div id="navbar">                             
                            
                            
                            <i class="fa fa-user">_
                                <?=$_SESSION['admin']->getLastname()?>
                            </i>
                            <a href="logout" class="btn btn-danger">Déconnexion</a>                                  
                            </div>
                        </div>
        </div>

    </nav>
    

            <?php endif; ?>


      
  
    </header>