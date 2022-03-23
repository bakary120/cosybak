<?php

class ConnexionController extends MainController
{
    public function index()
    {
        
                $DBCon = new DBData();
                $typeList = $DBCon->getType(); 
                $categoryList = $DBCon->getCategory();

            if (!empty($_POST)){
                $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
                
                if(!is_string($login)) {
                    $_SESSION['login'] = $login;
                }
            } else { 
                $login = [];
                return $this->show('connexion', [
                    'types' => $typeList,
                    'categories' => $categoryList,
                    'login' => $login
                    ]);
            }


         

        if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
            $errors = [];
           
        //    en cas sesion return l'accueil 
            return $this->show('home', [
                'types' => $typeList,
                'categories' => $categoryList,
                'login' => $login
            ]);
        }
         else { 
            echo "<script>alert(\"votre email ou mot de passe  est incorrect\")</script>";
            // echo "votre email ou mot de passe administrateur est incorrect" ; 
            return $this->show('connexion', [
                'types' => $typeList,
                'categories' => $categoryList,
                'login' => $login
                ]);
           
           
        }



     
      
    }

  
}
