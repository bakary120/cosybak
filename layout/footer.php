

<footer class="main-footer">
    <!-- footer livraison cdt retour -->
    <div id="footer-services" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 service-column">
            <i class="fa fa-truck"></i>
            <div class="service-text">
              <h6 class="text-uppercase">Livraison et retour gratuit</h6>
              <p class="text-muted font-weight-light text-sm mb-0">Livraison gratuite à partir de 60€</p>
              <h6 class="text-uppercase">Satisfait ou remboursé</h6>
              <p class="text-muted font-weight-light text-sm mb-0">30 jours pour renvoyer</p>
            </div>
          </div>
         
          <div class="col-lg-4 service-column">
            <i class="fa fa-phone"></i>
            <div class="service-text">
              <h6 class="text-uppercase">06 27 28 09 90</h6>
              <p class="text-muted font-weight-light text-sm mb-0">Joignable 24/7</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div id="footer-menu" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">cosybak</div>         
         </div>


          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Produits</h6>
            <ul class="list-unstyled">
              <!-- parcourir les produits -->
              <li> <a href="#" class="text-muted"></a></li>              
            </ul>            
          </div>

          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Réseaux Sociaux</h6>


            <ul class="list-unstyled">
                <!-- twitter -->
                <li class="list-inline-item">
                <a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>

             
               <!-- insta -->
               <li class="list-inline-item">
                <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                <i class="fa-brands fa-tiktok"></i>
                </a>
              </li>
              
              <li class="list-inline-item">
                <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
              
            </ul>
          </div>


          
          <div class="col-lg-4">
            <h6 class="text-uppercase text-dark mb-3">Recevez nos offres promotionnelles</h6>           
            <form action="#" id="newsletter-form">
              <div class="input-group mb-3">
                <input type="email" placeholder="Votre adresse email" class="form-control bg-transparent border-secondary border-right-0">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-secondary border-left-0"><i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Copyright -->
    <div id="footer-copyright" class="py-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left">
            <p class="mb-md-0">© 2022 cosybak. Tous droits réservés.</p>
          </div>
          <div class="col-md-6">
            <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
              <li class="list-inline-item">
                <img src="<?= pathUrl().'images/visa.svg'?>" alt="..." class="payment-icon">
              </li>
              <li class="list-inline-item">
                <img src="<?= pathUrl().'images/mastercard.svg'?>" alt="..." class="payment-icon">
              </li>
              <li class="list-inline-item">
                <img src="<?= pathUrl().'images/paypal.svg'?>" alt="..." class="payment-icon">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
  <!-- JS -->
  <script src="<?= pathUrl().'html/js/jquery.min.js'?>"></script>
  <script src="<?= pathUrl().'html/js/popper.min.js' ?>"></script>
  <script src="<?= pathUrl().'html/js/bootstrap.min.js' ?>"></script>
  <script src="<?= pathUrl().'html/js/owl.carousel.min.js' ?>"></script>
  <script src="<?= pathUrl().'html/js/app.js'?>"></script>
</body>

</html>