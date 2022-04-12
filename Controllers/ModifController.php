<?php

// La classe HomeController est étendue par MainController
// De ce fait, HomeController, hérite de toutes les propriétés
// et toutes les méthodes de la classe MainController
class ModifController extends MainController
{
     // La fonction de HomeController appartient à la classe
    // On appelle donc index() une méthode
    public function index()
    {
        $DBCon = new DBData();
        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();

        // donc, un tableau d'objet pour les catégories
        if (!empty($_POST) && !is_string($_SESSION['login'])){
            $ModifUser = $DBCon->getProfilModif($_GET['userId'], $_POST['new-nom'], $_POST['new-prenom'],$_POST['new-numero'], $_POST['new-adr_mail'],$_POST['new-adress'], $_POST['new-codepostal'],$_POST['new-ville'], $_SESSION['login']);
            // $_SESSION['login'] = $ModifUser;
            
        } else { 
            $ModifUser = [];
        }
        
            return $this->show('modifMembre',  [
                'login' => $ModifUser,
                'types' => $typeList,
                'categories' => $categoryList
            ]);

    
    }

    public function AjouterProduit()
    {
        
        $DBCon = new DBData();
        $categoryList = $DBCon->getCategory();       
        $typeList = $DBCon->getType();
        $ajout = $DBCon->getAjout();
        $Allproduct = $DBCon->getAllproduct();

            return $this->show('ajouterProduit', [
                
                'ajout' => $ajout,
                'types' => $typeList,
                'categories' => $categoryList,
            'allproduct' => $Allproduct

            ]);

    
    }

    public function ModifProduit()
    {
        $DBCon = new DBData();
        $categoryList = $DBCon->getCategory();
        $typeList = $DBCon->getType();
        $Modifproduit = $DBCon->getModifproduit($_GET['product_id']);
        $ModifP = $DBCon->getModifP($_GET['product_id']);
       
     
      
        return $this->show('modifProduit',  [
            'modifP' => $ModifP,
            'types' => $typeList,
            'categories' => $categoryList,
            'Modifproduit' => $Modifproduit,

        ]);

    
    
    }


  

    

    public function suppProduit()
    {
        
        $DBCon = new DBData();
        $categoryList = $DBCon->getCategory();       
        $typeList = $DBCon->getType();
        $ajout = $DBCon->getAjout();
        $Allproduct = $DBCon->getAllproduct();
        $supp = $DBCon->getSupp($_GET['suppProduct_id']);



        if(!empty($_GET['suppProduct_id'])) {

            $supp = $DBCon->getSupp($_GET['suppProduct_id']);
            return $this->show('adm', [                     
                            'allproduct' => $Allproduct,                
                                'ajout' => $ajout,
                                'supp' => $supp,
                                'types' => $typeList,
                                'categories' => $categoryList
                            ]);
         }

        // if(!empty($_GET)){
        //     if(isset($_GET['product_id']) && !empty($_GET['product_id'])){
        //         $supp = $DBCon->getSupp($_GET['product_id']);

        //         return $this->show('adm', [                     
        //             'allproduct' => $Allproduct,                
        //                 'ajout' => $ajout,
        //                 'supp' => $supp,
        //                 'types' => $typeList,
        //                 'categories' => $categoryList
        //             ]);

        // }else { echo "<script>alert(\"produit non supprimer\")</script>";}

        // }

       

    
    }
}