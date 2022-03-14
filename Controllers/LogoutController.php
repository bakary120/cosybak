
<?php


class LogoutController extends MainController
{
  
    public function index()
    {
        
        $DBCon = new DBData();
        $typeList = $DBCon->getType(); 
        $categoryList = $DBCon->getCategory();
        $_SESSION['login']= [];

        
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
