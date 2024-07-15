<?php 
class Modele1 
{
    public function getMenu()
    {
        include_once ('Connection.php');
        $conn = ConnectDb();

        //Nous préparons notre requête afin d'obtenir un objet PDOStatement qui contient la requête SQL que nous devons exécuter
        $objetStatement = $conn -> prepare ("select * from Categorie");
        $el = $objetStatement -> execute();
        //Nous allons par la suite stocker le résultat dans un tableau
        $Liste1 = $objetStatement -> fetchAll();
        return $Liste1;
    }

    public function getAll()
    {
        include_once ('Connection.php');
        $conn = ConnectDb();

        //Nous préparons notre requête afin d'obtenir un objet PDOStatement qui contient la requête SQL que nous devons exécuter
        $objetStatement = $conn -> prepare ("select * from Article");
        $el = $objetStatement -> execute();
        //Nous allons par la suite stocker le résultat dans un tableau
        $Liste2= $objetStatement -> fetchAll();
        return $Liste2;
    }

    public function getByName($nom)
    {
        include_once ('Connection.php');
        $conn = ConnectDb();

        //Nous préparons notre requête afin d'obtenir un objet PDOStatement qui contient la requête SQL que nous devons exécuter
        $objetStatement = $conn -> prepare ("select * from Article where categorie = (select id from Categorie where libelle = '$nom')");
        $el = $objetStatement -> execute();
        //Nous allons par la suite stocker le résultat dans un tableau
        $Liste2= $objetStatement -> fetchAll();
        return $Liste2;
    }
}
?>