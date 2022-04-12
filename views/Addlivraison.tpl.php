
<section class="hero">
    <div class="container">
        
        <ol class="breadcrumb justify-content-center">
          
          <li class="breadcrumb-item active h3">Adresse de Livraison</li>
        </ol>
    </div>
    </section>
    <br><br><br>
    <!-- <:?= var_dump($_SESSION['login'])?> -->
  <section class="text-center">
      <div class="container">
        <!-- tableau form et total -->
        <div class="row mb-5"> 
          <!-- form -->
          <div class="col-lg-4">
            <div class="cart">
              <div class="cart-wrapper">
             <div class="cart-header ">

           
               <form action="" method="POST">
              <div class="row bg-white p-2 border border-success rounded h4">
             <div class="d-flex justify-content-center">
              
             <div class="form-group ">
                <div class="col-sm-9 ">
                <?=  $_SESSION['login']->getLastname() ?>
                <input type="hidden" name="lastnameLiv" class="form-control " value="<?=  $_SESSION['login']->getLastname() ?>" />
                

                </div>
                
                <!-- <label class="col-sm-3 control-label" for="">Nom</label> -->
              </div>
              
              <div class="form-group">
                <div class="col-sm-9">
                <input type="hidden" name="firstnameLiv" class="form-control " value="<?=  $_SESSION['login']->getFirstname() ?>" />
                <?=  $_SESSION['login']->getFirstname() ?>
                </div>               
              </div>
             </div>
                          
              <div class="form-group">
                <div class="col-sm-11">
                <?=  $_SESSION['login']->getNumero() ?>
                <input type="hidden" name="numeroLiv" class="form-control " value="<?=  $_SESSION['login']->getNumero() ?>" />
                </div>               
              </div>

              <div class="form-group">
                <div class="col-sm-11">
                <input type="hidden" name="emailLiv" class="form-control " value="<?=  $_SESSION['login']->getEmail() ?>" />
                <?=  $_SESSION['login']->getEmail() ?>
                </div>               
              </div>

              <div class="address">
        						<div class="form-group">
        							<label class="col-sm-8 control-label">Address</label>
        							<div class="col-sm-12">
        								<input type="hidden" name="adressLiv" class="form-control" value="<?=  $_SESSION['login']->getAdress() ?>">
                        <?=  $_SESSION['login']->getAdress() ?>  <?=  $_SESSION['login']->getCodepostal() ?> <?=  $_SESSION['login']->getVille() ?>
        							</div>
        						</div>

        						<div class="form-group">        					
        							<div class="col-sm-10">
                      
        								<input type="hidden" name="codepostalLiv" class="form-control" value="<?=  $_SESSION['login']->getCodepostal() ?>">
        							</div>
        						</div>

        						<div class="form-group">        							
        							<div class="col-sm-10">
                      
        								<input type="hidden" name="villeLiv" class="form-control" value="<?=  $_SESSION['login']->getVille() ?>">
        							</div>
        						</div>
        				</div>
        				
                  </div>
                 
        </div>

                
              </div>
            </div>


           
          </div>

          

          <!-- ss total total tva paiement -->

          <div class="col-lg-4 hidden-center mt-5 text-center">
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
               <li class="order-summary-item hidden-secondary"><span>Sous total :</span><span><?= $total ?>€</span></li>
                  <li class="order-summary-item hidden-secondary"><span>Livraison:</span><span><?= $delivery ?>€</span></li>
              <li class="order-summary-item hidden-secondary"><span>TVA (20%):</span><span><?= $total*20/100 ?></span></li>
              <li class="order-summary-item border-0 "><strong class="order-summary-total"><span>TOTAL(TTC)</span><br><?= $total+($total*20/100) ?>€</strong></li>
            </ul>
            <!-- <a href="" class="btn btn-warning">Procéder au paiement(<:?= count($_SESSION['panier']) ?>article) <i class="fa fa-chevron-right"></i></a>
            <input type="hidden" name="totalLiv" class="form-control" value="<:?= $total+($total*20/100) ?>"> -->

            <button name= "paiement" class="btn btn-warning " type="submit">
            Procéder au paiement(<?= count($_SESSION['panier']) ?>article)>>
           
            </button>

          </div>
          </form>
         

          </div>

        </div>
      </div>
    </section> 



   
   
   






