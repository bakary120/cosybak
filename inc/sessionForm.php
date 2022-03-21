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
//  $_SESSION['panier'][] = $_POST; 
       

    // sinon on va remplir notre tableau de $_SESSION
    // avec le tableau récupérer du formulaire en POST à l'aide de la variable globale PHP $_POST 
        $_SESSION['panier'][] = $_POST;
       
    // if (empty($_SESSION['panier'])) {
        // $_SESSION['panier'][intval($_POST['id'])]['quantity']++;  

            
    // }
      
    // On redirige vers la page panier.tpl.php
    header('Location:panier');   
}





// Si le tableau $_GET contient la clé plus
if (isset($_POST['plus'])) {
    // Dans le tableau session à la clé panier
    // puis à la clé récupérer du formulaire avec
    // $_POST pour l'input ayant le name id
    // puis dans la clé quantity
    // on incrémente la valeur atteinte de +1
    $_SESSION['panier'][intval($_POST['id'])]['quantity']++;

    // On redirige vers la page cart.php (page permettant d'afficher le panier)
    header('Location:panier');
}

// Si le tableau $_GET contient la clé moins
if (isset($_POST['moins'])) {
    // Si la quantité est plus grande que 1
    if($_SESSION['panier'][intval($_POST['id'])]['quantity'] > 1) {
        // Dans le tableau session à la clé panier
        // puis à la clé récupérer du formulaire avec
        // $_POST pour l'input ayant le name id
        // puis dans la clé quantity
        // on décrémente la valeur atteinte de -1
        $_SESSION['panier'][intval($_POST['id'])]['quantity']--;
    }

    header('Location:panier');
}

if (!empty($_GET['keyCartDelete'])) {
                     
    unset($_SESSION['panier'][$_GET['keyCartDelete']]);   
//    unset($_SESSION["panier"]) ;
    

  }

if (!empty($_GET['videPanier'])) {
   unset($_SESSION["panier"]) ;
   header('Location:panier');
   

}

//   unset($_SESSION["panier"]) ;


