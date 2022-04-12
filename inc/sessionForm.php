 <?php 
  if(!isset($_SESSION)) {
    session_start();
 }
 if(!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = []; 
  }
 
 
    // formulaire avec le bouton qui a pour name 'addCartSession'
// on verifie (ce qu'on récupère de notre formulaire 'addCartSesssion')
// on récupère bien la clé 'addCartSession',
if (isset($_POST['addCartSession'])) {

   
    // sinon on va remplir notre tableau de $_SESSION
    // avec le tableau récupérer du formulaire en POST à l'aide de la variable globale PHP $_POST 
       
       
    if (!empty($_SESSION['panier'])) {
        $test= false;
        for ($i=0; $i < count($_SESSION['panier']) ; $i++) { 

            if ($_SESSION['panier'][$i]['id'] == $_POST['id']) {
                $_SESSION['panier'][$i]['quantity']= $_SESSION['panier'][$i]['quantity']+1 ; 
                $test=true; 
            }
           
        }
        if ($test==false) {
            $_SESSION['panier'][] = $_POST;

        }
        
    }
    else {
        $_SESSION['panier'][] = $_POST;
    }
      
    // On redirige vers la page panier.tpl.php
    header('Location:panier');   
}





// Si le tableau $_GET contient la clé plus
if (isset($_POST['plus'])) {
    // on incrémente la valeur atteinte de +1
    $_SESSION['panier'][intval($_POST['id'])]['quantity']++;

    // On redirige vers la page cart.php (page permettant d'afficher le panier)
    header('Location:panier');
}

// Si le tableau $_GET contient la clé moins
if (isset($_POST['moins'])) {
    // Si la quantité est plus grande que 1
    if($_SESSION['panier'][intval($_POST['id'])]['quantity'] > 1) {
        // on décrémente la valeur atteinte de -1
        $_SESSION['panier'][intval($_POST['id'])]['quantity']--;
    }

    header('Location:panier');
}

// supp des produits
if (!empty($_GET['keyCartDelete'])) {

     if (count($_SESSION['panier']) > 1 ) {
        for ($i=0; $i < count($_SESSION['panier']) ; $i++) { 
            if ($_GET['keyCartDelete'] == $_SESSION['panier'][$i]['id']) {
             unset($_SESSION['panier'][$i]); 
            }
         }
     }else {
        unset($_SESSION['panier']);
        header('Location:panier'); 
     }
   
  
}

if (!empty($_GET['videPanier'])) {
   unset($_SESSION["panier"]) ;
   header('Location:panier');
   

}




