<?php

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

$requete="INSERT INTO materiel (designation, categorie) VALUES ('".$_POST["designation"]."', '".$_POST["categorie"]."')";
$reponse=$id_connex->exec($requete);

if($reponse!=""){
    echo "L'objet a bien été ajouter à la base de donnée";
}
else{

    echo "L'ajout à échoué";
}

$id_connex=null;

?>
<input type="button" name="fermer" value="fermer" id="fermer">