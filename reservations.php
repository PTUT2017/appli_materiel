<?php


try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}


echo "<div>";

$requete1="SELECT * FROM `reserver`";
$reponse=$id_connex->query($requete1);
$nb=$reponse->rowCount();
if ($nb > 0) {

	
	$requete="SELECT id_reserver, nom, date_debut, date_retour, designation from reserver join etudiant on reserver.id_etudiant=etudiant.id_etudiant join materiel on reserver.id_materiel=materiel.id_materiel";
	$reponse=$id_connex->query($requete);

		while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
		
				
			echo "<br>".$ligne['nom']." du ".$ligne['date_debut']." au ".$ligne['date_retour']." ".$ligne['designation']."<input type='checkbox' name='check' id='".$ligne['id_reserver']."'><br>";


			

		}

}

else{
	echo "Il n'y a aucune reservation";
}


	echo "</div>";






?>