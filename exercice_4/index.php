<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_4 partie 3-php</title>  
     </head>
    
<body>
    <h1>exercice_4 partie 3 php</h1>
    <p>Créer une variable et l'initialiser à 1.
    Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur

    </p>        
     
    <?php
//declaration de la variable = 0
        
    $firstNb = 1;
        
   while ($firstNb<=10) {
        echo $firstNb .'</br>';
         $firstNb = $firstNb + $firstNb/2;
         }      
    ?>
   
</body>
</html>