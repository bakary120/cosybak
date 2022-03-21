
 
<!-- <div class="container">
       

        <form action="" id="inscription-form" method="POST" autocomplete="off">
            <input class="control-control" id="id_nom" name="new-nom" type="text" placeholder="Nom"> 
            <input class="control-control" id ="id_prenom" name="new-prenom" type="text" placeholder="Prénom"> <br>
            <input class="control-control" id="id_adr_mail" name="new-adr_mail" type="email" placeholder="E-mail"> 
            <input class="control-control" id="id_mdp" name="new-mdp" type="text" placeholder="Mot de passe"> <br>
            <input class="btn" formaction="modif?userId=<?=  $_SESSION['login']->getId() ?>"
            type="submit" style="color:red;" id="Modifier" value="Modifier">  
            <input class="btn" formaction="profil?userId=<?= $_SESSION['login']->getId() ?>" 
            type="submit" style="color:red;" id="Annuler" value="Annuler">
        </form>

        <:?php 
        if (!empty($_POST['new-nom']) && !empty($_POST['new-prenom']) && !empty($_POST['new-adr_mail']) && !empty($_POST['new-mdp'])){
          $_SESSION['login']->setName($_POST['new-nom']);
          $_SESSION['login']->setFirstname($_POST['new-prenom']);
          $_SESSION['login']->setAdrMail($_POST['new-adr_mail']);
          $_SESSION['login']->setPassword($_POST['new-mdp']);
          header('Location: profil?userId='.$_SESSION['login']->getId().'');
        }
        ?>

</div>               -->


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?=  $_SESSION['login']->getFirstname() ?></span><span class="text-black-50"><?=  $_SESSION['login']->getEmail() ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Modifier Profile</h4>
                </div>

                   <form action="" id="inscription-form" method="POST" autocomplete="off">

                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" placeholder="<?=  $_SESSION['login']->getFirstname() ?>"  name="new-nom" value=""></div>
                    
                    <div class="col-md-6"><label class="labels">Prénom</label><input type="text" class="form-control" value="" placeholder="<?=  $_SESSION['login']->getLastname() ?>" name="new-prenom" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="<?=  $_SESSION['login']->getEmail() ?>" value="" name="new-adr_mail" ></div>
                    <div class="col-md-12"><label class="labels">Mobile</label><input type="text" class="form-control" placeholder="enter votre numero" value=""></div>
                    <div class="col-md-12"><label class="labels">Addresse</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Code postale</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">ville</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
             <div class="mt-5 text-center">
               <!-- <button class="btn btn-primary profile-button" type="button">Modifier</button> -->
               <input class="btn-primary profile-button rounded" formaction="modif?userId=<?=  $_SESSION['login']->getId() ?>"
            type="submit"  value="Modifier">  
            <input class="btn-danger profile-button rounded" formaction="profilmembre?userId=<?= $_SESSION['login']->getId() ?>" 
            type="submit" value="Annuler">
              </div>

            
             </form>


              <?php 
        if (!empty($_POST['new-nom']) && !empty($_POST['new-prenom']) && !empty($_POST['new-adr_mail'])){
          $_SESSION['login']->setLastame($_POST['new-nom']);
          $_SESSION['login']->setFirstname($_POST['new-prenom']);
          $_SESSION['login']->setEmail($_POST['new-adr_mail']);
        //   $_SESSION['login']->setPassword($_POST['new-mdp']);
          header('Location: profil?userId='.$_SESSION['login']->getId().'');
        }
        ?>


            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>
