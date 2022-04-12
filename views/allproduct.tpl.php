
<section class="hero">
    <div class="container">
    
    <ol class="breadcrumb justify-content-center">
        <!-- emplacement de la page actuelle -->
          <li class="breadcrumb-item active">Tout les produits</li>       
      
      </ol>
      
      <!-- <div class="hero-content pb-5 text-center">        
        <div class="row">
          <div class="col-xl-8 offset-xl-2">
            <p class="lead text-muted"> 
            Tout les produits</p>
          </div>
        </div>
      </div> -->
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <header class="product-grid-header d-flex align-items-center justify-content-between">
        <div class="mr-3 mb-3">
          Affichage <strong> de </strong><strong><?= count($viewVars['allproduct']) ?> </strong>résultats
        </div>
      </header>
      
      <div class="row">
        <!-- product-->
        <?php foreach($viewVars['allproduct'] as $allproduct) : ?>
        <div class="product col-xl-3 col-lg-4 col-sm-6">
          <div class="product-image">
            <a href="#" class="product-hover-overlay-link">
           
              <img src="<?= $allproduct->getPicture() ?>" alt="product" class="img-fluid">
            </a>
          </div>



          <form class="product-action-buttons mt-4 text-center" action="" method="POST">
           
            <input type="hidden" name="name" value="<?= $allproduct->getName() ?>">
            <input type="hidden" name="picture" value="<?= $allproduct->getPicture() ?>">
            <input type="hidden" name="price" value="<?= $allproduct->getPrice() ?>">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="<?= $allproduct->getId() ?>">
          
            <span class="font-weight-bold h4"><?= number_format($allproduct->getPrice(), 2, ',', ' ') ?> €</span>
            
            <button class="btn btn-success" name="addCartSession" type="submit">Ajouter au panier</button>
            <a href="./detail?product_id=<?= $allproduct->getId() ?>" class="btn btn-primary btn-buy">
              <i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
           
           
            
          </form> 

       

         
          <div class="py-4 ">
          <p class="h4 text-uppercase mb-1 text-center"><a href="#" class="text-dark"><?= $allproduct-> getName() ?></a></p>
            <p class="text-muted text-sm mb-1 "><?= $allproduct->getdescription() ?></p> 
          </div>
          

          
        </div>
        <?php endforeach; ?>
      
        
         

      </div>
      
    </div>
  </section>