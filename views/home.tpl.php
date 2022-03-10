
  <section >

<div class="container-fluid">

  <div class="row mx-0">
  <?php foreach($viewVars['categories'] as $category) : ?>
    <div class="col-md-4"  style="margin-bottom: 8rem;">
    <a class="opacity-link" href="./category?category_id=<?= $category->getId() ?>">
      <div style="box-shadow: 2px 5px 5px 3px rgb(49, 199, 101);
        border-radius: 2px;" class="card border-0 text-white text-center ">
        <img src="images/<?= $category->getNumero() ?>.png"
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
    
  </div>
  

</div>

</section>


  <div >
  <div >
      <p>Bonjour <span><?= $_SESSION['login']->getFirstname()?></span></p>
     
  </div>
  <div>        
    <a href="profil?userId=<?=  $_SESSION['login']->getId() ?>" class="fa fa-user">__PROFIL</a>
    <a href="logout">
    <input type="button" id="button" value="Déconnexion"></a>
  </div>
</div>

 




