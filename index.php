<?php

/*
Le fichier .htaccess permet de rediriger toutes les requêtes HTTP vers le fichier index.php ce qui nous de permet de n'avoir qu'un seul point d'entrée
index.php est le FrontController

*/

require __DIR__ . '/model/Category.php';
require __DIR__ . '/model/Type.php';
require __DIR__ . '/model/Product.php';
// require __DIR__ . '/model/.php';
require __DIR__ . '/model/user.php';

require __DIR__ . '/inc/DBData.php';
require __DIR__ . '/inc/sessionForm.php';
// session_start();

require __DIR__ . '/Controllers/MainController.php';
require __DIR__ . '/Controllers/HomeController.php';
require __DIR__ . '/Controllers/ConnexionController.php';
require __DIR__ . '/Controllers/InscriptionController.php';
require __DIR__ . '/Controllers/LogoutController.php';
require __DIR__ . '/Controllers/ProfilController.php';
require __DIR__ . '/Controllers/ModifController.php';
require __DIR__ . '/Controllers/AdminController.php';



$homeController = new HomeController();
$ConnexionController = new ConnexionController();
$InscriptionController = new InscriptionController();
$logoutController = new logoutController();
$ProfilController = new ProfilController();
$ModifController = new ModifController();
$AdminController = new AdminController();




if (isset($_GET['_url'])) {
    $url = $_GET['_url'];
} else {
    $url = '/';
}

/*
Router / Dispatcher : il appelle la bonne méthode de controller en fonction de l'URL qui est appelée.
Le Dispatcher compare l'URL virtuelle appelée avec des routes. Les routes sont les URLs prévues par notre application, les URLs que notre application saura gérer.
*/
if ($url === '/') { // Accueil
    // excuter la methode de controller pour afficher l'accueil
  $homeController->index();
}else if($url === '/home') {
    $homeController-> index();
}else if($url === '/category') {
    $homeController-> product();
}else if($url === '/detail') {
    $homeController-> productDetails();
}else if($url === '/panier') {
    $homeController-> Addpanier();
}else if($url === '/allproduct') {
    $homeController-> Allproduct();
}else if($url === '/connexion') {
    $ConnexionController-> index();
}else if($url === '/insc') {
    $InscriptionController-> index();
}else if($url === '/logout') {
    $logoutController-> index();
}else if($url === '/addlivraison') {
    $InscriptionController-> livraison();
}else if($url === '/profilmembre') {
    $ProfilController-> index();
}elseif ($url === '/modif') {
    $ModifController->index();
}elseif ($url === '/modifProduit') {
    $ModifController->modifProduit();
}elseif ($url === '/modifProduit') {
    $ModifController->suppProduit();
}elseif ($url === '/ajouterProduit') {
    $ModifController->AjouterProduit();
}elseif ($url === '/adm') {
    $AdminController->index();
}else {
    /*
    Si aucune ne route ne correspond à l'URL définie dans la requête HTTP, nous envoyons une erreur 404 (Not Found)
    https://www.php.net/manual/fr/function.http-response-code.php
    */
    http_response_code(404);
    // $controller->page404();
}