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
$requete="SELECT quantite_total FROM materiel WHERE id_materiel=".$_POST["id_materiel"];
$reponseqtotal=$id_connex->query($requete);
		while ($ligne = $reponseqtotal-> fetch(PDO::FETCH_ASSOC)){
				    	$qtotal=$ligne['quantite_total'];
				    }


//Ici on soustrait au nombre total de matériel, le nombre de matériel réservé
$qreserv=$_POST["quantite_reserver"];

$qtotal=$qtotal-$qreserv;



$requete="UPDATE materiel SET quantite_total='".$qtotal."' WHERE id_materiel=".$_POST['id_materiel'];
$reponse_update_total=$id_connex->exec($requete);

if($reponse!="" && $reponseqtotal!="" && $reponse_update_total!=""){
    echo "La réservation a bien été pris en compte";
}
else{

    echo "La réservation a échoué";
}
$id_connex=null;
?>