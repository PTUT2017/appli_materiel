<?php

try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}





echo json_encode($_POST['id']);
echo $_POST['id'][0];


$requete="DELETE FROM `ptut`.`reserver` WHERE `reserver`.`id_reserver` = ".$_POST['id'][0];



?>