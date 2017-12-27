<?php


try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

//On va afficher en colonne chaque catégorie

//Pour cela on va cibler chaque catégorie avec une requête ici vidéo

$requete="SELECT designation, id_materiel, quantite_total FROM materiel WHERE categorie='video'";
$reponse=$id_connex->query($requete);


//On met en forme les colonnes
echo "<div id='video'><b>Vidéo</b>";


while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['designation']."<select id=".$ligne['id_materiel']."><option selected='selected' value='null' id=".$ligne['id_materiel'].">Nombre</option>";

            for($i = 1; $i<=$ligne['quantite_total']; $i++){
                echo "<option value='".$i."'>".$i."</option>";
            }
            echo "</select>";
}

echo "</div>";

//Ensuite prochaine catégorie audio

$requete="SELECT designation, id_materiel, quantite_total FROM materiel WHERE categorie='son'";
$reponse=$id_connex->query($requete);

echo "<div id='audio'><b>Audio</b>";

while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['designation']."<select id=".$ligne['id_materiel']."><option selected='selected' value='null' id=".$ligne['id_materiel'].">Nombre</option>";

            for($i = 1; $i<=$ligne['quantite_total']; $i++){
                echo "<option value='".$i."'>".$i."</option>";
            }
            echo "</select>";
}

echo "</div>";

$requete="SELECT designation, id_materiel, quantite_total FROM materiel WHERE categorie='accessoire'";
$reponse=$id_connex->query($requete);
echo "<div id='accesoire'><b>Accesoires</b>";

while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['designation']."<select id=".$ligne['id_materiel']."><option selected='selected' value='null' id=".$ligne['id_materiel'].">Nombre</option>";
        
        for($i = 1; $i<=$ligne['quantite_total']; $i++){
                echo "<option value='".$i."'>".$i."</option>";
            }
            echo "</select>";
}

echo "</div>";

$requete="SELECT designation, id_materiel, quantite_total FROM materiel WHERE categorie='lumiere'";
$reponse=$id_connex->query($requete);
echo "<div id='lumiere'><b>Lumière</b>";

while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['designation']."<select id=".$ligne['id_materiel'].">
                        <option selected='selected' value='null'>Nombre</option>";
        for($i = 1; $i<=$ligne['quantite_total']; $i++){
                echo "<option value='".$i."'>".$i."</option>";
            }
            echo "</select>";
}

echo "<br><input type='submit' id='submitmatos' class='stylebt'>";

echo "</div>";

$reponse->closeCursor();
$id_connex=null;


?>