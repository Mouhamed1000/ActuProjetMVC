<?php 
    function ConnectDb() 
    {
        $servername = 'localhost';
        $username = 'mglsi_user';
        $password = 'passer';
        $dbname = 'mglsi_news';

        //On essaie de se connecter
        try {
                $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
                //On définit le mode d'erreur de PDO sur exception 
                $conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connexion réussie\n";
                return $conn;
            }
        /*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci */
        catch (PDOException $e) {
                                    echo "Erreur : ". $e->getMessage();
                                }

    }
?>