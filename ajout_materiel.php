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

// On récupère la quantite_total pour cette id
$requete="SELECT quantite_restante FROM materiel WHERE id_materiel=".$_POST["id_materiel"];
$reponseqrest=$id_connex->query($requete);
		while ($ligne = $reponseqtotal-> fetch(PDO::FETCH_ASSOC)){
				    	$qrest=$ligne['quantite_restante'];
				    }


//Ici on soustrait au nombre total de matériel, le nombre de matériel réservé
$qreserv=$_POST["quantite_reserver"];

$qrest=$qrest-$qreserv;



$requete="UPDATE materiel SET quantite_restante='".$qrest."' WHERE id_materiel=".$_POST['id_materiel'];
$reponse_update_rest=$id_connex->exec($requete);

if($reponse!="" && $reponseqrest!="" && $reponse_update_rest!=""){
    echo "La réservation a bien été pris en compte";
}
else{

    echo "La réservation a échoué";
}

$id_connex=null;
?>