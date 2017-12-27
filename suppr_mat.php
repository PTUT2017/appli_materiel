<?php

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}



$requete="DELETE FROM `ptut`.`materiel` WHERE `id_materiel` = ".$_POST['id'];
$reponse=$id_connex->exec($requete);

if($reponse!=""){
    echo "Le matériel a bien été supprimé";
}
else{
    echo "Erreur";
}

$id_connex=null;



?>