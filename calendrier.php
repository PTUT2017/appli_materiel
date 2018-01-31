<?php

$day=$_POST["day"]; 
if($day<=9)
	$day="0".$day;

$month=$_POST["month"]; 
if($month<=9)
	$month="0".$month;

$caseclick =  $_POST["year"]."-".$month."-".$day;
$caseclickaff = $day."-".$month."-".$_POST["year"];
echo "<b> Vous consultez le matériel pour le jour du <span id='dateclickaff'>".$caseclickaff."</span><div id='dateclick' style='opacity:0'>".$caseclick."</div></b><br>";

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

echo "<div class='displaywrap'>";
echo "<div id='video'><p class='titre_video'><b>Vidéo</b></p>";


$requete="SELECT designation, quantite_total, id_materiel FROM materiel WHERE categorie='video'";
$reponse=$id_connex->query($requete);
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){

				$requete2=$requete="SELECT id_materiel, id_etudiant, id_reserver, date_debut, date_retour, quantite_reserver FROM reserver";
				$reponse2=$id_connex->query($requete2);
				$qtotal=$ligne['quantite_total'];


				while ($ligne2 = $reponse2-> fetch(PDO::FETCH_ASSOC)){

					$nb_date_debut=explode("-", $ligne2['date_debut']);
					$nb_date_debut=$nb_date_debut[0].$nb_date_debut[1].$nb_date_debut[2];

					$nb_date_retour=explode("-", $ligne2['date_retour']);
					$nb_date_retour=$nb_date_retour[0].$nb_date_retour[1].$nb_date_retour[2];

					$nb_date=explode("-", $caseclick);
					$nb_date=$nb_date[0].$nb_date[1].$nb_date[2];


					if($nb_date_debut<=$nb_date && $nb_date<=$nb_date_retour && $ligne['id_materiel']==$ligne2['id_materiel']){

													$qtotal=$qtotal-$ligne2['quantite_reserver'];

						}

					}
					echo "<br>".$qtotal." ".$ligne['designation'];

		}

echo "</div>";

echo "<div id='audio'><p class='titre_audio'><b>Audio</b></p>";


$requete="SELECT designation, quantite_total, id_materiel FROM materiel WHERE categorie='son'";
$reponse=$id_connex->query($requete);
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){

				$requete2=$requete="SELECT id_materiel, id_etudiant, id_reserver, date_debut, date_retour, quantite_reserver FROM reserver";
				$reponse2=$id_connex->query($requete2);
				$qtotal=$ligne['quantite_total'];


				while ($ligne2 = $reponse2-> fetch(PDO::FETCH_ASSOC)){

					$nb_date_debut=explode("-", $ligne2['date_debut']);
					$nb_date_debut=$nb_date_debut[0].$nb_date_debut[1].$nb_date_debut[2];

					$nb_date_retour=explode("-", $ligne2['date_retour']);
					$nb_date_retour=$nb_date_retour[0].$nb_date_retour[1].$nb_date_retour[2];

					$nb_date=explode("-", $caseclick);
					$nb_date=$nb_date[0].$nb_date[1].$nb_date[2];


					if($nb_date_debut<=$nb_date && $nb_date<=$nb_date_retour && $ligne['id_materiel']==$ligne2['id_materiel']){

													$qtotal=$qtotal-$ligne2['quantite_reserver'];

						}

					}
					echo "<br>".$qtotal." ".$ligne['designation'];

		}

echo "</div>";

echo "<div id='accesoire'><p class='titre_access'><b>Accessoires</b></p>";


$requete="SELECT designation, quantite_total, id_materiel FROM materiel WHERE categorie='accessoire'";
$reponse=$id_connex->query($requete);
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){

				$requete2=$requete="SELECT id_materiel, id_etudiant, id_reserver, date_debut, date_retour, quantite_reserver FROM reserver";
				$reponse2=$id_connex->query($requete2);
				$qtotal=$ligne['quantite_total'];


				while ($ligne2 = $reponse2-> fetch(PDO::FETCH_ASSOC)){

					$nb_date_debut=explode("-", $ligne2['date_debut']);
					$nb_date_debut=$nb_date_debut[0].$nb_date_debut[1].$nb_date_debut[2];

					$nb_date_retour=explode("-", $ligne2['date_retour']);
					$nb_date_retour=$nb_date_retour[0].$nb_date_retour[1].$nb_date_retour[2];

					$nb_date=explode("-", $caseclick);
					$nb_date=$nb_date[0].$nb_date[1].$nb_date[2];


					if($nb_date_debut<=$nb_date && $nb_date<=$nb_date_retour && $ligne['id_materiel']==$ligne2['id_materiel']){

													$qtotal=$qtotal-$ligne2['quantite_reserver'];

						}

					}
					echo "<br>".$qtotal." ".$ligne['designation'];

		}

echo "</div>";

echo "<div id='lumiere'><p class='titre_lumi'><b>Lumière</b></p>";


$requete="SELECT designation, quantite_total, id_materiel FROM materiel WHERE categorie='lumiere'";
$reponse=$id_connex->query($requete);
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){

				$requete2=$requete="SELECT id_materiel, id_etudiant, id_reserver, date_debut, date_retour, quantite_reserver FROM reserver";
				$reponse2=$id_connex->query($requete2);
				$qtotal=$ligne['quantite_total'];


				while ($ligne2 = $reponse2-> fetch(PDO::FETCH_ASSOC)){

					$nb_date_debut=explode("-", $ligne2['date_debut']);
					$nb_date_debut=$nb_date_debut[0].$nb_date_debut[1].$nb_date_debut[2];

					$nb_date_retour=explode("-", $ligne2['date_retour']);
					$nb_date_retour=$nb_date_retour[0].$nb_date_retour[1].$nb_date_retour[2];

					$nb_date=explode("-", $caseclick);
					$nb_date=$nb_date[0].$nb_date[1].$nb_date[2];


					if($nb_date_debut<=$nb_date && $nb_date<=$nb_date_retour && $ligne['id_materiel']==$ligne2['id_materiel']){

													$qtotal=$qtotal-$ligne2['quantite_reserver'];

						}

					}
					echo "<br>".$qtotal." ".$ligne['designation'];

		}

echo "</div>";


echo "</div>";






$reponse->closeCursor();
$id_connex=null;

?>