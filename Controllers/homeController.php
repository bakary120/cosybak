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
        $product = $DBCon->getDetailsproduct($_GET['detail_id']);
            

        return $this->show('detail', [  
            'types' => $typeList,
            'productDetails' => $product
            
        ]);

    }

    public function Addpanier()
    {
        $DBCon = new DBData();

       
        $productAddpanier = $DBCon->getAddpanier($_GET['panier_id']); 
        // $productAdd = $DBCon->getAdd($_GET['panier_id']); 
     ;       

        return $this->show('panier', [  
            
            'panier' => $productAddpanier,
            // 'sessionpanier' => $productAdd
            
        ]);

    }
  
  
    

    

  
}