<?php $titre="Rendez-vous pour Carte d'identité et Passeport | Mairie de Dinan";?>
<?php $titre_sexion_central="3. les personnes concernées par le rendez-vous";?>



<form action="/FM_ETAT_CIVIL/Motifs/Personnes/Confirmation" method="post" class="form_personnes_class" id="form_personnes_id">
    <input type="hidden" name="guichet" id="guichet_id" value="">
    <p class="titre_partie_personne">Détailles des personnes concernées par pièce</p>
    <div class="partie_personne">
        <div class="personne1_class" id="personne1_id">
            <p class="titre_personne1" id="titre_personne1_id">titre_personne1</p>

            <p><input type="text" name="nom1" placeholder="Nom" class="nom_class" id="nom_id1" value=""></p>
            <p><input type="text" name="prenom1" placeholder="Prenom" class="prenom_class" id="prenom_id1" value=""></p>
            <p><input type="number" name="age1" placeholder="Age" class="age_class" id="age_id1" value=""></p>
            <input type="hidden" name="motif1" id="motif1" value="">
            <input type="hidden" name="quantite1" id="quantite1" value="">
            <p class="erreur_personnes" id="erreur_personnes1_id" ></p>
        </div>

        <?php echo $_SESSION['nombrePersonnes']?>
        <?php echo '<br>'?>
        <?php echo $_SESSION['nb_cni']?>
        <?php echo '<br>'?>
        <?php echo $_SESSION['nb_pass']?>
        <?php echo '<br>'?>
        <?php echo $_SESSION['nb_cni_pass']?>

        <hr id="separe1">


        <div class="personne2_class" id="personne2_id">

            <p class="titre_personne2" id="titre_personne2_id"><?php echo 'titre2'?></p>

            <p><input type="text" name="nom2" placeholder="Nom" class="nom_class" id="nom_id2" value=""></p>
            <p><input type="text" name="prenom2" placeholder="Prenom" class="prenom_class" id="prenom_id2" value=""></p>
            <p><input type="number" name="age2" placeholder="Age" class="age_class" id="age_id2" value=""></p>
            <input type="hidden" name="motif2" id="motif2" value="">
            <input type="hidden" name="quantite2" id="quantite2" value="">
            <p class="erreur_personnes" id="erreur_personnes2_id" ></p>
        </div>
        <hr id="separe2">

        <div class="personne3_class" id="personne3_id">

            <p class="titre_personne3" id="titre_personne3_id"><?php echo 'titre3'?></p>

            <p><input type="text" name="nom3" placeholder="Nom" class="nom_class" id="nom_id3" value=""></p>
            <p><input type="text" name="prenom3" placeholder="Prenom" class="prenom_class" id="prenom_id3" value=""></p>
            <p><input type="number" name="age3" placeholder="Age" class="age_class" id="age_id3" value=""></p>
            <input type="hidden" name="motif3" id="motif3" value="">
            <input type="hidden" name="quantite3" id="quantite3" value="">
            <p class="erreur_personnes" id="erreur_personnes3_id" ></p>
        </div>
        <hr id="separe3">
        <div class="personne4_class" id="personne4_id">

            <p class="titre_personne4" id="titre_personne4_id"><?php echo 'titre4'?></p>

            <p><input type="text" name="nom4" placeholder="Nom" class="nom_class" id="nom_id4" value=""></p>
            <p><input type="text" name="prenom4" placeholder="Prenom" class="prenom_class" id="prenom_id4" value=""></p>
            <p><input type="number" name="age4" placeholder="Age" class="age_class" id="age_id4" value=""></p>
            <input type="hidden" name="motif4" id="motif4" value="">
            <input type="hidden" name="quantite4" id="quantite4" value="">
            <p class="erreur_personnes" id="erreur_personnes4_id" ></p>
        </div>
    </div>

    <p class="erreur_personnes" id="erreur_personnes_id" ></p>


    <hr id="sep2">
    <p class="titre_partie_responsable">Le responsable du rendez-vous</p>

    <div class="partie_responsable" id="responsable_id">

        <div class="nom_prenom_responsable">
            <p><input type="text" name="nom_responsable" placeholder="Nom" class="nom_class" id="nom_id_resp" value=""></p>
            <p><input type="text" name="prenom_responsable" placeholder="Prenom" class="prenom_class" id="prenom_id_resp" value=""></p>
            <p><input type="number" name="age_responsable" placeholder="Age" class="age_class" id="age_id_resp" value=""></p>
            <p class="erreur_responsables" id="erreur_responsablesRes_id" ></p>
        </div>

        <hr class="hr_resp">

        <div class="civilite_telephone_email_responsable">
            <p><input type="text" name="civilite_responsable" placeholder="Civilite" class="civilite_class" id="civilite_id" value=""></p>
            <p><input type="text" name="telephone_responsable" placeholder="Telephone" class="telephone_class" id="telephone_id" value=""></p>
            <p><input type="email" name="email_responsable" placeholder="Email" class="email_class" id="email_id" value=""></p>
            <p class="erreur_responsables" id="erreur_responsablesRes2_id" ></p>
        </div>

    </div>


    <hr id="sep1">
    <div class="date_heure_responsable">
        <p class="titre_personne4">Date et heure du rendez-vous</p>
        <p><input type="text" name="date_rdv" placeholder="Date au format jj-mm-aaaa" class="date_rdv_class" id="date_rdv_id" value="""></p>

        <p><input type="text" name="heure_rdv" placeholder="Heure au format 08:30" class="heure_rdv_class" id="heure_rdv_id" value=""></p>
    </div>

    <p class="erreur_rdv" id="erreur_rdv_id" ></p>
    <p class="erreur_test" id="erreur_test_id" ></p>



    <div class="bt_continuer_retour2">

        <a href="/FM_ETAT_CIVIL/Motifs/" class="lien_bt_retour">RETOUR</a>

        <input type="submit" name="bt_continue" class="bt_continuer" id="bt_continuer_id" value="CONTINUER">

    </div>

</form>