<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_8 partie 3-php</title>  
    </head>

    <body>
        <h1>exercice_8 partie 3 php</h1>
        <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. </p>        

        <?php
//declaration de la variable = 0


        for ($firstNb = 200; $firstNb >= 0; $firstNb-=12) {
            echo 'Enfin !!!!!';
        }
        ?>

    </body>
</html>