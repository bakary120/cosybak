<!-- <:?php
if(isset($_POST['connexion'])){
    if (!empty($_POST['email']) AND !empty($_POST['password'])) {
      $email_par_defaut = "admin";
      $password_par_defaut = "admin0000";

      $email_saisi = htmlspecialchars($_POST["email"]);
      $password_saisi = htmlspecialchars($_POST["password"]);

      if ($email_saisi ==  $email_par_defaut AND  $password_saisi ==  $password_par_defaut) {
         return
      }else{
          alert("votre mot de passe ou email est incorrect");
      }
    }else{
        alert("veuiller compléter tous les champs..");
    }
}
?> -->
<div>
    <p>welcome Adm</p>
</div>