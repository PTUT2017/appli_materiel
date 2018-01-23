<?php

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

$reg='#[0-9]#';
$quantite_total=$_POST['quantite_total'];

if(preg_match($reg, $quantite_total) && isset($_POST['designation'])){
		$requete="INSERT INTO materiel (designation, categorie, quantite_total) VALUES ('".$_POST["designation"]."', '".$_POST["categorie"]."', '".$_POST['quantite_total']."')";
		$reponse=$id_connex->exec($requete);

		if($reponse!=""){
		    echo "L'objet a bien été ajouter à la base de donnée";
		}
		else{

		    echo "L'ajout à échoué";
		}

		$id_connex=null;
}
else
{
	echo "Champs invalides";
}



?>
<input type="button" name="ok" value="retour" id="ok" class="stylebt">