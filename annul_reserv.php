<?php

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}


$string=implode(",", $_POST['id']);
$requete="DELETE FROM `ptut`.`reserver` WHERE `reserver`.`id_reserver` IN (".$string.")";
$reponse=$id_connex->exec($requete);

if($reponse!=""){
    echo "Les résevations ont bien été annulés";
}
else{

    echo "Erreur";
}

$id_connex=null;

?>