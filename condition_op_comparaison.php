<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // On ppose une question
    $variable = 15;
    $variables = 17;
    $Variables = 20;
    $Variable = 25;
    $a = 18;
    $b = 21;
    // Pour comparer =>  comparaison simple :  ==   Comparaison strict : ===   Inférieur à : <    Supérieur à : >   Inférieur ou égale à :  <=    Supérieur ou égale à : >=  
    // Différent de :  !=    Strictement différent de : !==   Opérateur combiné : <=>
    if ($variable == 15) {
        // Alors
       echo " Egal ";
    }else {
        // Sinon
        echo " Pas égal ";
   }


    if ($variables >= 17) {
        // Alors
        echo "/ Plus petit ou égal ";
    } else {
        // Sinon
        echo " Plus grand ou egal ";
    }

    if ($Variables != 17) {
        // Alors
        echo "/ Différent de ";
    } else {
        // Sinon
        echo " Egal ";
    }

    if ($Variable !== 17) {
        // Alors
        echo "/ Strictement différent de ";
    } else {
        // Sinon
        echo " Egal ";
    }


    echo ($a <=> $b);
    /*
    < :  -1 si $a < $b
    = :  0  si $a = $b
    > :  1 si $a > $b
    */

    // $animal = "chat";

    switch ($a <=> $b) {
        case '-1':
            echo "/ $a Plus petit que $b ";
            break;
        
        case '0':
            echo " $a Egal $b ";
            break;

        case '1':
            echo " $a Plus grand que $b ";
            break;    
    }

    
    
    

?>
</body>
</html>