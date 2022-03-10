<section class="vh-100  ">
  <div class="container py-2 h-100 bg-ligth" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-white font-weight-bold bg-success " style="border-radius: 1rem; ">
          <div class="card-body p-2 text-center">
  <!-- <:?= var_dump($_SESSION['login']) ?> -->
  <!-- <:?= session_unset() ?> -->

            <div class="mb-md-5 mt-md-4 pb-5">

              <form action="" method="POST" autocomplete="off">
              <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
              <p class="text-white-50 mb-5">Veuillez entrer votre identifiant et votre mot de passe !</p>

              <div class="form-outline form-white mb-4">
                <input type="email" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Mots de passe oublie?</a></p>

              <button name= "connexion" class="btn btn-outline-light btn-lg px-5" type="submit">Connexion</button>

              </form>
             
             
            </div>

            <div>
              <p class="mb-0">vous-avez pas de compte? <a href="#!" class="text-white-50 fw-bold">S'inscrire</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

