<!-- <:?= var_dump($_SESSION['panier']); ?> -->


<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
          <li class="breadcrumb-item active h3">Panier</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Vous avez <?= count($_SESSION['panier']) ?>  produits dans votre panier</p></div>
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
                <?php
                    // Si le tableau $_GET à la clé keyCartDelete est différent de vide
                    if (!empty($_GET['keyCartDelete'])) {
                      // https://www.php.net/manual/fr/function.unset.php
                      // A l'aide de la fonction unset, ce qui se trouve dans le tableau $_SESSION
                      // à la clé cart
                      // puis à la clé récupérer dans le paramètre GET
                      // c'est à dire la clé du tableau associatif du produit
                      unset($_SESSION['panier'][$_GET['keyCartDelete']]);
                    }
                  ?>
                          <!-- <:?= var_dump($_SESSION['panier']) ?> -->



                  <!-- Product-->
                  <!-- <:?php foreach($viewVars['panier'] as $panierAdd) : ?>  -->
                    <?php foreach($_SESSION['panier'] as $key => $panierAdd) : ?>
                  <div class="cart-item">
                    <div class="row d-flex align-items-center text-center">
                      <div class="col-5">
                      
                        <div class="d-flex align-items-center"><a href="detail.html">
                          <img src="<?= $panierAdd["picture"] ?>" alt="..." class="cart-item-img" style="height: 60px;"></a>
                          <div class="cart-title text-left ml-4"><a href="detail.html" class="text-uppercase text-dark"><strong><?= $panierAdd["name"] ?></strong></a><br>
                          </div>
                        </div>
                      </div>
                      <div class="col-2"><?= $panierAdd["price"] ?>€</div>
                      <div class="col-2">
                        <div class="d-flex align-items-center">
                          <div class="btn btn-items btn-items-decrease">-</div>
                         
                           <input value=" " class="form-control text-center input-items" type="text"> 
                          
                          <div class="btn btn-items btn-items-increase">+</div>
                        </div>
                      </div>
                      <div class="col-2 text-center">260€ total</div>
                      <div class="col-1 text-center"><a href="?keyCartDelete=<?= $key ?>" class="cart-remove"> <i class="fa fa-times"></i></a></div>
                    </div>
                  </div>
                  <?php endforeach ?>                 
                  </div>
              </div>
            </div>
            <div class="my-5 d-flex justify-content-between flex-column flex-lg-row ">
              <!-- ajouter produit au panier -->
              <a href="./" class="btn btn-link text-muted">
              <i class="fa fa-chevron-left"></i> Continuer les achats</a>
              <a href="checkout1.html" class="btn btn-dark">Commander <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-lg-4">
            <div class="block mb-5">
              <div class="block-header">
                <h6 class="text-uppercase mb-0">Récapitulatif</h6>
              </div>
              <div class="block-body bg-light pt-1">
                <p class="text-sm">Le coût de livraison est calculé en fonction des produits choisis</p>
                <ul class="order-summary mb-0 list-unstyled">
                  <li class="order-summary-item"><span>Sous total</span><span>390€</span></li>
                  <li class="order-summary-item"><span>Livraison</span><span>10€</span></li>
                  <li class="order-summary-item"><span>TVA</span><span>0€</span></li>
                  <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">400€</strong></li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>