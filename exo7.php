<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercie 7 php</title>
</head>
<body>
<?php
/* déclarations de variables*/
    $lastname = "Vaché";
    $firstname = "Laurent";
    $age = 28;
/* afficher une phrase qui contient les variables */
    echo    "Bonjour ";
    echo    $firstname;
    echo    " ";
    echo    $lastname;
    echo    ", tu as ";
    echo    $age;
    echo    " ans.";
    // autre solution pour afficher la phrase
    echo    "<br/>";
    $phrase = "Bonjour $firstname $lastname, tu as $age ans.";

    echo $phrase;
    ?>
    
</body>
</html>