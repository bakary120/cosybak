<?php

// La classe HomeController est étendue par MainController
// De ce fait, HomeController, hérite de toutes les propriétés
// et toutes les méthodes de la classe MainController
class ModifController extends MainController
{
     // La fonction de HomeController appartient à la classe
    // On appelle donc index() une méthode
    public function index()
    {
        // $DBCon stocke l'instanciation de la classe DBData
        // $DBCon est un objet créer à partir de la structure de la classe DBData
        // $DBCon me permet d'accéder aux propriétés et méthodes publique de la classe DBData
        $DBCon = new DBData();
        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();

        // $quizzList stocke la valeur retourner par la méthode get ()
        // donc, un tableau d'objet pour les catégories
        if (!empty($_POST) && !is_string($_SESSION['login'])){
            $ModifUser = $DBCon->getProfilModif($_GET['userId'], $_POST['new-nom'], $_POST['new-prenom'], $_POST['new-adr_mail'], $_SESSION['login']);
            // $_SESSION['login'] = $ModifUser;
            
        } else { 
            $ModifUser = [];
        }


        // $login = NULL;
        // La fonction show est executé depuis MainController
        
            return $this->show('modifMembre', [
                'login' => $ModifUser,
                'types' => $typeList,
                'categories' => $categoryList
            ]);

    
    }
}