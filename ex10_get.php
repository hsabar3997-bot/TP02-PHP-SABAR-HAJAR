<?php
if(!isset($_GET['nom'])||!isset($_GET['prenom'])||!isset($_GET['groupe'])){ echo "Veuillez passer par le formulaire."; exit; }
$nom=trim($_GET['nom']); $prenom=trim($_GET['prenom']); $groupe=trim($_GET['groupe']);
if($nom===''||$prenom===''||$groupe===''){ echo "Champs vides"; exit; }
echo "Bienvenue ".htmlspecialchars($prenom,ENT_QUOTES,'UTF-8')." ".htmlspecialchars($nom,ENT_QUOTES,'UTF-8')." groupe ".htmlspecialchars($groupe,ENT_QUOTES,'UTF-8');
?>