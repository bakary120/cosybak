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

        $categoryOneList = $DBCon->getCategoryOne($_GET['category_id']);        
        $product = $DBCon->getCategorys($_GET['category_id']);        
        $typeList = $DBCon->getType();       

        return $this->show('category', [  
            'categoryOne' => $categoryOneList,
            'products' => $product,            
            'types' => $typeList
        ]);

    }

    public function productDetails()
    {
        $DBCon = new DBData();

        $typeList = $DBCon->getType();
        $product = $DBCon->getDetailsproduct($_GET['product_id']);
            

        return $this->show('detail', [  
            'types' => $typeList,
            'productDetails' => $product
            
        ]);

    }

    public function Addpanier()
    {
        $DBCon = new DBData();

       
        $typeList = $DBCon->getType();
        $panierAdd = $DBCon->getAddpanier($_POST); 
        
          

        return $this->show('panier', [  
            
            'types' => $typeList,
            'addpanier' => $panierAdd
            
            
        ]);

    }

    public function Allproduct()
    {
        $DBCon = new DBData();

       
        $typeList = $DBCon->getType();
        $Allproduct = $DBCon->getAllproduct(); 
        
          

        return $this->show('allproduct', [  
            
            'types' => $typeList,
            'allproduct' => $Allproduct
            
            
        ]);

    }
   
  
  
    

    

  
}