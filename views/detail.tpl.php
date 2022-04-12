
 <?php foreach($viewVars['productDetails'] as $productDetails) : ?>
<div class="row">
    <img class="col-4" src="<?= $productDetails->getPicture() ?>" alt="">
    <div class="card col-8">
        <div class="col-12 radius-card">
       
            <div class="card-body">

                <h2 class="card-title white-text"><?= $productDetails->getName() ?></h2>
                
                

                <div class="">              
                    <p class="text-muted text-sm mb-1 "><?= $productDetails->getDescription() ?></p>        
                    
                </div>                
            </div>


            
        </div>
        
        <form class="product-action-buttons" action="" method="POST">
           
           <input type="hidden" name="name" value="<?=  $productDetails->getName() ?>">
           <input type="hidden" name="picture" value="<?=  $productDetails->getPicture() ?>">
           <input type="hidden" name="price" value="<?=  $productDetails->getPrice() ?>">
           <input type="hidden" name="quantity" value="1">
           <input type="hidden" name="id" value="<?=  $productDetails->getId() ?>">
         
          
           <div class="product-action-buttons text-center m-4"> 
               <span class="font-weight-bold h4"><?= number_format($productDetails->getPrice(), 2, ',', ' ') ?> €</span>
               <button class="btn btn-success" name="addCartSession" type="submit">Ajouter au panier</button>
            </div>
        
           
         </form>
        
                <!-- <div class="product-action-buttons text-center m-4">            
                <span class="font-weight-bold h4 p-3"><:?= $productDetails->getprice() ?>€</span>
                   
                    <a href="" class="btn btn-primary btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></a>
                    <button class="btn btn-primary" name="addCartSession" type="submit">Ajouter au panier</button>
                </div>
         -->
    </div>
</div>
<?php endforeach ?>

