<?php $titre="Rendez-vous pour Carte d'identité et Passeport | Mairie de Dinan";?>
<?php $titre_sexion_central="2. choix du motif du rendez-vous";?>
<?php $hidden='1' ;?>

<input type="hidden" name="indice1" value="1" id="indice">

<div class="alerte">

    <img src="/Projet_etatcivil_objet/src/IMAGES/utilisateur/picto_alert.png" class="image_alerte">
    <p class="text_alert1">Si vous souhaitez prendre rendez-vous pour plus de 4 personnes,</p>
    <p class="text_alert2">veuillez contacter le service des titres d'identité au 02 96 39 22 43.</p>
    <p class="text_alert3">Délais de minimum 10 semaines pour l’obtention des titres.</p>

</div>

<form action="/FM_ETAT_CIVIL/Motifs/Personnes" method="post" class="form_quantité_class" id="form_quantité_id">

    <div class="quantité_personne">
        <p class="question_nb_personne">Pour combien de personnes voulez-vous prendre rendez-vous ?</p>
        <input type="number" name="nb_personnes_name" id="nb_personnes_id" class="nb_prsonnes_class" value=0>
        <p class="text_bt_valider"> <a href="" class="bt_valider_class" id="bt_valider_id"> valider </a></p>
        <div id="erreur_nb_personnes"><p>Merci de renseigner le nombre de personnes pour la prise de rendez-vous.</p></div>

        <div id="alert_nb_personnes" class="erreur2">
            <p><span style="color: rgb(198, 41, 54); font-family: verdana, arial, sans-serif; font-size: 14px; font-weight: 700;">Si vous souhaitez prendre rendez-vous pour plus de 4&nbsp;personnes,</span></p>
            <p><span style="color: rgb(198, 41, 54); font-family: verdana, arial, sans-serif; font-size: 14px; font-weight: 700;">veuillez contacter le service des titres d'identité au 02 96 39 22 43.</span></p>
            <p><span style="font-size:16px;"><span style="color:#FF0000;"><strong>Délais de minimum 10 semaines pour l’obtention des titres.</strong></span></span></p>
        </div>

    </div>



    <div class="motif_quantité_class" id="motif_quantité_id">

        <div class="cni_pass_class" id="cni_pass_id">

            <div class="piece_cni_pass">

                <div class="img_cni_pass">
                    <img src="/Projet_etatcivil_objet/src/IMAGES/utilisateur/picto_passeport_ci.png" class="image_cni_pass">
                </div>

                <p class="text_cni_pass">Carte d'identité & Passeport</p>

            </div>

            <p class="text_quantité">Quantité</p>
            <p class="input_cni_pass"><input type="number" name="quantité_cni_pass" value="0" class="quantité_cni_pass_class" id="quantité_cni_pass_id"></p>

        </div>

        <div class="cni_class" id="cni_id">

            <div class="piece_cni">
                <div class="img_cni">
                    <img src="/Projet_etatcivil_objet/src/IMAGES/utilisateur/picto_ci.png" class="image_cni">
                </div>
                <p class="text_cni">Carte d'identité</p>

            </div>

            <p class="text_quantité">Quantité</p>
            <p class="input_cni"><input type="number" name="quantité_cni" value="0" class="quantité_cni_class" id="quantité_cni_id"></p>


        </div>


        <div class="pass_class" id="pass_id">

            <div class="piece_pass">
                <div class="img_pass">
                    <img src="/Projet_etatcivil_objet/src/IMAGES/utilisateur/picto_passeport.png" class="image_pass">
                </div>
                <p class="text_pass">Passeport</p>
            </div>

            <p class="text_quantité">Quantité</p>
            <p class="input_pass"><input type="number" name="quantité_pass" value="0" class="quantité_pass_class" id="quantité_pass_id"></p>


        </div>

    </div>

    <div id="erreur_motif_quantité"><p>Veuillez saisir le nombre de personnes pour chaque pièce demander </p></div>
    <div id="erreur_motif_quantité2"><p>Le nombre total de personnes par pièce saisi ne correspond pas au nombre de personnes saisi plus haut  </p></div>

    <div class="bt_continuer_retour" id="bt_continuer_retour_id">

        <a href="/FM_ETAT_CIVIL/" class="lien_bt_retour">RETOUR</a>

        <input type="submit" name="bt_continue" class="bt_continuer" id="bt_continuer_id" value="CONTINUER">

    </div>

</form>
