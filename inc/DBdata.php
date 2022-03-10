<?php
class DBData
{
    private $pdo;

    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=cosybak;host=localhost;charset=UTF8';
        $username = 'root';
        $password = '';
        // J'ajoute une option qui me permet d'avoir les erreurs directement en Warning dans PHP
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->pdo = new PDO($dsn, $username, $password, $options);

       
    }


    public function getcategory()
    {
            $sql = '
            SELECT * 
            FROM category';

            $query = $this->pdo->query($sql);

            $productList = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($productList as $category) {
               
                $productobjet[] = new category($category['id'], $category['name'], $category['subtitle'], $category['picture'], $category['numero']);
            }
    
           
            return $productobjet;
    }

    public function getType()
    {
        $sql = '
        SELECT *
        FROM `type`
        WHERE `footer_order` != 0
        ORDER BY `footer_order` ASC
        LIMIT 5
            
            ';
    
    $query = $this->pdo->query($sql);

    $typeList = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($typeList as $type) {
       
        $typeObject[] = new type($type['id'],$type['name'],$type['footer_order']);
    }

   
    return $typeObject;
    }


    public function getCategorys($id)
    {
        $sql = "
        SELECT *
        FROM product
        WHERE category_id = $id    
        
       ";
    
    $query = $this->pdo->query($sql);

    $productList = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($productList as $product) {
       
        $productobjet[] = new product($product['id'],$product['name'],$product['description'],$product['picture'],$product['price']);
  
        }
   
    return $productobjet;
    }

    public function getCategoryOne($id)
    {
        $sql = "
        SELECT *
        FROM category
        WHERE id = $id    
        
       ";
    
       $query = $this->pdo->query($sql);

       $categoryOne = $query->fetchAll(PDO::FETCH_ASSOC);

       foreach ($categoryOne as $categoryOne) {
          
           $categoryOneobjet[] = new category($categoryOne['id'], $categoryOne['name'], $categoryOne['subtitle'], $categoryOne['picture'], $categoryOne['numero']);
       }

      
       return $categoryOneobjet;
    }

    public function getDetailsproduct($id)
    {
        $sql = "
            SELECT *
            FROM product            
            WHERE id = $id           
            
        ";
    
    $query = $this->pdo->query($sql);

    $productDetails = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($productDetails as $product) {
       
        $productDetailsobjet[] = new product($product['id'],$product['name'],$product['description'],$product['picture'],$product['price']);
  
        }
   
    return $productDetailsobjet;
    }
    
    

    public function getAddpanier()
    {
        $sql = "
        SELECT *
        FROM product            
                
        
    ";

        $query = $this->pdo->query($sql);

        $panierAdd = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($panierAdd as $product) {
        
            $panierAddobjet[] = new product($product['id'],$product['name'],$product['description'],$product['picture'],$product['price']);

            }

        return $panierAddobjet;
       

        
        
        
         
    }

    public function getAllproduct()
    {
        $sql = "
        SELECT *
        FROM product            
                
        
    ";

        $query = $this->pdo->query($sql);

        $AllProduct = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($AllProduct as $product) {
        
            $AllProductobjet[] = new product($product['id'],$product['name'],$product['description'],$product['picture'],$product['price']);

            }

        return $AllProductobjet;       
         
    }


    public function login_connect($email, $password) 
    {

            $sql = "
            SELECT *
            FROM user 
            WHERE email = '$email' && password = '$password'
        ";
        
        $query = $this->pdo->query($sql);

        // $user = $query->fetch(PDO::FETCH_ASSOC);

        if (isset($_POST['login'])) {
                $username = $_POST['email'];
                $password = $_POST['password'];

            $user = $query->fetch(PDO::FETCH_ASSOC);

            if (isset($user[$username])) {

                if ($user[$username]['passe']== $password) {

                    header('location: home');
                }else {
                    echo 'alert ("mauvais mot de passe")';
                }
            }else {
                
                echo 'alert ("cet utilisateur n\'existe pas")';

            }

        } 

        if (isset($_SESSION['username'])) {
            header("location: home");
        }

        // if (isset($user) && !empty($user)){
        //     $userObject [] = new user($user['id'], $user['lastname'], $user['firstname'],$user['email'],  $user['password']);
        // } else {
        //     $userObject = "Login et/ou Mot de passe incorrect(s).";
        // }
        
        // return $userObject;
    }
  
 
}