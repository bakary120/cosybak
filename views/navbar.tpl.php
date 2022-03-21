<!-- navbar membre -->


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
                     <!-- <li> <a href="#" class="text-white opacity-75"><:?= $type->getName() ?></a></li> -->
     
                    <li class="nav-item">
                        <a href="./category?category_id=<?= $category->getId() ?>" class="nav-link"><?= $category->getName() ?></a>
                    </li>
                    <?php endforeach ?>
                  
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>





                <?php if (!empty($_SESSION['login'])): ?>
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
                            </a>
                        </div>
                    </div>

                  
                    <!-- profil et logout -->
                    
                        <div id="membre">
                            <div id="navbar">
                            <!-- <:?php 
                            // var_dump($_SESSION['login']); 
                            unset($_SESSION); 
                            ?> -->
                            <a href="adm?userId=<?=  $_SESSION["login"]->getId() ?>" class="fa fa-user h3">_<?=  $_SESSION["login"]->getLastname() ?></a>
                            <a href="logout" class="btn btn-danger">Déconnexion</a>
                                    
                            </div>
                        </div>
                   
                    <!--fin de profil et logout -->
                
                </div>
            </div>
    </nav>
  
   
     <br>
     <br>
     <?php endif; ?>


                    <!-- session vide -->
     <?php if (empty($_SESSION['login'])): ?>
                            <!-- changer en profil en cas de connexion et affiche bouton deconnexion -->
                            <!-- lien vers la pages de connexion et d'inscription-->
                            <div class="nav-item">
                                <a href="connexion" class="navbar-icon-link"><i class="fa fa-user"></i></a>
                            </div>
                            <!-- panier-->
     <?php endif; ?>



     <!-- navbar admin -->

     <?php if (!empty($_SESSION['admin'])): ?>


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


                    <!-- profil et logout -->
                    <?php if (!empty($_SESSION['admin'])): ?>
                        <div id="membre">
                            <div id="navbar">
                          
                            <a href="adm" class="fa fa-user h3">_<?=  $_SESSION["admin"]->getLastname() ?></a>
                            <a href="logout" class="btn btn-danger">Déconnexion</a>
                                    
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--fin de profil et logout -->

                </div>
            </div>
    </nav>
  
   
     <br>
     <br>
     <?php endif; ?>
