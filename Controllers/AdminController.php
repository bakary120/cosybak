
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
        $Allproduct = $DBCon->getAllproduct(); 


    if (!empty($_POST)){
        $admin = $DBCon->login_admin($_POST['email'], $_POST['password']);
        
        if(!is_string($admin)) {
            $_SESSION['admin'] = $admin;
        }
    } else { 
        $admin = [];
        return $this->show('connexionAdmin', [
            'types' => $typeList,
            'allproduct' => $Allproduct,
            'categories' => $categoryList,
            'login' => $admin
            ]);
    }


 

if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
    
   
//    en cas sesion return l'accueil 
    return $this->show('adm', [
        'types' => $typeList,
            'allproduct' => $Allproduct,
            'categories' => $categoryList,
        'admin' => $admin
    ]);
}
 else { 
    echo "<script>alert(\"votre email ou mot de passe administrateur est incorrect\")</script>";
    // echo "votre email ou mot de passe administrateur est incorrect" ; 
    return $this->show('connexionAdmin', [
        'types' => $typeList,
        'categories' => $categoryList,
        'admin' => $admin
    ]);
    
   
}

       
    }
    
}