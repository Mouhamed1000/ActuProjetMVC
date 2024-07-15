<?php

    include_once ('Controller/ControllerAccueil.php');

    $url = $_GET['categ'];

    //Instanciation du controller
    $elem = new ControllerAccueil();

    if ($url == '')
    {

        $elem -> Accueil();
    }



    if ($url != '/')
    {

        $elem -> Pages($url);
    }
    
?>