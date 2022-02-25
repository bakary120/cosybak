<?php
class HomeController extends MainController
{
    
    public function index()
    {
        $DBCon = new DBData();

        return $this->show('home');

    }

  
}