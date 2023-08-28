
<!DOCTYPE html>

<html lang="fr" >

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titre ?></title>
    <link rel="shortcut icon" href="/FM_ETAT_CIVIL/Public/Images/Rdv/Prendre/logo.png" />
    <link rel="stylesheet" type="text/css" href="/FM_ETAT_CIVIL/Public/Css/CssBases/styleBaseRdv.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/FM_ETAT_CIVIL/Public/Css/CssViews/Rdv/Prendre/styleAccueil.css" media="all" />

</head>

<body>

<header id="header">

    <div class="logo_div">
        <a href="/FM_ETAT_CIVIL/"><img class="logo_img" src="/FM_ETAT_CIVIL/Public/Images/Rdv/Prendre/logo.png" /></a>
    </div>


    <p class="accroche_header">Besoin d'une carte d'identité ou d'un passeport ?
        <br>
        <span class="span1" ><strong>Prenons rendez-vous !</strong></span>
    </p>

    <div class="bt_header">

        <button type="button" class="bt_actualités"><a href="http://www.dinan.fr/115/actualites" target="blank" class="lien_actualité">Actualités</a></button>
        <br>
        <button type="button" class="bt_accueil"><a href="/FM_ETAT_CIVIL/" class="lien_accueil">Accueil</a></button>

    </div>

</header>
<!------------------------------------------------------------------------------------------------------------->
<div class="conteneur_general" id="conteneur_general_id">

    <div id="indicateur_progression">

        <div class="bar"></div>

        <div class="circle" id="circle1"></div>

        <div class="bar"></div>

        <div class="circle" id="circle2" ></div>

        <div class="bar"></div>

        <div class="circle" id="circle3"></div>

        <div class="bar"></div>

        <div class="circle" id="circle4" ></div>

        <div class="bar"></div>

    </div>

    <section class="conteneur_central" id="sexion">

        <h1 class="titre_sexion" id="titre_sexion_id"><?php echo $titre_sexion_central ?></h1>

        <?php echo $content ?>

    </section>

</div>
<!------------------------------------------------------------------------------------------------------------->


<footer id="footer">

    <ul class="liste_footer">

        <li class="li1"><a href="" >Mentions légales</a></li>
        <li class="li_tiret">-</li>
        <li class="li2"><a href="" >Protection des données</a></li>
        <li class="li_tiret">-</li>
        <li class="li3"><a href="" >Agence Web Atout Graph</a></li>

    </ul>

</footer>

</body>
</html>