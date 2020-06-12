<?php
    function testHuman($age, $gender){
        $message = 'une valeur est incorrecte';
        if ($gender == 'Homme' && $age >= 18 ){
            $message = 'Vous êtes un homme et vous êtes majeur';
        }else if ($gender == 'Homme' && $age < 18){
            $message ='Vous êtes un homme et vous êtes mineur';
        }else if ($gender == 'Femme' && $age >= 18){
            $message = 'Vous êtes une femme et vous êtes majeure';
        }else if ($gender == 'Femme' && $age < 18){
            $message = 'Vous êtes une femme et vous êtes mineur';
        }
    } 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 4 exercice 7</title>
    </head>
    <body>
        <p>
            <?php 
                testHuman(25, 'Femme');
            ?>
        </p>
    </body>
</html>