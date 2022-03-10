
<?php

// La classe HomeController est étendue par MainController
// De ce fait, HomeController, hérite de toutes les propriétés
// et toutes les méthodes de la classe MainController
class ConnexionController extends MainController
{
    public function index()
    {
        $DBCon = new DBData();

        
        $typeList = $DBCon->getType();

        
        // $login = NULL;
        if (!empty($_POST)){
                $login = $DBCon->login_connect($_POST['login_email'], $_POST['password']);
                
                if(!is_string($login)) {
                    $_SESSION['login'] = $login;
                }
            } else { 
                $login = [];
            }
       
        // La fonction show est executé depuis MainController

        // if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
           
        //     $quizzList = $DBCon->getAllQuizzes();
        //     return $this->show('accueilMembre', 'headerMembre',[
        //     'quizzes' => $quizzList,
        //     'login' => $login
        //     ]);
        // } else { header('Location: accueil'); }

        return $this->show('connexion', [  
            
            'connexion' => $login,
            'types' => $typeList,

            
        ]);
        
    }
}