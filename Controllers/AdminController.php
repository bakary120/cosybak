
<?php

// La classe HomeController est étendue par MainController
// De ce fait, HomeController, hérite de toutes les propriétés
// et toutes les méthodes de la classe MainController
class AdminController extends MainController
{

    public function index(){
        $DBCon = new DBData();
        $typeList = $DBCon->getType(); 
        $categoryList = $DBCon->getCategory();



        return $this->show('adm', [  
            'types' => $typeList,
            'categories' => $categoryList,
  
        ]);
    }
    
}