

          
         
<?php foreach($viewVars['Modifproduit'] as $modifproduit) : ?>
<div class="row justify-content-center">
    <img class="col-4" src="<?= $modifproduit->getPicture() ?>" alt="">
    <div class="card col-3 pt-4">
        
        <div class="col-12 radius-card">
                <form class="form-group" action="" method="POST">
                
                        <div class="form-outline form-white mb-4">
                                <input type="text" name="news-name" class="form-control form-control-lg" value="<?= $modifproduit->getName() ?>" />
                                <label class="form-label" for="">Nom du produit</label>
                        </div>
        
                        <div class="form-outline form-white mb-4">
                                <input type="text" name="news-description" class="form-control form-control-lg" value="<?= $modifproduit->getDescription() ?>" />
                                <label class="form-label" for="">Description</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                                <input type="text" name="news-price" class="form-control form-control-lg" value="<?= $modifproduit->getPrice() ?>"  />
                                <label class="form-label" for="">Prix</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                                <input type="text" name="news-picture" class="form-control form-control-lg" value="<?= $modifproduit->getPicture() ?>" />
                                <label class="form-label" for="">lien-images</label>
                        </div>
                
                
                
                        <input type="hidden" name="id" value="<?=  $modifproduit->getId() ?>">
                        
                        
                        <div class="product-action-buttons text-center m-4"> 

                        <!-- <input class="btn btn-success rounded" type="submit"  value="Modifier"> -->
                        <!--  formaction="modifProduit?product_id=<:?=  $modifproduit->getId() ?> "-->
                        <input class="btn btn-success rounded" formaction=""
                                type="submit"  value="Modifier" name="Modifier">

                              

                         <input class="btn btn-warning rounded" formaction="adm" 
                                type="submit" value="Annuler la modification">

                            
                        </div>
                 
                
                </form>
                <!-- <:?php 
        if (!empty($_POST['news-name']) && !empty($_POST['news-description']) && !empty($_POST['news-picture'])  && !empty($_POST['news-price'])){
                $_SESSION['']->setName($_POST['news-name']);
                $_SESSION['']->setDescription($_POST['news-description']);
                $_SESSION['']->setPicture($_POST['news-picture']);
                $_SESSION['']->setPrice($_POST['news-price']);
        
        //   header('Location: adm');
        }
        ?> -->
            
        </div>
        
        
     

               
    </div>
</div>
<?php endforeach ?>

   
           
            



