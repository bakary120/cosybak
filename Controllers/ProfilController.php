<?php


class ProfilController extends MainController
{
   
    public function index()
    {
     
        $DBCon = new DBData();
        

        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();
        $categorytype = $DBCon->getCategorys('category_id'); 
           
        // if(!empty($_SESSION['login'])){ 

        //         if (!empty($_POST['email']) && !empty($_POST['password'])){
        //             $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
        //             $typeList = $DBCon->getType();   

        //             $_SESSION['login'] = $login;

                
        //         } else { 
        //             $login = [];
        //         }

                return $this->show('profilmembre', [  
                    'types' => $typeList,
                'categoryType' => $categorytype,
                'categories' => $categoryList,
                'login' => $_SESSION['login']
            
    
                ]);
        // }    
      
        
      

    }
}