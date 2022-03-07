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

        if(!isset($_SESSION)) {
            session_start();
         }
         if(!isset($_SESSION['cart'])) {
          $_SESSION['cart'] = []; 
          }
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
    
    // public function getAddpanier($id)
    // {
    //     $sql = "
    //         SELECT *
    //         FROM product            
    //         WHERE id = $id           
            
    //     ";
    
    // $query = $this->pdo->query($sql);

    // $productDetails = $query->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($productDetails as $product) {
       
    //     $productDetailsobjet[] = new product($product['id'],$product['name'],$product['description'],$product['picture'],$product['price']);
  
    //     }
   
    // return $productDetailsobjet;
    // }

    public function getAddpanier(){
        
        // on récupère bien la clé 'addCartSession',
    if (isset($_POST['addCartSession'])) {
    // si notre tableau de $_SESSION est vide à l'index 'cart'
    if (empty($_SESSION['panier'])) {
        // on initialise le tableau à vide
        $_SESSION['panier'] = array();
    }
    // sinon on va remplir notre tableau de $_SESSION
    // avec le tableau récupérer du formulaire en POST à l'aide de la variable globale PHP $_POST
    $_SESSION['panier'][] = $_POST;
  

    // On redirige vers la page category.php (page permettant d'afficher tous les produits)
    // header('Location: ../view/category.php');
}
    }
    

  
 
}