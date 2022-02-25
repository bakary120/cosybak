<?php
class HomeController extends MainController
{
    
    public function index()
    {
        $DBCon = new DBData();

        

        return $this->show('home');

    }

    public function category()
    {
        $DBCon = new DBData();

        $categoryList = $DBCon->getCategory();

        return $this->show('home', [
            'categoryList' => $categoryList
        ]);

    }


  
}