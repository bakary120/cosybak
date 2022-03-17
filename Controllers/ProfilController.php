<?php


class ProfilController extends MainController
{
   
    public function index()
    {
     
        $DBCon = new DBData();
        

        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();
        $categorytype = $DBCon->getCategorys('category_id'); 
           
         
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $login = $DBCon->login_connect($_POST['email'], $_POST['password']);
            $typeList = $DBCon->getType();   

            $_SESSION['login'] = $login;
            return $this->show('profilmembre', [  
                'types' => $typeList,
                'categories' => $categoryList,
        

            ]);
        } else { 
            $login = [];
        }

        return $this->show('connexion', [  
            'types' => $typeList,        
        'categories' => $categoryList
  
        ]);
        
        
        // return $this->show('profilMembre',[
            //     'types' => $typeList,
            //     'categoryType' => $categorytype,
            //     'categories' => $categoryList 
            
            // ]);
    

    }
}