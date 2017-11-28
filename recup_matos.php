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

$requete="SELECT designation, id_materiel FROM materiel WHERE categorie='video'";
$reponse=$id_connex->query($requete);


//On met en forme les colonnes
echo "<div id='video'><b>Vidéo</b>";


while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['id_materiel']." ".$ligne['designation']."<select id=".$ligne['id_materiel'].">
                        <option selected='selected' value='null' id=".$ligne['id_materiel'].">Nombre</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                    </select>";
}

echo "</div>";

//Ensuite prochaine catégorie audio

$requete="SELECT designation, id_materiel FROM materiel WHERE categorie='audio'";
$reponse=$id_connex->query($requete);

echo "<div id='audio'><b>Audio</b>";

while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['id_materiel']." ".$ligne['designation']."<select id=".$ligne['id_materiel'].">
                        <option selected='selected' value='null' id=".$ligne['id_materiel'].">Nombre</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                    </select>";
}

echo "</div>";

$requete="SELECT designation, id_materiel FROM materiel WHERE categorie='accesoire'";
$reponse=$id_connex->query($requete);
echo "<div id='accesoire'><b>Accesoires</b>";

while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['id_materiel']." ".$ligne['designation']."<select id=".$ligne['id_materiel'].">
                        <option selected='selected' value='null' id=".$ligne['id_materiel'].">Nombre</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                    </select>";
}

echo "</div>";

$requete="SELECT designation, id_materiel FROM materiel WHERE categorie='lumiere'";
$reponse=$id_connex->query($requete);
echo "<div id='lumiere'><b>Lumière</b>";

while ($ligne = $reponse-> fetch(PDO::FETCH_ASSOC)){
	echo "<br>".$ligne['id_materiel']." ".$ligne['designation']."<select id=".$ligne['id_materiel'].">
                        <option selected='selected' value='null'>Nombre</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                    </select>";
}

echo "</div>";

$reponse->closeCursor();
$id_connex=null;


?>