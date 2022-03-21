<?php


class InscriptionController extends MainController
{
   
    public function index()
    {
        $DBCon = new DBData();
        $typeList = $DBCon->getType();  
        $categoryList = $DBCon->getCategory();

        // si $post est different de vide
        if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])){
            $inscription = $DBCon->getInscription($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
            if ($inscription==true){
                $newUser = $DBCon->getinscription2($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
                $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
                $typeList = $DBCon->getType();   

                $_SESSION['login'] = $login;
            } else { 
                $newUser = []; 
            }
        } else { 
            $inscription = false;
            $newUser = [];
        }

     
       
            $login = [];
        
        // formulaire vide on retourne la page inscription
        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])){
        $typeList = $DBCon->getType();  
        $typeList = $DBCon->getType();  
        $categoryList = $DBCon->getCategory(); 
           
            return $this->show('formulaire_insc', [
                
                'insc' => $inscription,
                'newUser' => $newUser,
                'login' => $login,
            'categories' => $categoryList,
            'types' => $typeList

            ]);
        } else {
            // sinn on retourne a l'accueil 
            return $this->show('home',[
            
            'insc' => $inscription,
            'newUser' => $newUser,
            'login' => $login,
            'types' => $typeList,
            'categories' => $categoryList,


            ]);
        }

       
    }

    public function livraison()
    {
        $DBCon = new DBData();
        $typeList = $DBCon->getType();  
        $categoryList = $DBCon->getCategory();

        return $this->show('addlivraison',[
            
            
            'types' => $typeList,
            'categories' => $categoryList,


            ]);
            
        
    }
}


