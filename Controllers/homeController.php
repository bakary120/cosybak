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

    public function product()
    {
        $DBCon = new DBData();

        $product = $DBCon->getCategorys($_GET['category_id']);        

        return $this->show('category', [  
            'products' => $product
        ]);

    }
    

    

  
}