<?php
$notes=["Amine"=>12,"Sara"=>16,"Youssef"=>8,"Lina"=>14,"Adam"=>10];
$somme=0; $valides=0; $max=0; $meilleur="";
foreach($notes as $v){ $somme+=$v; }
$moy=$somme/count($notes);
?>
<table border="1"><tr><th>Nom</th><th>Note</th><th>Etat</th></tr>
<?php foreach($notes as $nom=>$note){ $etat=$note>=10?"Validé":"Non validé"; if($note>=10) $valides++; if($note>$max){ $max=$note; $meilleur=$nom; } echo "<tr><td>$nom</td><td>$note</td><td>$etat</td></tr>"; } ?>
</table>
<?php echo "Moyenne: $moy Valides: $valides Meilleur: $meilleur $max"; ?>