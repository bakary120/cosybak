 <?php 
  if(!isset($_SESSION)) {
    session_start();
 }
 if(!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = []; 
  }

    // session_start();

    // Notre formulaire, il a un bouton qui a pour name 'addCartSession'
// On a fait une condition, si dans notre tableau $_POST (ce qu'on récupère de notre formulaire 'addCartSesssion')
// on récupère bien la clé 'addCartSession',
if (isset($_POST['addCartSession'])) {
    // si notre tableau de $_SESSION est vide à l'index 'cart'
    if (empty($_SESSION['panier'])) {
        // on initialise le tableau à vide
        $_SESSION['panier'] = array();
    }
    // sinon on va remplir notre tableau de $_SESSION
    // avec le tableau récupérer du formulaire en POST à l'aide de la variable globale PHP $_POST
    // $_SESSION['panier'][] = $_POST;
    $_SESSION['panier'][] = $_POST;
    

    
    // diff de vide
    // if (!empty($_SESSION['panier'])) { 
    //     $_SESSION [ 'panier' ][$_POST [ 'id' ]]['quantity']++; 
    // } else { 
    //     $_SESSION [ 'panier' ][$_POST [ 'id' ]]['quantity'] = 1; 
    // } 
   

    // On redirige vers la page category.php (page permettant d'afficher tous les produits)

    header('Location:panier');

   
}




// if (isset($_SESSION['panier'][$_POST['id']])) {
//     $_SESSION['panier'][intval($_POST['id'])]['quantity']++;

// }

// Si le tableau $_GET contient la clé plus
if (isset($_POST['plus'])) {
    // Dans le tableau session à la clé cart
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
        // Dans le tableau session à la clé cart
        // puis à la clé récupérer du formulaire avec
        // $_POST pour l'input ayant le name id
        // puis dans la clé quantity
        // on décrémente la valeur atteinte de -1
        $_SESSION['panier'][intval($_POST['id'])]['quantity']--;
    }

    header('Location:panier');
}

if (!empty($_GET['videPanier'])) {
                     
  
    
     unset($_SESSION["panier"]) ;
     header('Location:panier');
  }

