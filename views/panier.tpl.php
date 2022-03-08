<!-- <:?= var_dump($_SESSION['panier']); ?> -->


<section class="hero">
      <div class="container">
        
        <ol class="breadcrumb justify-content-center">
          
          <li class="breadcrumb-item active h3">Panier</li>
        </ol>
        
        <div class="hero-content pb-5 text-center">
          
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Vous avez 
              <?= count($_SESSION['panier']) ?> 
              
               produits dans votre panier</p></div>
          </div>
        </div>
      </div>
    </section>
  <section>
      <div class="container">
        <div class="row mb-5"> 
          <div class="col-lg-8">
            <div class="cart">
              <div class="cart-wrapper">
                <div class="cart-header text-center">
                  <div class="row">
                    <div class="col-5">Produit</div>
                    <div class="col-2">Prix</div>
                    <div class="col-2">Quantité</div>
                    <div class="col-2">Total</div>
                    <div class="col-1"></div>
                  </div>
                </div>

                <div class="cart-body">
                
                <!-- <:?= print_r($_SESSION) ?>  -->
              
                  
                    <?php foreach($_SESSION['panier'] as $key => $panierAdd) : ?>
                    
                  <div class="cart-item">
                    <div class="row d-flex align-items-center text-center">
                      <div class="col-5">

                      <?= print_r($panierAdd) ?>

                        <div class="d-flex align-items-center"><a href="detail.html">
                          <img src="<?= $panierAdd["picture"] ?>" alt="..." class="cart-item-img" style="height: 60px;"></a>
                          <div class="cart-title text-left ml-4"><a href="detail.html" class="text-uppercase text-dark">
                            <strong><?= $panierAdd["name"] ?></strong></a><br>
                          </div>
                        </div>
                      </div>
                      <div class="col-2"><?= $panierAdd["price"] ?>€</div>
                      <div class="col-2">
                        <div class="d-flex align-items-center">
                         
                        <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $key ?>">
                        <button name="moins" type="submit" class="btn btn-items btn-items-decrease">-</button>
                          </form>
                         
                          <div class="bg-white p-2 border border-dark rounded">
                          <!-- <input value="<:?= $panierAdd["quantity"] ?> " class="form-control text-center input-items" type="text">   -->
                           <?= $panierAdd["quantity"] ?>
                          </div>
                           
                           
                          <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $key ?>">
                            <button name="plus" type="submit" class="btn btn-items btn-items-increase">+</button>
                          </form>
                        
                          
                        </div>
                      </div>

                       <!-- Pour le total d'un produit, il faut multiplier le prix de l'item avec sa quantité 
                      à travers les valeurs du tableau $_SESSION
                      https://www.php.net/manual/fr/function.intval.php -->
                     
                      <div class="col-2 text-center"><?= intval($panierAdd['price'])*intval($panierAdd['quantity']) ?>€</div>
                      
                      
                      <div class="col-1 text-center"><a href="?keyCartDelete=<?= $key ?>" class="cart-remove"> <i class="fa fa-times"></i></a></div>
                    </div>
                  </div>
                  <?php endforeach ?> 
                  
                                 

                  
                  </div>
              </div>
            </div>


            <div class="my-5 d-flex justify-content-between flex-column flex-lg-row ">
              
              <a href="./" class="btn btn-link text-muted">
              <i class="fa fa-chevron-left"></i> Continuer les achats</a>
           
             

              <a href="checkout1.html" class="btn btn-warning">Commander(<?= count($_SESSION['panier']) ?>article) <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>

          

          <div class="col-lg-4 p-2 text-center">
            <ul class="order-summary mb-0 list-unstyled">
            <?php
                  // la variable $total est initialisé à 0
                  $total = 0;
                  // Le foreach permet de parcourir le tableau de $_SESSION à la clé cart
                  foreach($_SESSION['panier'] as $panierAdd) {
                    // la variable $total va ajouter à chaque passage de boucle le prix multiplié par la quantité
                    // pour chaque produits du panier
                    $total += intval($panierAdd['price'])*intval($panierAdd['quantity']);
                  }

                  if ($total < 50) {
                    $total += 10;
                    $delivery = 10;
                  } else {
                    $delivery = 0;
                  }
                  ?>
               <li class="order-summary-item text-secondary"><span>Sous total :</span><span><?= $total ?>€</span></li>
                  <li class="order-summary-item text-secondary"><span>Livraison:</span><span><?= $delivery ?>€</span></li>
              <li class="order-summary-item text-secondary"><span>TVA (20%):</span><span><?= $total*20/100 ?></span></li>
              <li class="order-summary-item border-0 "><strong class="order-summary-total"><span>TOTAL(TTC)</span><br><?= $total+($total*20/100) ?>€</strong></li>
            </ul>
          </div>

         

          </div>

        </div>
      </div>
    </section> 