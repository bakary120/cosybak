
<section class="hero">
    <div class="container">
    
    <ol class="breadcrumb justify-content-center">
        <!-- emplacement de la page actuelle -->
          <li class="breadcrumb-item active"><?= $viewVars['categorytype']['name']?></li>       
      
      </ol>
    
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <header class="product-grid-header d-flex align-items-center justify-content-between">
        <div class="mr-3 mb-3">
          Affichage <strong> de </strong><strong><?= count($viewVars['categorytype']) ?> </strong>résultats
        </div>
      
        
      </header>
      <div class="row">
        <!-- product-->
        <?php foreach($viewVars['categorytype'] as $categorytype) : ?>
        <div class="product col-xl-3 col-lg-4 col-sm-6">
          <div class="product-image">
            <a href="#" class="product-hover-overlay-link">
           
              <img src="<?= $categorytype->getPicture() ?>" alt="product" class="img-fluid">
            </a>
          </div>



          <form class="product-action-buttons" action="" method="POST">
           
            <input type="hidden" name="name" value="<?= $categorytype->getName() ?>">
            <input type="hidden" name="picture" value="<?= $categorytype->getPicture() ?>">
            <input type="hidden" name="price" value="<?= $categorytype->getPrice() ?>">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="<?= $categorytype->getId() ?>">
          
            <span class="font-weight-bold h4"><?= number_format($categorytype->getPrice(), 2, ',', ' ') ?> €</span>
            <!-- <a href="./paier?product_id=<?= $categorytype->getId() ?>" class="btn btn-primary btn-buy">
          
            </a> -->
            <button name="addCartSession" type="submit"><i class="fa fa-shopping-cart"></i></button>
            <a href="./detail?product_id=<?= $categorytype->getId() ?>" class="btn btn-primary btn-buy">
              <i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
           
           
            
          </form> 

       

         
          <div class="py-2 ">
          <h2 class="h6 text-uppercase mb-1 text-center"><a href="#" class="text-dark"><?= $categorytype-> getName() ?></a></h2>
            <p class="text-muted text-sm mb-1 "><?= $categorytype->getdescription() ?></p> 
          </div>
          

          
        </div>
        <?php endforeach; ?>
      
        
         

      </div>
      
    </div>
  </section>