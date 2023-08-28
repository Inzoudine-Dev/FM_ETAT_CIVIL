<?php $titre="Rendez-vous pour Carte d'identité et Passeport | Mairie de Dinan";?>
<?php $titre_sexion_central="4. confirmation des données saisies";?>
<?php $numero="";?>
<?php $hidden="3" ;?>

<div class="confirm">
    <div class="infos_confirm">

        <p>Le rendez-vous est pris pour :</p>
        <p class="personnes1"><?php echo $nom1?>
            <?php echo '<br>'?>
            <?php echo $prenom1?>
            <?php echo '<br>'?>
            <?php echo $age1?></p>
        <p class="personnes2"></p>
        <p class="personnes3"></p>
        <p class="personnes4"></p><br>

        <?php echo $nb_cni_pass?>
        <?php echo '<br>'?>
        <?php echo $nb_cni?>
        <?php echo '<br>'?>
        <?php echo $nb_pass?>

        <p>Le responsable du rendez-vous et ses coordonnées de contact sont :</p>
        <p class="personnes_responsable"></p>
        <p class="personnes_responsable"></p>
        <p class="personnes_responsable"></p><br>
        <p class="personnes_responsable"></p>
        <p class="personnes_responsable"></p>
        <p class="personnes_responsable"></p><br>

        <p>La date, l'heure et le lieu du rendez-vous sont:</p>
        <p class="date_heure_rdv"></p>
        <p class="date_heure_rdv"></p>
        <p></p>

    </div>

</div>
<div class="bt_confirmer_modifier">

    <a href="/Motifs/Personnes/Confirmation" class="lien_bt_modifier">MODIFIER</a>

    <a href="/Motifs/Personnes/Confirmation/Recapitulations" class="bt_confirmer">CONFIRMER</a>

</div>

