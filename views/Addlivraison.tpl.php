<section class="hero">
    <div class="container">
        
        <ol class="breadcrumb justify-content-center">
          
          <li class="breadcrumb-item active h3">Livraison</li>
        </ol>
    </div>
    </section>
    <br><br><br>
  <section>
      <div class="container">
        <div class="row mb-5"> 
          <div class="col-lg-8 ">
            <div class="cart">
              <div class="cart-wrapper">
    <div class="cart-header ">
         <div class="row">
             <div class="d-flex">
             <div class="form-group">
                <div class="col-sm-10">
                <input type="text" name="lastname" class="form-control " placeholder="nom" />
                </div>
                
                <!-- <label class="col-sm-3 control-label" for="">Nom</label> -->
              </div>

              <div class="form-group">
                <div class="col-sm-10">
                <input type="text" name="firstname" class="form-control " placeholder="Prénom" />
                </div>               
              </div>
             </div>
                          
              <div class="form-group">
                <div class="col-sm-10">
                <input type="text" name="numero" class="form-control " placeholder="numero" />
                </div>               
              </div>

              <div class="address">
        						<div class="form-group">
        							<label class="col-sm-3 control-label">Address</label>
        							<div class="col-sm-10">
        								<input type="text" class="form-control" placeholder="Address">
        							</div>
        						</div>

        						<div class="form-group">        					
        							<div class="col-sm-10">
        								<input type="text" class="form-control" placeholder="code/Postal">
        							</div>
        						</div>

        						<div class="form-group">        							
        							<div class="col-sm-10">
        								<input type="text" class="form-control" placeholder="ville">
        							</div>
        						</div>
        				</div>
        				
                  </div>
        </div>

                
              </div>
            </div>


           
          </div>

          

          <div class="col-lg-4 p-2 text-center mt-5">
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
            <a href="" class="btn btn-warning">Procéder au paiement(<?= count($_SESSION['panier']) ?>article) <i class="fa fa-chevron-right"></i></a>
          </div>

         

          </div>

        </div>
      </div>
    </section> 


   
   






