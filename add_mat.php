<?php


$designation = $_POST['designation'];
$categorie = $_POST['categorie'];
$quantite_total = $_POST['quantite_total'];



 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}



$requete = $id_connex->prepare("INSERT INTO materiel (designation, categorie, quantite_total) VALUES (?, ?, ?)");
$requete->execute(array($designation, $categorie, $quantite_total));

if($requete!=""){
    echo "L'objet a bien été ajouter à la base de donnée";
}
else{

    echo "L'ajout à échoué";
}

$id_connex=null;

?>
<input type="button" name="fermer" value="fermer" id="fermer" class="stylebt">