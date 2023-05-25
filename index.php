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
    echo "<pre>";

    // déclarer un tableau
    $tableau = ["Bonjour", 15, true, 58.15, "brouette", 45, false];

    // ajouter des valeurs
    // a la fin (push)
    // array_push($tableau, "Fin")    est égale à    $tableau[] = "Fin"
    $tableau[] = "Fin";

    // Ajouter des valeurs au début (unshift)
    array_unshift($tableau, "Début");

    // Supprimer des valeurs
    // A la fin(pop)
    array_pop($tableau);

    // pour récupérer la valeur supprimer par array_pop
    $valeur = array_pop($tableau);

    // Supprimer au début (shift)
    $valeur = array_shift($tableau);

    // diviser le tableau en plusieuyrs partie de 2 valeurs
    $tableau3 = array_chunk($tableau, 2, true);

    // melanger un tableau
    shuffle($tableau);
    
    $tableauMulti = [
        "nom" => "Girault",
        "prenom" => "Greg",
        "age" => "35"
    ];

    $tableauMultiDim = [
        0 => [
        "nom" => "Gallas",
        "prenom" => "Sandra",
        "age" => "27"
    ],
        1 => [
        "nom" => "Girault",
        "prenom" => "Greg",
        "age" => "35"
    ]
];



    var_dump($tableauMultiDim[0]["nom"]);
    // echo $valeur;
    echo "</pre>";
    ?>
</body>

</html>