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
    echo "<h1>Hello World !!</h1>";

    $nomPersonne = "Greg";

    // L'injection de variable fonctionne UNIQUEMENT avec les " ", pas avec les ' ' .
    echo "<p>Bonjour $nomPersonne, comment ça va?</p>";

    // Les types de variables:
    // Entiers (entier / enteger)
    $nombre = 85;

    // Décimaux (float)
    $nombre2 = 85.2;

    // Chaine de caractères (string)
    $chaine = "ceci est un texte";

    // booléen (boolean)
    $booleen = true; // false

    // Connaitre le contenu et le type d'une varibale
    var_dump($nombre); 
    var_dump($nombre2);
    var_dump($chaine);
    var_dump($booleen);
    
    ?>
</body>

</html>