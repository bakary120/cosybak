<?php


class InscriptionController extends MainController
{
   
    public function index()
    {
        $DBCon = new DBData();
        $typeList = $DBCon->getType();  
        $categoryList = $DBCon->getCategory();

        
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
        

        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])){
        $typeList = $DBCon->getType();   
           
            return $this->show('formulaire_insc', [
                
                'insc' => $inscription,
                'newUser' => $newUser,
                'login' => $login,
            'types' => $typeList

            ]);
        } else {
            
            return $this->show('home',[
            
            'insc' => $inscription,
            'newUser' => $newUser,
            'login' => $login,
            'types' => $typeList,
            'categories' => $categoryList,


            ]);
        }

       
    }

   
            
        
}


