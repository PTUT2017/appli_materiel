<?php
$caseclick = $_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
echo $caseclick."<br>";

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

echo "<div class='displaywrap'>";
echo "<div id='video'>Vidéo";

$requete="SELECT id_materiel, id_etudiant, id_reserver, date_debut, date_retour, quantite_reserver FROM reserver";
$reponse=$id_connex->query($requete);
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
				$nb_date_debut=explode("-", $ligne['date_debut']);
				$nb_date_debut=$nb_date_debut[0].$nb_date_debut[1].$nb_date_debut[2];

				$nb_date_retour=explode("-", $ligne['date_retour']);
				$nb_date_retour=$nb_date_retour[0].$nb_date_retour[1].$nb_date_retour[2];

				$nb_date=explode("-", $caseclick);
				$nb_date=$nb_date[0].$nb_date[1].$nb_date[2];

				echo $nb_date." ".$nb_date_debut." ".$nb_date_retour."<br>";

				if($nb_date_debut<=$nb_date && $nb_date<=$nb_date_retour){
								echo "compris<br>";
								
								// On affiche le matériel qui a été réserver
								$requete2="SELECT designation, quantite_total, id_materiel FROM materiel WHERE categorie='video' AND id_materiel='".$ligne['id_materiel']."'";
								$reponse2=$id_connex->query($requete2);
								while ($ligne2 = $reponse2-> fetch(PDO::FETCH_ASSOC)){
											$qtotal=$ligne2['quantite_total']-$ligne['quantite_reserver'];
											echo "<br>".$qtotal." ".$ligne2['designation'];
									}

				}
				else
				{
								// On affiche le matériel qui n'a pas été réserver
								$requete2="SELECT designation, quantite_total, id_materiel FROM materiel WHERE categorie='video' AND id_materiel!='".$ligne['id_materiel']."'";
								$reponse2=$id_connex->query($requete2);
								while ($ligne2 = $reponse2-> fetch(PDO::FETCH_ASSOC)){
											echo "<br>".$ligne2['quantite_total']." ".$ligne2['designation'];
										}
				}

		}

echo "</div>";
echo "</div>";






echo "<div class='displaywrap'>";

	$requete="SELECT designation, quantite_total FROM materiel WHERE categorie='video'";
	$reponse=$id_connex->query($requete);
	echo "<div id='video'>Vidéo";
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
			echo "<br>".$ligne['quantite_total']." ".$ligne['designation'];
				}
	echo "</div>";


	$requete="SELECT designation, quantite_total FROM materiel WHERE categorie='son'";
	$reponse=$id_connex->query($requete);
	echo "<div id='audio'>Audio";
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
			echo "<br>".$ligne['quantite_total']." ".$ligne['designation'];
				}
	echo "</div>";


	$requete="SELECT designation, quantite_total FROM materiel WHERE categorie='accessoire'";
	$reponse=$id_connex->query($requete);
	echo "<div id='accesoire'>Accesoires";
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
			echo "<br>".$ligne['quantite_total']." ".$ligne['designation'];
				}
	echo "</div>";


	$requete="SELECT designation, quantite_total FROM materiel WHERE categorie='eclairage'";
	$reponse=$id_connex->query($requete);
	echo "<div id='lumiere'>Lumiere";
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
			echo "<br>".$ligne['quantite_total']." ".$ligne['designation'];
				}
	echo "</div>";

echo "</div>";


$reponse->closeCursor();
$id_connex=null;

?>