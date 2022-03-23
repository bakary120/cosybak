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

        // if(!isset($_SESSION)) {
        //     session_start();
        //  }
        //  if(!isset($_SESSION['admin'])) {
        //   $_SESSION['admin'] = []; 
        //   }
       
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
    
    

    public function getAddpanier($id)
    {
        $sql = "
        SELECT *
        FROM product
        where id= $id            
                
        
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
    // inscription
    public function getinscription($lastname, $firstname, $email, $password) {

       
            $sql = "
            INSERT INTO 
            user (`lastname`, `firstname`, `email`, `password`) 
            VALUES 
            ('$lastname', '$firstname', '$email', '$password')
            ";

            $exec = $this->pdo->exec($sql);

            if ($exec==1){
                return true;
            } else { return false; }
     
       
    }

    public function getinscription2($lastname,$firstname, $email, $password) {

        $sql2 = "
        SELECT *
         FROM user 
        WHERE lastname = '$lastname' && firstname = '$firstname' && email = '$email' && password = '$password'
    ";

    $query = $this->pdo->query($sql2);

    $newUser = $query->fetchAll(PDO::FETCH_ASSOC);
    
    $newUserObject = new User($newUser[0]['id'], $newUser[0]['firstname'], $newUser[0]['lastname'], 
    $newUser[0]['email'],  $newUser[0]['password']);

    return $newUserObject;
    }
    // connexion
    public function login_connect($email, $password) {

        $sql = "
        SELECT * 
        FROM user
        WHERE email = '$email' && password = '$password'
    ";
  
    $query = $this->pdo->query($sql);

    $User = $query->fetch(PDO::FETCH_ASSOC);

    if (isset($User) && !empty($User)){
        $UserObject = new User($User['id'], $User['firstname'], $User['lastname'],
        $User['email'],  $User['password']);
    } else {
        $UserObject = "Login et/ou Mot de passe incorrect(s).";
        
    }

    
    return $UserObject;
    }


    public function login_Admin($email, $password) {

        $sql = "
        SELECT * 
        FROM user_admin
        WHERE email = '$email' && password = '$password'
    ";
  
    $query = $this->pdo->query($sql);

    $User = $query->fetch(PDO::FETCH_ASSOC);

    if (isset($User) && !empty($User)){
        $UserObject = new User($User['id'], $User['firstname'], $User['lastname'],
        $User['email'],  $User['password']);
    } else {
        $UserObject = "Login et/ou Mot de passe incorrect(s).";
        
    }

    
    return $UserObject;
    }
    


   
   


    public function getProfilModif($userId, $lastname, $firstname, $email, $User) {

        $sql = "
        UPDATE user
        SET lastname = '$lastname', firstname = '$firstname', email = '$email'
        WHERE user.id = '$userId'
        
    ";

    $exec = $this->pdo->exec($sql);


    if ($exec==1){
        return true;
    } else { return false; }

    }
   
    
 
}