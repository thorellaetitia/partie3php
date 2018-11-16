<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_7 partie 3-php</title>  
    </head>

    <body>
        <h1>exercice_7 partie 3 php</h1>
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. </p>        

        <?php
//declaration de la variable = 0


        for ($firstNb = 1; $firstNb <= 100; $firstNb+=15) {
            echo 'On tient le bon bout.';
        }
        ?>

    </body>
</html>