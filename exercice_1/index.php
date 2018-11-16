<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_1 partie 3-php</title>  
     </head>
    
<body>
    <h1>exercice_1 partie 3 php</h1>
    <p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer
</p>        
     
    <?php
//declaration de la variable = 0
        
    $number=0;
    
   while ($number<=10){   //tant que =while la variable n'atteint pas 10 
       echo $number++ ; //tu l'incrémentes de 1 et tu me l'affiches
   }
   
    ?>
   
     
</body>
</html>