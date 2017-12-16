<?php
$caseclick = $_POST["day"]."-".$_POST["month"]."-".$_POST["year"];
echo $caseclick."<br>";

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

$requete="SELECT id_materiel, id_etudiant, id_reserver, date_debut, date_retour, quantite_reserver FROM reserver";
$reponse=$id_connex->query($requete);
		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
					$datetimedebut = new DateTime($ligne['date_debut']);
					$datetimeretour = new DateTime($ligne['date_retour']);
					$datetimecase = new DateTime($caseclick);

					$intervalreserv = $datetimedebut->diff($datetimeretour);
					echo $intervalreserv->format('%R%a days');

					$intervalcase_debut = $datetimedebut->diff($datetimecase);
					echo $intervalcase_debut->format('%R%a days');

					$intervalcase_retour = $datetimecase->diff($datetimeretour);
					echo $intervalcase_retour->format('%R%a days')."<br>";

		}





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