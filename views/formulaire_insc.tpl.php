
<section class="vh-100  ">
  <div class="container py-2 h-100 bg-ligth" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-black  bg-success " style="border-radius: 1rem; ">
          <div class="card-body p-2 text-center">

 <!-- <;?php 
 if (!empty($_POST)) 
        {

            $errors = array();
          // eviter caract speciaux sur le nom
            if (empty($_POST['lastname']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['lastname']))
            {
              $errors['lastname'] = "Votre Nom n'est pas valide (alphanumérique)";
                
            }
            if (empty($_POST['firstname']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['firstname']))
            {
              $errors['firstname'] = "Votre PreNom n'est pas valide (alphanumérique)";
                
            }
            // verifie l'email si filter ne valide pas l'email 
            if (empty($_POST['email']) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
            {
              $errors['email'] = "Votre email n'est pas valide";
                
            }
            if (empty($_POST['password']) || $_POST["password"] != $_POST["confirmPassword"])
            {
              $errors['password'] = "Votre mot de passe n'est pas valide";
                
            }


           
        }
  ?> -->
  <!-- <:?=print_r($errors)?> -->


            <div class="mb-md-5 mt-md-4 pb-5">

              <form action="" method="POST" autocomplete="off">
              <h2 class="fw-bold mb-2 text-uppercase">inscription</h2>
             
              <div class="form-outline form-white mb-4">
                <input type="text" name="lastname" class="form-control form-control-lg" />
                <label class="form-label" for="">Nom</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="firstname" class="form-control form-control-lg" />
                <label class="form-label" for="">Prénom</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Mot de passe</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="confirmPassword" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">confirmez le mot de passe</label>
              </div>

             

              <button name= "connexion" class="btn btn-outline-warning btn-lg px-5" type="submit">inscription</button>

              </form>
             
             
            </div>

            <div>
              <p class="mb-0">vous-avez dèja un compte <a href="connexion" class="text-white-50 fw-bold">connexion</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


