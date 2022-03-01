<section >

    <div class="container-fluid">
    
      <div class="row mx-0">
      <?php foreach($viewVars['categories'] as $category) : ?>
        <div class="col-md-4" style="margin-bottom: 8rem;">
        <a class="opacity-link" href="./category?category_id=<?= $category->getId() ?>">
          <div class="card border-0 text-white text-center "><img src="images/<?= $category->getNumero() ?>.png"
              alt="<?= $category->getName() ?>" class="card-img ">
            <div class="card-img-overlay d-flex align-items-center ">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4"> <?= $category->getName() ?></h2><a href="./category?category_id=<?= $category->getId() ?>" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
          </a>
        </div>
       
        <?php endforeach; ?>
        <!-- <div class="col-md-4">
          <div class="card border-0 text-white text-center"><img src="images/tisanes.jpg"
              alt="Card image" class="card-img opacity-75">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4">Tisanes</h2><a href="#" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-white text-center"><img src="images/infusion.jpg"
              alt="Card image" class="card-img ">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4">Infusion</h2><a href="#" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      
      <!-- <br>
      <br>
      <br> -->

      <!-- <div class="row mx-0"> 
                  
        
      <div class="col-md-4">
          <div class="card border-0 text-white text-center"><img src="images/coffret.png"
              alt="Card image" class="card-img opacity-50">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4 text-body">Coffret</h2><a href="#" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-white text-center"><img src="images/bienEtreDetox.png"
              alt="Card image" class="card-img opacity-50">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4 text-body">Bien-être-détox</h2><a href="#" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-white text-center "><img src="images/accessoiresThe.png"
              alt="Card image" class="card-img opacity-50">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4 text-body">accessoires thés</h2><a href="#" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
        </div> -->
      
      <!-- <br> <br> <br>
      <div class="container d-flex h-100">
      <div class="row mx-0">
      <div class="col-md-10">
          <div class="card border-0 text-white text-center"><img src="images/theEnfant.png"
              alt="Card image" class="card-img opacity-75">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-6 font-weight-bold mb-4 text-body">Infusions-Enfants</h2><a href="#" class="btn btn-primary">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div> -->
    </div>
    
  </section>
