<?php
class HomeController extends MainController
{
    
    public function index()
    {
        $DBCon = new DBData();

        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();
        $categorytype = $DBCon->getCategorys('category_id'); 
        

        return $this->show('home', [
            'categories' => $categoryList,
            'types' => $typeList,
            'categoryType' => $categorytype,
            'categories' => $categoryList 
        ]);

    }
  

    public function product()
    {
        $DBCon = new DBData();

        $categoryOneList = $DBCon->getCategoryOne($_GET['category_id']);        
        $product = $DBCon->getCategorys($_GET['category_id']);        
        $typeList = $DBCon->getType();  
        $categoryList = $DBCon->getCategory();
        $categorytype = $DBCon->getCategorys('category_id');     

        return $this->show('category', [  
            'categoryOne' => $categoryOneList,
            'products' => $product,            
            'types' => $typeList,
            'categoryType' => $categorytype,
            'categories' => $categoryList 
        ]);

    }

    public function productDetails()
    {
        $DBCon = new DBData();

        $typeList = $DBCon->getType();
        $product = $DBCon->getDetailsproduct($_GET['product_id']);
        $categoryList = $DBCon->getCategory();
        $categorytype = $DBCon->getCategorys('category_id');
            

        return $this->show('detail', [  
            'types' => $typeList,
            'productDetails' => $product,
            'categoryType' => $categorytype,
            'categories' => $categoryList  
            
        ]);

    }

    public function Addpanier()
    {
        $DBCon = new DBData();

        $categoryList = $DBCon->getCategory();
        $categorytype = $DBCon->getCategorys('category_id');
        $typeList = $DBCon->getType();
        $panierAdd = $DBCon->getAddpanier('id'); 
     
        
          

        return $this->show('panier', [
            'types' => $typeList,
            'addpanier' => $panierAdd,
            'categoryType' => $categorytype,
            'categories' => $categoryList  
            
            
        ]);

    }

    public function Allproduct()
    {
        $DBCon = new DBData();

       
        $typeList = $DBCon->getType();
        $Allproduct = $DBCon->getAllproduct(); 
        $categoryList = $DBCon->getCategory();
        $categorytype = $DBCon->getCategorys('category_id');
        
          

        return $this->show('allproduct', [  
            
            'types' => $typeList,
            'allproduct' => $Allproduct,
            'categoryType' => $categorytype,
            'categories' => $categoryList
        
            
        ]);

    }
   
    public function OneCategoryProduct()
    {
        $DBCon = new DBData();

       
        $typeList = $DBCon->getType();
        $Allproduct = $DBCon->getAllproduct(); 
        $categoryList = $DBCon->getCategory();
        $categorytype = $DBCon->getCategorys('category_id');
        
          

        return $this->show('categorytype', [  
            
            'types' => $typeList,
            'allproduct' => $Allproduct,
            'categoryType' => $categorytype,
            'categories' => $categoryList

            
        ]);

    }
  
  
    

    

  
}