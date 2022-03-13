<?php


class InscriptionController extends MainController
{
   
    public function index()
    {
        $DBCon = new DBData();
              


        // $typelist = $DBCon->geType();
        // on verif si les info on ete envoyer
        // est diff de null
        if (!empty($_POST)) 
        {

            $errors = array();

            if (empty($_POST['lastname']) )
            {
                $errors['lastname'] = "vous n'avez pas entrer votre Nom";
                
            }



            // if (empty($_POST['lastname']) && empty($_POST['firstname']) && empty($_POST['email']) && empty($_POST['password'])){
            //     $errors['lastname'] = "champs n'est pas valide";
            //     $errors['firstname'] = "champs n'est pas valide";
            //     $errors['email'] = "champs n'est pas valide";
            //     $errors['password'] = "champs n'est pas valide";
            // }
        }
        return $this->show('formulaire_insc');
    }
}

