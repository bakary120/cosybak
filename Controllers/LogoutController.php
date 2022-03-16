<?php


class LogoutController extends MainController
{
  
    public function index()
    {
        
        $DBCon = new DBData();
        $typeList = $DBCon->getType(); 
        $categoryList = $DBCon->getCategory();
        // on initialise session login
        $_SESSION['login']= [];

        // si session login different de vide retour a l'accueil 
        if(!$_SESSION['login']){

            return $this->show('home',[
                'types' => $typeList,
            'categories' => $categoryList,
            ]);
        }
     
        return $this->show('logout',[
        
        ]);
        
           
    
    }
}
