<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_2 partie 3-php</title>  
     </head>
    
<body>
    <h1>exercice_2 partie 3 php</h1>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
    Tant que la première variable n'est pas supérieure à 20 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    incrementer la première variable</p>        
     
    <?php
//declaration de la variable = 0
        
    $firstNb = 0;
    $secondNb = 50;
    
   while ($firstNb<=20) : 
        echo $firstNb * $secondNb .'</br>';
        echo $firstNb++.'</br>';
    endwhile;
           
       
    ?>
   
     
</body>
</html>