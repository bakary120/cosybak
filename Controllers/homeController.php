<?php
class HomeController extends MainController
{
    
    public function index()
    {
        $DBCon = new DBData();

        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();

        return $this->show('home', [
            'categories' => $categoryList,
            'types' => $typeList
        ]);

    }

    

    

  
}