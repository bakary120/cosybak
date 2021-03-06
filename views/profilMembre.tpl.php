

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>           
            <?php if (!empty($_SESSION['login'])): ?>
            <li class="breadcrumb-item active" aria-current="page"><?=  $_SESSION["login"]->getLastname() ?></li>           
            <?php endif; ?>

          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">

            
            <h5 class="my-3"><?=  $_SESSION["login"]->getFirstname() ?> <?=  $_SESSION["login"]->getLastname() ?></h5>
            <p class="text-muted mb-1"><?=  $_SESSION["login"]->getEmail() ?></p>           
            <div class="d-flex justify-content-center mb-2">
            <a href="modif?userId=<?=  $_SESSION["login"]->getId() ?>" >
            <button type="button" class="btn btn-primary">Modifier Profil</button> 
          </a>
            
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Commandes en Cours</p>
              </li>
              
            </ul>
          </div>
        </div>
      </div>

      <!-- parti 2 detail compte et historique des commandes -->
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=  $_SESSION["login"]->getFirstname() ?> <?=  $_SESSION["login"]->getLastname() ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=  $_SESSION["login"]->getEmail() ?></p>
              </div>
            </div>
            <hr>
           
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">poissy</p>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Vos commandes</span></p>
                <p class="mb-1" style="font-size: .77rem;">commande 1</p>
                <div>
                  <div > detail de la commande</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">commande 2</p>
                <div>
                  <div > detail de la commande</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">commande 3</p>
                <div>
                  <div > detail de la commande</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">commande 4</p>
                <div>
                  <div > detail de la commande</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">commande 5</p>
                <div>
                  <div > detail de la commande</div>
                </div>
              </div>
            </div>
          </div>


       
      


        </div>
      </div>
    </div>
  </div>
</section>


