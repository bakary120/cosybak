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

  

 
}