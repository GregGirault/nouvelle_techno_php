<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // permet de calculer la somme de 2 valeurs
    function additionner($nb1, $nb2){  // nb1 = Premier nombre   nb2 = Deuxième nombre
        return $nb1 + $nb2;  // Somme des deux nombres
        // return est la dernière action effectuer dans la fonction, si on ajoute par exemple un echo il ne sera pas affiché
    }
    function saluer($prenom, $nom, $civilite = "",  $salutation = "Hello"){
        echo "$salutation $civilite $prenom $nom";
    }

    $total = additionner(18, 8);
    var_dump($total);

    

    ?>

    <h1><?php saluer(prenom: "Greg", nom: "Girault", salutation: "Bonjour")?></h1>
</body>
</html>