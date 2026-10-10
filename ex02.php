<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02</title>
</head>
<body>
    <h1>Exercice 02 - Les variables</h1>
    <?php
    // Déclaration des variables
    $nom = "SABAR";
    $prenom = "Hajar";
    $age = 19;
    $formation = "Développement Digital G2";

    // Utilisation de . pour concaténation
    echo "Je m'appelle " . $prenom . " " . $nom . " et j'ai " . $age . " ans.<br>";

    // Utilisation de .=
    $message = "Je suis en formation ";
    $message .= $formation . ".<br>";
    echo $message;

    // Test de la casse
    $note = 15;
    $Note = 18;
    echo "La variable \$note vaut : $note <br>";
    echo "La variable \$Note vaut : $Note <br>";
    echo "Conclusion : \$note et \$Note sont deux variables différentes car PHP est sensible à la casse (case-sensitive).";
    ?>
</body>
</html>