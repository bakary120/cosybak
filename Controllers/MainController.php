<?php

class MainController
{
    public function show($viewName, $viewVars = [])
    {
        include __DIR__ . '/../views/header.tpl.php';
        include __DIR__ . '/../views/' . $viewName . '.tpl.php';
        include __DIR__ . '/../views/footer.tpl.php';
    }
}