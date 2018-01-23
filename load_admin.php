

<fieldset>
        <legend><h1>Réservation</h1></legend>
        <div id="form_etudiant"> 
            </br>
                         <label for="date_debut"><b>Date de réservation : </b></label> <input type="date" name="date_debut" id="date_debut"> au <input type="date" name="date_retour" id="date_retour" value="">
                     </br></br>
                         <label for="nom"><b>Nom : </b></label> <input type="text" name="nom" id="nom" value="">
                     </br></br>
                         <label for="groupe"><b>Groupe : </b></label>
                                <input type="radio" id="groupe" name="groupe" value="1A" checked="checked">1A
                                <input type="radio" id="groupe" name="groupe" value="2A">2A
                                <input type="radio" id="groupe" name="groupe" value="LP">LP
                      </br></br>
            <input type="button" name="submit" id="submit" value="Valider étudiant" class="stylebt">
            <input type="button" name="Réservations" id="res" value="Consulter Réservations" class="stylebt">
        </div>
        <div id="res_add_etud"></div>
        <div id="mat_res"></div>
         
         <div class="displaywrap" id="affmateriel">
            
         </div>
     </fieldset>

     <fieldset>
        <legend><h1>Ajout matériel base de donnée</h1></legend>

        <label for="add_designation"><b>Désignation : </b></label> <input type="text" name="add_designation" id="add_designation" value=""></br></br>
        <label for="add_categorie"><b>Catégorie : </b></label> <select name="add_categorie" id="add_categorie"></br></br>
                                                            <option value="video">Vidéo</option>
                                                            <option value="audio">Audio</option>
                                                            <option value="accesoire">Accesoires</option>
                                                            <option value="lumiere">Lumières</option>
                                                        </select></br></br>
        <b>Quantite totale : </b><input type="text" name="quantite_total" id="quantite_total" value=""></br></br>
        <input type="button" name="add_mat" id="add_mat" value="Valider Ajout Matériel" class="stylebt">
        <input type="button" name="consult_materiel" id="consult_materiel" value="Consulter Materiel" class="stylebt"> 
    </fieldset>
    <br>
    <input type="button" name="fermer" value="Fermer" id="fermer" class="stylebt">


    