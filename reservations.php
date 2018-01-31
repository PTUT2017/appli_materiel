<?php


try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}


echo "<div id='contain_reserv'><b> Cochez une ou plusieurs case(s) pour supprimer une ou des réservation(s)</b>";

$requete1="SELECT * FROM `reserver`";
$reponse=$id_connex->query($requete1);
$nb=$reponse->rowCount();
if ($nb > 0) {

	
	$requete="SELECT id_reserver, nom, date_debut, date_retour, designation from reserver join etudiant on reserver.id_etudiant=etudiant.id_etudiant join materiel on reserver.id_materiel=materiel.id_materiel ORDER BY date_debut";
	$reponse=$id_connex->query($requete);

		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
		
				
			echo "<div class='reserv'>".$ligne['nom']." a réservé du <b>".$ligne['date_debut']."</b> au <b>".$ligne['date_retour']."</b> : ".$ligne['designation']."<input type='checkbox' name='check' id='".$ligne['id_reserver']."'><br></div>";


			

		}

}

else{
	echo "Il n'y a aucune reservation pour le moment";
}


	echo "</div>";






?>