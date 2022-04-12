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
    // public function getinscription($lastname, $firstname, $numero, $email, $password, $adress, $codepostal, $ville) {

       
    //         $sql = "
    //         INSERT INTO 
    //         user (`lastname`, `firstname`, `numero`,`email`, `password`, `codepostal`,`ville`,) 
    //         VALUES 
    //         ('$lastname', '$firstname', '$numero','$email', '$password','$adress','$codepostal','$ville')
    //         ";

    //         $exec = $this->pdo->exec($sql);

    //         if ($exec==1){
    //             return true;
    //         } else { return false; }      
     
       
    // }

    public function getInscription(){


        if(!empty($_POST)){
            if(isset($_POST['lastname'], $_POST['firstname'],$_POST['numero'], $_POST['email'], $_POST['password'],$_POST['adress'],$_POST['codepostal'],$_POST['ville']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])
            && !empty($_POST['numero'])  && !empty($_POST['email']) && !empty($_POST['password'])  && !empty($_POST['adress'])  && !empty($_POST['codepostal'])  && !empty($_POST['ville']) ){

                // le formulaire est rempli
                // recupere les donnees
                // $nom = strip_tags($_POST['lastname']); protege le speudo enleve les balises php et html
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                  
                   echo "<script>alert(\"adresse email incorreste\")</script>";
                //    le if verifie les email
                }
 
                $password = password_hash($_POST['password'],PASSWORD_ARGON2I);
               
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $numero = $_POST['numero'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $adress = $_POST['adress'];
                $codepostal = $_POST['codepostal'];
                $ville = $_POST['ville'];

                $sql ="
                INSERT INTO `user` (`lastname`, `firstname`, `numero`,`email`, `password`, `adress`, `codepostal`,`ville`)
                VALUES ('$firstname', '$lastname', '$numero','$email', '$password','$adress', '$codepostal','$ville')
            ";
        
                $this->pdo->exec($sql);

                header('Location: connexion');
            } else {
                echo "<script>alert(\"Veuillez remplir le formulaire s'il vous plaît\")</script>";
               
            }
        }
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
        $UserObject = new User($User['id'], $User['firstname'], $User['lastname'], $User['numero'],
        $User['email'],  $User['password'], $User['adress'], $User['codepostal'], $User['ville']);
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
        $UserObject = new User($User['id'], $User['firstname'], $User['lastname'], $User['numero'],
        $User['email'],  $User['password'], $User['adress'], $User['codepostal'], $User['ville']);
    } else {
        $UserObject = "Login et/ou Mot de passe incorrect(s).";
        
    }

    
    return $UserObject;
    }
    


   
   


    public function getProfilModif($userId, $lastname, $firstname, $email, $adress, $codepostal, $ville) {

        $sql = "
        UPDATE user
        SET lastname = '$lastname', firstname = '$firstname', email = '$email', adress = '$adress', codepostal = '$codepostal', ville = '$ville'
        WHERE user.id = '$userId'
        
    ";

    $exec = $this->pdo->exec($sql);


    if ($exec==1){
        return true;
    } else { return false; }

    }



        public function getModifproduit($id)
        {
        

                $sql = "
                    SELECT *
                    FROM product            
                    WHERE id = $id           
                    
                ";

            $query = $this->pdo->query($sql);

            $modifproduit = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($modifproduit as $product) {
            
                $modifproduitobjet[] = new product($product['id'],$product['name'],$product['description'],$product['picture'],$product['price']);

                }

            return $modifproduitobjet;
        }


        public function getAjout(){


            if(!empty($_POST)){
                if(isset($_POST['name'], $_POST['description'],$_POST['picture'], $_POST['price']) && !empty($_POST['name']) && !empty($_POST['description'])
                && !empty($_POST['picture'])  && !empty($_POST['price']) ){
    
                   
     
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $picture = $_POST['picture'];
                    $price = $_POST['price'];
                   
    
                    $sql ="
                    INSERT INTO `product` (`name`, `description`, `price`,`picture`)
                    VALUES ('$name', '$description', '$price','$picture')
                ";
            
                    $this->pdo->exec($sql);

    
                    header('Location: adm');
                } 
                else {
                    echo "<script>alert(\"produit non ajouter\")</script>"; }
            }

        }


        public function getModifP($product_id)

        
        {
            // eviter les injection sql
             // si c variable sont defini
            
            if (isset($_POST['news-name'],$_POST['news-description'],$_POST['news-price'],$_POST['news-picture'])){
            
                $query =  $this->pdo->prepare("  UPDATE `product` 
                SET name = :name, description = :description, picture = :picture, price = :price
                WHERE id = '$product_id'");

                $query->execute([
                    'name' => $_POST['news-name'],
                    'description' => $_POST['news-description'],
                    'picture' => $_POST['news-picture'],
                    'price' => $_POST['news-price'],
                    // 'id' => $_GET['id']
                ]);

                header('Location: adm');
               
            }
           
        

        }
        
    
       


        public function getSupp($suppProduct_id){

         $sql = "
                    DELETE FROM `product` 
                    WHERE id = $suppProduct_id
             ";
        
                return   $this->pdo->exec($sql);   
            
        }
}




// UPDATE `product` SET `name`='sencha',`description`=' Grâce à son procédé de fabrication unique, ce thé Sencha biologique vous offre une pause hydratation résolument rafraîchissante et bienfaisante. Un bon moyen de s’initier en douceur à la célèbre infusion des feuilles du théier !.',`picture`='images/produits/sencha.png',`price`='8.99',`status`='1',`created_at`='06/04/2022',`updated_at`='06/04/2022',`type_id`='1',`category_id`='6' WHERE 1;

//   UPDATE `product` SET `name`='sencha bio',`description`=' Grâce à son procédé de fabrication unique, ce thé Sencha biologique vous offre une pause hydratation résolument rafraîchissante et bienfaisante. Un bon moyen de s’initier en douceur à la célèbre infusion des feuilles du théier !.',`picture`='images/produits/sencha.png',`price`='7.99',`status`='',`created_at`='',`updated_at`='',`type_id`='',`category_id`='' WHERE product.id = '1';