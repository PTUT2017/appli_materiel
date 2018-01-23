<?php 
	

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

$reg='#[A-Za-z]#';
$nom=$_POST['nom'];
$regdate="#^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$#";
$date_debut=$_POST['date_debut'];
$date_retour=$_POST['date_retour'];


if(preg_match($reg, $nom) && preg_match($regdate, $date_debut) && preg_match($regdate, $date_retour)){

	
			$requete="INSERT INTO etudiant (nom, groupe) VALUES ('".$_POST["nom"]."', '".$_POST["groupe"]."')";
			$reponse=$id_connex->exec($requete);

			$requete="SELECT id_etudiant FROM etudiant ORDER BY id_etudiant DESC LIMIT 1";
			$reponseid=$id_connex->query($requete);


				if($reponse!=""){
				    echo "La réservation a bien été pris en compte, l'id étudiant est de <div id='idaff'>";
					    while ($ligne = $reponseid-> fetch(PDO::FETCH_ASSOC)){
					    	echo $ligne['id_etudiant']."</div>";
					    }
					    echo "<br>Veuillez sélectionner le matériel çi dessous";
					
				}
			else{

			    echo "La réservation a échoué";
			}
}
else
{
	echo 'Un des champs remplis est invalide';
}


$id_connex=null;
   
?>
