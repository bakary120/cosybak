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

            $categoryList = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($categoryList as $category) {
               
                $categoryObject[] = new category($category['id'], $category['name'], $category['subtitle'], $category['picture']);
            }
    
           
            return $categoryObject;
    }

 
}