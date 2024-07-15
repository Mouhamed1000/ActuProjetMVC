<?php
class ControllerAccueil 
{
    public function Accueil()
    {
        //Inclusion du fichier Modele1
        //Ce fichier gere la logique metier de notre application
        //Il est donc charge des communications avec la base de donnees
        include_once ('Modele/Modele1.php');
        
        $obj1 = new Modele1();
        $Liste1 = $obj1->getMenu(); 
        $Liste2 = $obj1-> getAll(); 
        
        //Inclusion du fichier Accueil.php
        //Ce fichier permet l'affichage des interfaces utilisateurs
        include_once ('Vue/Accueil.php');
    
    }

    public function Pages($url)
    {
        //Inclusion du fichier Modele1
        //Ce fichier gere la logique metier de notre application
        //Il est donc charge des communications avec la base de donnees

        include_once ('Modele/Modele1.php');
        
        $obj1 = new Modele1();
        $Liste1 = $obj1-> getMenu(); 
        $Liste2 = $obj1-> getByName($url);   
        
        //Inclusion du fichier Accueil.php
        //Ce fichier permet l'affichage des interfaces utilisateurs

        include_once ('Vue/Accueil.php');
    }

}

?>