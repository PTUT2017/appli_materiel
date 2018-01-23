<?php

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}


$requete="INSERT INTO reserver (id_etudiant, id_materiel, date_debut, date_retour, quantite_reserver) VALUES ('".$_POST["id_etudiant"]."', '".$_POST["id_materiel"]."', '".$_POST["date_debut"]."', '".$_POST["date_retour"]."', '".$_POST["quantite_reserver"]."')";
$reponse=$id_connex->exec($requete);


if($reponse!=""){
    echo "La réservation a bien été pris en compte <input type='button' id='ok' class='stylebt' value='ok'>";
}
else{

    echo "La réservation a échoué";
}

$id_connex=null;
?>