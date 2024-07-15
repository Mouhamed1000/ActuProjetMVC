
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Site web d'actualités</title>
        <link href="Vue/fichier.css" rel="stylesheet"/>
    </head>

    <body>

        <nav>
                <a href="index.php"><img src="logo1.png" alt="logo" width="30%"/></a>
                <ul>
                    <?php
                        foreach ($Liste1 as $tab) { ?>

                        <li> <a href="index.php?categ=<?php echo $tab['libelle'] ?>"> <?php echo $tab['libelle'] ?> </a> </li> <?php } 
                    ?>
                </ul>
        </nav>

        <div class="boxes">
            <?php foreach ($Liste2 as $list2) { ?>
                <div class="box1">
                <h3> <?php echo $list2['titre'] ?> </h3> 
                <p> <?php echo $list2['contenu'] ?> </p>  </div> <?php 
            } ?>
        </div>

        <footer>Copyright © The Team </footer>
    </body>
</html>
