
<?php


class LogoutController extends MainController
{
   
    public function index()
    {
      
        $DBCon = new DBData();
        $typeList = $DBCon->getType(); 
        $categoryList = $DBCon->getCategory();


       
        
            return $this->show('home',[
            'types' => $typeList,
            'categories' => $categoryList,

                
            ]);
    
    }
}