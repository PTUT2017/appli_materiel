<?php 
	
$nom = $_POST['nom'];
$groupe = $_POST['groupe'];



 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}



$requete = $id_connex->prepare("INSERT INTO etudiant (nom, groupe) VALUES (?, ?)");
$requete->execute(array($nom, $groupe));




$requete="SELECT id_etudiant FROM etudiant ORDER BY id_etudiant DESC LIMIT 1";
$reponseid=$id_connex->query($requete);


	if($requete!=""){
	    echo "La réservation a bien été pris en compte, l'id étudiant est de <div id='idaff'>";
		    while ($ligne = $reponseid-> fetch(PDO::FETCH_ASSOC)){
		    	echo $ligne['id_etudiant']."</div>";
		    }
		    echo "<br>Veuillez sélectionner le matériel çi dessous";
		
	}
else{

    echo "La réservation a échoué";
}

$id_connex=null;
   
?>
