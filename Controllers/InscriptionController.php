<?php


class InscriptionController extends MainController
{
   
    public function index()
    {
        $DBCon = new DBData();
        $typeList = $DBCon->getType();  
        $categoryList = $DBCon->getCategory();

        

        // si $post est different de vide ver tous les variable existe
        if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['numero']) && !empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['adress']) &&!empty($_POST['codepostal']) && !empty($_POST['ville'])){

            $inscription = $DBCon->getInscription($_POST['lastname'], $_POST['firstname'], $_POST['numero'], $_POST['email'], $_POST['password'], $_POST['adress'], $_POST['codepostal'], $_POST['ville']);


            if ($inscription==true){
                $newUser = $DBCon->getinscription($_POST['lastname'], $_POST['firstname'], $_POST['numero'], $_POST['email'], $_POST['password'], $_POST['adress'], $_POST['codepostal'], $_POST['ville']);
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
        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['numero'])  ||  empty($_POST['email']) || empty($_POST['password']) || empty($_POST['adress']) || empty($_POST['codepostal']) || empty($_POST['ville'])){
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
       
        if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
            
        
            //    en cas sesion return l'accueil 
            return $this->show('addlivraison',[
            
            
                'types' => $typeList,
                'categories' => $categoryList,
               
    
                ]);
        }
            else { 
                
                
                echo "<script>alert(\"veuiller vous connecter pour validé votre commande\")</script>";
                return $this->show('home',[
            
            
                'types' => $typeList,
                'categories' => $categoryList,
               
    
                ]);
                
            
            }
            
            

      
        
            
        
    }

}


