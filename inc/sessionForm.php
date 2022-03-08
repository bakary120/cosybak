 <?php 

if(!isset($_SESSION)) {
    session_start();
 } if (empty($_SESSION['panier'])) {
        // on initialise le tableau à vide
        $_SESSION['panier'] = array();
    }

// Notre formulaire, il a un bouton qui a pour name 'addCartSession'
// On a fait une condition, si dans notre tableau $_POST (ce qu'on récupère de notre formulaire 'addCartSesssion')
// on récupère bien la clé 'addCartSession',
if (isset($_POST["addCartSession"])) {
    // si notre tableau de $_SESSION est vide
    // if(isset($_SESSION['panier'])) {
    //     $_SESSION['panier'] = array(); 
    // }

  
    // if (empty($_SESSION['panier'])) {
    //     // on initialise le tableau à vide
    //     $_SESSION['panier'] = array();
    // }

    // sinon on va remplir notre tableau de $_SESSION
    // avec le tableau récupérer du formulaire en POST à l'aide de la variable globale PHP $_POST
    // $_SESSION['panier'][] = $_POST;

    if (!empty($_SESSION['panier'])) {
        $_SESSION['panier'][intval($_POST['id'])]['quantity']++;
    }else {
        $_SESSION['panier'][intval($_POST['id'])]['quantity'] =1;
    }
    

    
  

    // On redirige vers la page category.php (page permettant d'afficher tous les produits)
    header('Location:panier');
}




// Si le tableau $_GET contient la clé plus
if (isset($_POST["plus"])) {
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

    header('Location: panier');
}

if (!empty($_GET['keyCartDelete'])) {
                     
    unset($_SESSION['panier'][$_GET['keyCartDelete']]);
    //  unset($_SESSION["panier"]) ;

  }
  

//   if(isset($_SESSION['panier'])) {
//     $item_array_id = array_column($_SESSION["panier"],"item_id");

//     if (!in_array($_GET["id"], $item_array_id)) {
//        $count = count($_SESSION['panier']);
//        $item_array = array(
//         'item_id' => $_POST['id'],
//         'item_name' => $_POST['name'],
//         'item_picture' => $_POST['picture'],
//         'item_price' => $_POST['price'],
//         'item_quantity' => $_POST['quantity']
//        );
//        $_SESSION['panier'][$count] = $item_array;

//     }else {
//         echo '<script>alert("item already added")</script>';
//         echo '<script>window.location="home.php"</script>';
//     }
    
// }else {
//     $item_array = array(
//         'item_id' => $_POST['id'],
//         'item_name' => $_POST['name'],
//         'item_picture' => $_POST['picture'],
//         'item_price' => $_POST['price'],
//         'item_quantity' => $_POST['quantity']
        
    
//     );
//     $_SESSION["panier"][0] = $item_array;

// }