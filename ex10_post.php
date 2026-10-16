<?php
if(!isset($_POST['nom'])||!isset($_POST['prenom'])||!isset($_POST['groupe'])){ echo "Veuillez passer par le formulaire."; exit; }
$nom=trim($_POST['nom']); $prenom=trim($_POST['prenom']); $groupe=trim($_POST['groupe']);
if($nom===''||$prenom===''||$groupe===''){ echo "Champs vides"; exit; }
echo "Bienvenue ".htmlspecialchars($prenom,ENT_QUOTES,'UTF-8')." ".htmlspecialchars($nom,ENT_QUOTES,'UTF-8')." groupe ".htmlspecialchars($groupe,ENT_QUOTES,'UTF-8');
?>