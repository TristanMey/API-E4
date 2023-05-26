<?php
//Inclut les modèles nécessaires
include_once "$racine/modele/ModeleJson.php";

$url ="https://ddragon.leagueoflegends.com/cdn/13.7.1/data/fr_FR/champion.json";
$urlImage = "https://ddragon.leagueoflegends.com/cdn/13.7.1/img/champion/";
//Récupérer le fichier Json
$lesObjets = ModeleJson::getJson($url);




// appel du script de vue qui permet de gerer l'affichage des donnees


//Entete
include "$racine/vue/vueEntete.php";

//VueRechercheObjet
include "$racine/vue/vueJson.php";

//Vue pied de page
include "$racine/vue/vuePied.php";
?>