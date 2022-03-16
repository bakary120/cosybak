
<?php

// La classe HomeController est étendue par MainController
// De ce fait, HomeController, hérite de toutes les propriétés
// et toutes les méthodes de la classe MainController
class ConnexionController extends MainController
{

    public function index(){
        $DBCon = new DBData();
        $typeList = $DBCon->getType(); 
        $categoryList = $DBCon->getCategory();


        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
            $typeList = $DBCon->getType();   

            $_SESSION['login'] = $login;
            return $this->show('home', [  
                'types' => $typeList,
                'categories' => $categoryList,
            ]);
        } else { 
            $login = [];
        }

        return $this->show('connexion', [  
            'types' => $typeList,
            'categories' => $categoryList,
  
        ]);
    }
    
}