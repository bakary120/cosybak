
 <?php foreach($viewVars['productDetails'] as $productDetails) : ?>
<div class="row">
    <img class="col-4" src="<?= $productDetails->getPicture() ?>" alt="">
    <div class="card col-8">
        <div class="col-12 radius-card">
       
            <div class="card-body">
                <h2 class="card-title white-text"><?= $productDetails->getName() ?></h2>
                
                

                <div class="py-2">
                <!-- <h2 class="h6 text-uppercase mb-1 text-center"><a href="#" class="text-dark"><:?= $productDetails->getDescription() ?></a></h2> -->
                    <p class="text-muted text-sm mb-1 "><?= $productDetails->getDescription() ?></p>           
                    
                </div>                
            </div>


            
        </div>

        <div class="product-action-buttons text-center m-4">
        <span class="font-weight-bold h4 p-3"><?= $productDetails->getprice() ?>€</span>
            <!-- <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a> -->
            <a href="" class="btn btn-primary btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></a>
          </div>
          
    </div>
</div>
<?php endforeach ?>

