<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_6 partie 3-php</title>  
    </head>

    <body>
        <h1>exercice_6 partie 3 php</h1>
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. </p>        

        <?php
//declaration de la variable = 0


        for ($firstNb = 20; $firstNb >= 0; $firstNb --) {
            echo 'C\'est presque bon';
        }
        ?>

    </body>
</html>