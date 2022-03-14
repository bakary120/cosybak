
<?php

// La classe HomeController est étendue par MainController
// De ce fait, HomeController, hérite de toutes les propriétés
// et toutes les méthodes de la classe MainController
class ConnexionController extends MainController
{

    public function index(){
        $DBCon = new DBData();
        $typeList = $DBCon->getType();       

        return $this->show('connexion', [  
            'types' => $typeList,
            
           
            
        ]);
    }
    public function login()
    {
        // $DBCon = new DBData();

        
        // $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
       

        
        // // // $login = NULL;
        // if (!empty($_POST)){
        //         $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
                
        //         if(!is_string($login)) {
        //             $_SESSION['login'] = $login;
        //         }
        //     } else { 
        //         $login = [];
        //     }
       
      

        // if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
           
        //     $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
        //     return $this->show('connexion',[
            
        //     'connexion' => $login
        //     ]);
        // } else { header('Location: connexion'); }


        // return $this->show('home', [  
            
        //     'home' => $login,
        //     // 'types' => $typeList,

            
        // ]);
        
    }
   
}