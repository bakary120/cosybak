<!-- <:?= var_dump($_SESSION['panier']); ?> -->
<section class="hero">
    <div class="container">
    
   
      <ol class="breadcrumb justify-content-center">
        <!-- emplacement de la page actuelle -->
        <?php foreach ($viewVars['categoryOne'] as $categoryOneList) : ?>
          <li class="breadcrumb-item active"><?= $categoryOneList->getName() ?></li>       
      <?php endforeach; ?>
        
      </ol>
      
      <div class="hero-content pb-5 text-center">        
        <div class="row">
          <div class="col-xl-8 offset-xl-2">
            <p class="lead text-muted"> 
            <?= $categoryOneList->getsubtitle() ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <header class="product-grid-header d-flex align-items-center justify-content-between">
        <div class="mr-3 mb-3">
          Affichage <strong> de </strong><strong><?= count($viewVars['products']) ?> </strong>résultats
        </div>
      
        <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Trier par</span>
          <select class="custom-select w-auto border-0">
            <option value="orderby_0">Defaut</option>
            <option value="orderby_1">Popularité</option>
            <option value="orderby_2">Nouveauté</option>
            <option value="orderby_3">prix</option>
          </select>
        </div>
      </header>
      <div class="row">
        <!-- product-->
        <?php foreach($viewVars['products'] as $product) : ?>
        <div class="product col-xl-3 col-lg-4 col-sm-6">
          <div class="product-image">
            <a href="#" class="product-hover-overlay-link">
           
              <img src="<?= $product->getPicture() ?>" alt="product" class="img-fluid">
            </a>
          </div>
          <div class="product-action-buttons text-center m-3">
            <span class="font-weight-bold h4"><?= number_format($product->getPrice(),2, ',', ' ') ?> €</span>
            <a href="./panier?panier_id=<?= $product->getId() ?>" class="btn btn-outline-dark btn-product-left">
            <i class="fa fa-shopping-cart"></i></a>
            <a href="./detail?detail_id=<?= $product->getId() ?>" class="btn btn-primary btn-buy">
            <i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
          </div>
         
          <div class="py-2 ">
          <h2 class="h6 text-uppercase mb-1 text-center"><a href="#" class="text-dark"><?= $product-> getName() ?></a></h2>
            <p class="text-muted text-sm mb-1 "><?= $product->getdescription() ?></p> 
          </div>
          
        </div>
        <?php endforeach; ?>
        <!-- /product-->
        

<!--         
        <div class="product col-xl-3 col-lg-4 col-sm-6">
            <div class="product-image">
              <a href="detail.html" class="product-hover-overlay-link">
                <img src="../images/produits/2-rose_tn.jpg" alt="product" class="img-fluid">
              </a>
            </div>
            <div class="product-action-buttons">
              <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
              <a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
            </div>
            <div class="py-2">
              <p class="text-muted text-sm mb-1">thé vert jasmin Desc</p>
              <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">thé vert jasmin</a></h3><span class="text-muted">13.99€</span>
            </div>
          </div>
         -->
        
         

      </div>
      
    </div>
  </section>