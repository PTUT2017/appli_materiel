<?php 
	

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

//Ici on vérifie si tout les infos sont exactes

$reg='#[A-Za-z]#';

$nom=$_POST['nom'];
$nom = strtolower($nom);

$regdate="#^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$#";
$date_debut=$_POST['date_debut'];
$date_retour=$_POST['date_retour'];
echo $date_retour;

if($date_retour!="")
{
	//Ici on vérifie si la date de début est bien inférieur à la date de retour

	$nb_date_debut=explode("-", $date_debut);
	$nb_date_debut=$nb_date_debut[0].$nb_date_debut[1].$nb_date_debut[2];

	$nb_date_retour=explode("-", $date_retour);
	$nb_date_retour=$nb_date_retour[0].$nb_date_retour[1].$nb_date_retour[2];

	if($nb_date_debut<=$nb_date_retour)
		$dateok=1;
	else
		$dateok=0;
}



if(preg_match($reg, $nom) && preg_match($regdate, $date_debut) && preg_match($regdate, $date_retour) && $dateok==1){

	
			//On va tester si l'étudiant n'est aps déja présent dans la base de donnée
			$requete="SELECT nom FROM etudiant WHERE nom='".$nom."'";
			$reponse=$id_connex->query($requete);
			$nb=$reponse->rowCount();

			if($nb==0){

				$requete="INSERT INTO etudiant (nom, groupe) VALUES ('".$_POST["nom"]."', '".$_POST["groupe"]."')";
				$reponse=$id_connex->exec($requete);

				$requete="SELECT id_etudiant FROM etudiant ORDER BY id_etudiant DESC LIMIT 1";
				$reponseid=$id_connex->query($requete);


				if($reponse!=""){
				    echo "L'ajout dans la base de donnée a bien été pris en compte, votre id étudiant est de <div id='idaff'>";
					    while ($ligne = $reponseid-> fetch(PDO::FETCH_ASSOC)){
					    	echo $ligne['id_etudiant']."</div>";
					    }
					    echo "<br>Veuillez sélectionner le matériel çi dessous";
					
				}
				else
				{
			    	echo "La réservation a échoué";
				}

			}
			else
			{

				$requete="SELECT id_etudiant FROM etudiant WHERE nom='".$nom."'";
				$reponseid=$id_connex->query($requete);
				echo "Votre nom était déja présent dans la base de donnée (".$nom."), votre id étudiant est de <div id='idaff'>";
				while ($ligne = $reponseid-> fetch(PDO::FETCH_ASSOC)){
					    	echo $ligne['id_etudiant']."</div>";
					    }
					    echo "<br>Veuillez sélectionner le matériel çi dessous";
			}









			
}
else
{
	echo 'Un des champs remplis est invalide';
}


$id_connex=null;
   
?>
