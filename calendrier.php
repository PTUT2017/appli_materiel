<?php
echo $_POST["day"]." / ";
echo $_POST["month"]." / ";
echo $_POST["year"]." ";

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
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