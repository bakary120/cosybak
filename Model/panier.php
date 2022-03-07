<!-- <:?php
class panier
{
    public function __construct()
    {
       if(!isset($_SESSION)) {
          session_start();
       }
       if(!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = []; 
        }
    }
    public function Add($panier_id){
        if (isset($_SESSION['panier'][$panier_id])) {
            $_SESSION['panier'][$panier_id]++;
        }else {
            $_SESSION['panier'][$panier_id] =1;
        }
        
    }
    public function Dell($panier_id){
        unset($_SESSION['cart'][$_GET['keyCartDelete']]);
    }

    public function total(){
        $total = 0;
        foreach($_SESSION['panier'] as $panier_id => $product){
            
        }
    }
    
} -->