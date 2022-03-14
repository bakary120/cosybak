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

        // if (!empty($_POST['email']) && !empty($_POST['password'])){
        //     $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
        // $typeList = $DBCon->getType();   

        //     $_SESSION['login'] = $login;
        // } else { 
        //     $login = [];
        // }
       
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

        // return $this->show('formulaire_insc', [  
        //     'types' => $typeList,
            
           
            
        // ]);
    }

    // public function inscription()
    // {
    //     $DBCon = new DBData();
        // $typeList = $DBCon->getType();       
        // $inscription = $DBCon->getInscription($_POST['lastname'], $_POST['firstname'],$_POST['email'], $_POST['password']);

        // if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])){
        //     $inscription = $DBCon->getInscription($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
        //     if ($inscription==true){
        //         $newUser = $DBCon->getinscription2($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
        //         $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
        //         $_SESSION['login'] = $login;
        //     } else { 
        //         $newUser = []; 
        //     }
        // } else { 
        //     $inscription = false;
        //     $newUser = [];
        // }

        // if (!empty($_POST['email']) && !empty($_POST['password'])){
        //     $login = $DBCon->login_connect($_POST['login_email'], $_POST['password']);
        //     $_SESSION['login'] = $login;
        // } else { 
        //     $login = [];
        // }
       
        

        // if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])){
           
        //     return $this->show('formulaire_insc', [
                
        //         'insc' => $inscription,
        //         'newUser' => $newUser,
        //         'login' => $login
        //     ]);
        // } else {
            
        //     return $this->show('home',[
            
        //     'insc' => $inscription,
        //     'newUser' => $newUser,
        //     'login' => $login,
        //     ]);
        // } mmmmmmmmmarrwww
              
        // if (!empty($_POST)) 
        // {

        //     $errors = array();
        //   // eviter caract speciaux sur le firstname
        //     if (empty($_POST['lastname']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['lastname']))
        //     {
        //       $errors['lastname'] = "Votre firstname n'est pas valide (alphanumérique)";
                
        //     }
        //     if (empty($_POST['firstname']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['firstname']))
        //     {
        //       $errors['firstname'] = "Votre Prefirstname n'est pas valide (alphanumérique)";
                
        //     }
        //     // verifie l'email si filter ne valide pas l'email 
        //     if (empty($_POST['email']) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        //     {
        //       $errors['email'] = "Votre email n'est pas valide";
                
        //     }
        //     if (empty($_POST['password']) || $_POST["password"] != $_POST["confirmPassword"])
        //     {
        //       $errors['password'] = "Votre mot de passe n'est pas valide";
                
        //     }


           
        // }

        
      
        // return $this->show('home', [  
        //     'types' => $typeList,
        //     'inscription' => $inscription,
            
           
            
        // ]);
    }
// }

