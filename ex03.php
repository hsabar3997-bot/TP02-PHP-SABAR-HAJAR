<?php

// 1. Constantes
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

// 2. Variables
$prix_unitaire_ht = 60;
$quantite = 3;

// 3. Calculs
$total_ht = $prix_unitaire_ht * $quantite;
$montant_tva = $total_ht * TAUX_TVA / 100;
$total_ttc = $total_ht + $montant_tva;

// 4. Frais de livraison avec +=
$frais_livraison = 15;
$total_ttc += $frais_livraison; // total final = 231

// 5. Affichage + verification defined()
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ex03 - SABAR HAJAR</title>
</head>
<body>
    <h2>Récapitulatif de la commande</h2>
    <p>Prix unitaire HT : <?php echo $prix_unitaire_ht . " " . DEVISE; ?></p>
    <p>Quantité : <?php echo $quantite; ?></p>
    <hr>
    <p>Total HT : <?php echo $total_ht . " " . DEVISE; ?></p>
    <p>Montant TVA (<?php echo TAUX_TVA; ?>%) : <?php echo $montant_tva . " " . DEVISE; ?></p>
    <p>Total TTC : 216 <?php echo DEVISE; ?> (avant livraison)</p>
    <p>Montant final avec livraison (15 MAD) : <?php echo $total_ttc . " " . DEVISE; ?></p>
    <hr>
    <p>
        Vérification constante TAUX_TVA : 
        <?php 
        if (defined('TAUX_TVA')) {
            echo "La constante TAUX_TVA existe et vaut " . TAUX_TVA;
        } else {
            echo "La constante n'existe pas";
        }
        ?>
    </p>
</body>
</html>