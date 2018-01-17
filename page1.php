<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Un site de démonstration | N.Roussel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<!--/head-->

<body>



    <!--Menu de navigation dans la page1.php-->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Qu'est ce que PHP?</h1>
            <p class="lead">PHP est un langage de programmation qui s'intègre dans les pages HTML. Il permet entre autres de rendre automatiques des tâches répétitives, notamment grâce à la communication avec une base de données (utilisation la plus courante de PHP). </p>
            <hr class="m-y-md">
            <p>L'essentiel des fonctionnalités de PHP et son utilisation, sont réunis ici.</p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/fonctionnement-d-un-site-ecrit-en-php" role="button">Voir le cours Openclassrooms</a>
            </p>
        </div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Accueil</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#variables">Les variables</a></li>
                <li><a href="#conditions_et_boucles">Conditions et boucles while</a></li>
                <li><a href="#boucles_for">Boucles For</a></li>
                <li><a href="#tableaux">Les tableaux</a></li>
                <li><a href="#boucle_foreach">Boucles Foreach</a></li>
                <li><a href="#fonctions">Les fonctions</a></li>
                <li><a href="#get">#GET</a></li>
                <li><a href="#post">#POST</a></li>
            </ul>
        </div>
    </nav>
    <!--Menu de navigation dans la page1.php-->





    <!-----------------------------------------------------------DEBUT SECTION DES VARIABLES------------------------------------------------->

    <section id="variables">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Les principales variables en PHP</h1>
                        <h3>En PHP, une variable commence par le signe $, suivi du nom de la variable.</h3>
                        <h4> Une variable est toujours défini par un nom et une valeur.</h4>
                    </div>
                </div>
            </div>




            <!--/début Variable date et heure du jour-->
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-history"></i>
                        </div>
                        <div class="service-info">
                            <h3>Afficher une variable temporelle simple <br> (date et heure)</h3>
                            <p> Quel jour sommes-nous et quelle heure est-il?</p>
                            <a href="php/Afficher_date_et_heure_du_jour.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/afficher_date_et_heure_du_jour.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/fin Variable date et heure du jour-->




                    <!--/début Variable age du visiteur prédéfini-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="service-info">
                            <h3>Afficher une variable prédéfinie (simple)<br> (age d'un visiteur)</h3>
                            <p>Quel est mon age?</p>
                            <a href="php/age_du_visiteur.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/age_visiteur.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/fin Variable age du visiteur prédéfini-->



                    <!--/Début Afficher des nombres décimaux-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="service-icon">
                            <i class="fa fa-calculator"></i>
                        </div>
                        <div class="service-info">
                            <h3>Afficher des nombres décimaux <br> (type float)</h3>
                            <p>Quel est mon poids (en Kg)?</p>
                            <a href="php/Afficher_nombres_decimaux.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/nombres_decimaux(float).JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Afficher des nombres décimaux-->



                    <!--/Début Afficher la somme de 2 variables-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                        <div class="service-icon">
                            <i class="fa fa-plus-square-o"></i>
                        </div>
                        <div class="service-info">
                            <h3>Afficher la somme de 2 variables <br> (x=5 et y=4)</h3>
                            <p>Combien font 5 + 4 ?</p>
                            <a href="php/Afficher_la_somme_de_2_variables.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/somme_de_2_variables.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Afficher la somme de 2 variables-->




                    <!--/Début Afficher un calcul simple de variables-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                        <div class="service-icon">
                            <i class="fa fa-calculator"></i>
                        </div>
                        <div class="service-info">
                            <h3>Afficher un calcul simple <br> (3 variables)</h3>
                            <p>Combien font 2.5 x 10? (en euros)</p>
                            <a href="php/Afficher_un_calcul_simple_de_variables.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/calcul_simple_de_variables.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Afficher dun calcul simple de variables-->



                    <!-- Début afficher du texte et des variables-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                        <div class="service-icon">
                            <i class="fa fa-calculator"></i>
                        </div>
                        <div class="service-info">
                            <h3>Afficher du texte avec les variables <br> (La concaténation)</h3>
                            <p>Quel est mon lieu de résidence?</p>
                            <a href="php/variable_et_texte.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/variables_et_texte.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Afficher dun calcul simple de variables-->
                </div>
            </div>
        </div>

    </section>

    <!-------------------------------------------------------------FIN SECTION DES VARIABLES-------------------------------------------------------------->





    <!-----------------------------------------------------DEBUT SECTION DES CONDITIONS ET BOUCLES SIMPLES--------------------------------------------------------->


    <section id="conditions_et_boucles">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Les conditions et les boucles WHILE</h1>
                        <p>Les conditions permettent d'exécuter ou non une série d'instructions en fonction d'une condition d'origine. </p>
                        <h3>Les boucles permettent de répéter une instruction</h3>
                    </div>
                </div>
            </div>

            <!--/Début conditions d'entrer selon des critères d'age-->
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-user-times"></i>
                        </div>
                        <div class="service-info">
                            <h3>Conditions if, else et elseif<br> (type autorisation_entrer)</h3>
                            <p> Vous avez 15 ans! Pouvez-vous accèder à mon site?</p>
                            <a href="php/Conditions%20%20autorisation_enter_non.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/conditions_acces_refuse.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin conditions d'entrer selon des critères d'age-->





                    <!--/Début conditions d'entrer selon des critères d'age-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <div class="service-info">
                            <h3>Conditions if, else et elseif<br> (type autorisation_entrer)</h3>
                            <p> Vous avez 50 ans! Pouvez-vous accèder à mon site?</p>
                            <a href="php/Conditions%20%20autorisation_enter_oui.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/conditions_acces_autorise.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin conditions d'entrer selon des critères d'age-->






                    <!--/Début conditions avec switch-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="service-icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="service-info">
                            <h3>Conditions avec SWITCH<br> (Si beaucoup de conditions)</h3>
                            <p> (Ex: Vous avez 10/20)</p>
                            <a href="php/Conditions_avec_switch.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/condition_switch.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin conditions avec switch-->





                    <!--/Début conditions condensées (Les ternaires)-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                        <div class="service-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="service-info">
                            <h3>Conditions condensées <br> (Les ternaires avec Booléen)</h3>
                            <p>Quel age avez vous? Etez vous majeur?</p>
                            <a href="php/Conditions_ternaires.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/conditions_condensees.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin conditions condensées (Les ternaires)-->






                    <!--/Début Afficher une boucle simple (répéter un certain nombre de fois la même instruction-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                        <div class="service-icon">
                            <i class="fa fa-circle-o-notch"></i>
                        </div>
                        <div class="service-info">
                            <h3>Boucle simple <br> (Type while)</h3>
                            <p>Répéter un nombre de fois maxi la même instruction</p>
                            <a href="php/boucle_simple_instruction%20identique.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/boucle_simple.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Afficher une boucle simple (répéter un certain nombre de fois la même instruction-->





                    <!--/Début Afficher une boucle simple (répéter un certain nombre de fois une phrase différente)-->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                        <div class="service-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="service-info">
                            <h3>Boucle simple <br> (Type while)</h3>
                            <p>Répéter une phrase différente à chaque fois</p>
                            <a href="php/boucle_simple_instruction_differente.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/boucle_simple2.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Début Afficher une boucle simple (répéter un certain nombre de fois une phrase différente)-->


                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------FIN SECTION DES CONDITIONS ET BOUCLES SIMPLES----------------------------------------------------------------->



    <!---------------------------------------------------DEBUT SECTION DIFFERENTES BOUCLES--------------------------------------------------------------------------->



    <section id="boucles_for">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Les boucles complexes (Boucles for)</h1>
                        <p class="text-danger">Identique à WHILE, <strong>FOR</strong> rassemble sur une même ligne tout ce qu'il faut savoir sur le fonctionnement de la boucle.</p>
                        <h3>Composée de 3 éléments sur une même ligne : L'initialisation <em>(valeur de départ à la variable)</em>, La condition <em>(la boucle se réexécute tant que la condition est remplie)</em>, L'incrémentation <em>(permet d'ajouter 1 à la variable à chaque tour de boucle)</em>.</h3>
                        <p class="bg-warning text-white"> Utiliser FOR quand on sait d'avance combien de fois on veut que les instructions soient répétées.</p>
                    </div>
                </div>
            </div>


            <!--/Début Boucle for (exemple 1: répéter une même ligne avec des valeurs différentes)-->
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-circle-o"></i>
                        </div>
                        <div class="service-info">
                            <h3>Boucle For <br>(exemple 1)</h3>
                            <p>Répéter une même ligne avec une valeur différente</p>
                            <a href="php/boucle_for.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/boucle_for.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Boucle for (exemple 1 : répéter une même ligne avec des valeurs différentes-->





                    <!--/Début Boucle for (exemple 2 : Génération table de mutliplication du chiffre 9)-->
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-circle-thin"></i>
                        </div>
                        <div class="service-info">
                            <h3>Boucle For<br> (Exemple 2)</h3>
                            <p> Générer la table de multiplication du chiffre 9</p>
                            <a href="php/boucle_for_exemple2.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/boucle_for_exemple2JPG.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin Boucle for (exemple 2 : Génération table de mutliplication du chiffre 9)-->
                </div>
            </div>
        </div>
    </section>


    <!---------------------------------------------------FIN SECTION DIFFERENTES BOUCLES--------------------------------------------------------------------------->


    <!-----------------------------------------------------DEBUT SECTION LES TABLEAUX (ARRAY)----------------------------------------------------------------------->


    <section id="tableaux">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Les tableaux</h1>
                        <h3>Un tableau (aussi appelé Array) est une variable un peu spéciale. </h3>
                        <p>Grâce aux tableaux, il est possible d'enregistrer de nombreuses informations dans une seule variable.</p>
                        <p class="bg-primary text white"> Il existe deux types de tableaux ; numérotés et associatifs</p>
                    </div>
                </div>
            </div>



            <!--/Début tableaux numérotés (Array)-->
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <div class="service-info">
                            <h3>Les tableaux numérotés<br> (Un array numéroté commence toujours à la case 0 !)</h3>
                            <p> Tableau de la composition de notre famille. Afficher contenu de la case n°4</p>
                            <a href="php/tableau_numerote_array.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/tableau_numerote_array.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin tableaux numérotés (Array)-->



                    <!--/Début tableaux associatifs (Array) -->
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="service-info">
                            <h3>Les tableaux associatifs<br> (Les cases sont étiquettées et non numérotées)</h3>
                            <p> Tableau de mes coordonnées. Afficher le contenu de la cas "ville".</p>
                            <a href="php/tableau_associatif_array.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/tableau_associatif_array.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin tableaux associatifs (Array)-->
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------FIN SECTION DES CONDITIONS ET BOUCLES SIMPLES----------------------------------------------------------------->


    <!--------------------------------------------------------DEBUT SECTION BOUCLES FOREACH--------------------------------------------------------------------------->



    <section id="boucle_foreach">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Boucles Foreach</h1>
                        <h3>Ce sont des boucles for spécialisées dans les tableaux. </h3>
                        <p>Foreach passe en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element).</p>
                        <p class="bg-warning text-white"> Permet de parcourir tous les tableaux (numérotés et associatifs)</p>
                    </div>
                </div>
            </div>



            <!--/Début tableaux numérotés (Array)-->
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <div class="service-info">
                            <h3>Parcourir un tableau numéroté<br> (Afficher les valeurs)</h3>
                            <p> Afficher tous les prénoms de notre famille</p>
                            <a href="php/boucle_foreach_tableau-numerote.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/boucle_foreach_tableau_numerote.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin tableaux numérotés (Array)-->



                    <!--/Début tableaux associatifs (Array) -->
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="service-info">
                            <h3>Parcourir un tableau associatif<br> (Afficher les valeurs)</h3>
                            <p> Tableau de mes coordonnées. Afficher mes coordonnées complètes</p>
                            <a href="php/boucle_foreach_tableau_associatif.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/boucle_foreach_tableau_associatif.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin tableaux associatifs (Array)-->
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------------------FIN SECTION BOUCLES FOREACH------------------------------------------------------------------------->




    <!--------------------------------------------------------------DEBUT SECTION FONCTIONS------------------------------------------------------------------------------>
    <section id="fonctions">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Les fonctions</h1>
                        <h3>Ce sont comme des sous-programme, des procédures.</h3>
                        <p> On distingue deux types de fonctions : les "fonctions intégrées" ou "built-in" qui sont incluses par défaut avec les distributions de PHP comme print, echo et les fonctions définies par le programmeur, dites aussi "fonctions utilisateur".</p><br>
                        <a href="http://fr.php.net/manual/fr/funcref.php" button type="button" class="btn btn-info btn-md">Voir toutes les fonctions intégrées</a>
                    </div>
                </div>
            </div>



            <!--/Début fonction strlen (comptage de caractères d'une chaine)------>
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-hand-o-up"></i>
                        </div>
                        <div class="service-info">
                            <h3>Fonction strlen<br> (Compter le nombre de caractères)</h3>
                            <p> Combien de caractères comporte cette phrase?</p>
                            <a href="php/fonction_longueur_chaine.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/fonction_strlen.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin fonctions strlen (comptage de caractères d'une chaine) ------>



                    <!--/Début fonction str_replace (rechercher et remplacer) -->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-eraser"></i>
                        </div>
                        <div class="service-info">
                            <h3>Fonction str_replace<br> (Rechercher et remplacer)</h3>
                            <p> Remplacer les débuts des mots par des P et non des B</p>
                            <a href="php/fonction_str_replace.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/fonction_str_replace.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin fonction str_replace (rechercher et remplacer-->



                    <!--/Début fonction str_shuffle (mélange de lettres) -->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="service-icon">
                            <i class="fa fa-retweet"></i>
                        </div>
                        <div class="service-info">
                            <h3>Fonction str_shuffle<br> (Mélanger des lettres aléatoirement)</h3>
                            <p> Mélanger la phrase :"J'apprends le PHP en ce moment" </p>
                            <a href="php/fonction_str_shuffle.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/fonction_str_shuffle.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin fonction str_shuffle (mélange de lettres) -->


                    <!--/Début fonction strtolower (écrire en minuscule) -->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
                        <div class="service-icon">
                            <i class="fa fa-pencil-square"></i>
                        </div>
                        <div class="service-info">
                            <h3>Fonction strtolower<br> (Ecrire en minuscules)</h3>
                            <p> "APPRENDRE LE PHP" va être mis en minuscules. </p>
                            <a href="php/fonction_strtolower.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/fonction_strtolower.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin fonction strtolower (écrire en minuscule) -->


                    <!--/Début fonction strtoupper (écrire en majuscules) -->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                        <div class="service-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="service-info">
                            <h3>Fonction strtoupper<br> (Ecrire en majuscules)</h3>
                            <p> "apprendre le php" va être mis en majuscules. </p>
                            <a href="php/fonction_strtoupper.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/fonction_strtoupper.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin fonction strtoupper (écrire en majuscules) -->



                    <!--/Début fonction date (renvoie la date et l'heure) -->
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                        <div class="service-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="service-info">
                            <h3>Fonction date<br> (Renvoi de la date et de l'heure)</h3>
                            <p> Affiche la date et l'heure du jour </p>
                            <a href="php/fonction_date.php" class="btn btn-warning" role="button">Voir le résultat</a>
                            <a href="images/exemples_de_code/PHP/fonction_date.JPG" class="btn btn-danger" role="button">Voir le code</a>
                        </div>
                    </div>
                    <!--/Fin fonction date (renvoie la date et l'heure) -->
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------------------FIN SECTION FONCTIONS------------------------------------------------------------------------------>





    <!---------------------------------------------------------------DEBUT SECTION GET------------------------------------------------------------------------------>
    <section id="get">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Méthode #GET </h1>
                        <h3>Récupére la valeur des variables par l'URL</h3>
                        <p>La méthode GET est la valeur de méthode par défaut. On l'utilise de préférence sauf si on ne veut pas que les paramètres soient ajoutés à l'URL. La fonction isset()teste si une variable existe et permet d'afficher un message spécifique si celle-ci est absente de l'URL.</p>
                    </div>
                </div>
            </div>



            <!--/Début METHODE GET ------>
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="service-info">
                            <h3>Méthode GET<br> (Ajoute les données à l'URL)</h3>
                            <p><a href="bonjour.php?nom=Roussel&prenom=Nathalie">Dis-moi bonjour, les variables sont renseignées !</a></p>
                            <a href="images/exemples_de_code/PHP/methode_get.JPG" class="btn btn-success" role="button">Code de la page1.php</a>
                            <a href="images/exemples_de_code/PHP/bonjour.jpg" class="btn btn-danger" role="button">Code bonjour.php</a>
                        </div>
                    </div>
                    <!--/Fin METHODE GET ------>


                    <!--/Début METHODE GET avec isset ------>
                    <div class="text-center our-services">
                        <div class="row">
                            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <div class="service-icon">
                                    <i class="fa fa-paper-plane-o"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Méthode GET avec fonction isset()<br> (Teste si une variable existe)</h3>
                                    <p><a href="bonjour_avec_isset.php?">Dis-moi bonjour alors qu'il manque des variables!</a></p>
                                    <a href="images/exemples_de_code/PHP/methode_get.JPG" class="btn btn-success" role="button">Code de la page1.php</a>
                                    <a href="images/exemples_de_code/PHP/get_avec_isset.JPG" class="btn btn-danger" role="button">Code bonjour_avec_isset.php</a>
                                </div>
                            </div>
                            <!--/Fin METHODE GET avec isset------>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------------------------------------FIN SECTION GET------------------------------------------------------------------------------------->





    <!-------------------------------------------------------DEBUT SECTION POST-------------------------------------------------------------------------------------->
    <section id="post">
        <div class="jumbotron text-center">
            <div class="heading wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h1>Méthode #POST </h1>
                        <h3>Transmettre des données via un formulaire</h3>
                        <p>Apprenons à créer des formulaires et à récupérer les données transmises</p>
                    </div>
                </div>
            </div>





            <!--/METHODE POST - Petites zones de texte ------>
            <div class=" text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <span class="label label-warning">Imput type text (nom, prénom, pseudo)</span><br>
                        <h3> Récupérer les petites zones de texte</h3>
                        <br>
                        <form action="cible.php" method="POST">
                            <p><label>Prénom : <input type="text" name="prenom" /></label></p>
                            <p><input type="submit" value="Valider" /></p>
                        </form>
                    </div>
                    <!--/METHODE POST - Petites zones de texte------>


                    <!--/METHODE POST - mots de passe (type password) ------>
                    <div class=" text-center our-services new">
                        <div class="row">
                            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <span class="label label-warning">Imput type password (mot de passe crypté)</span><br>
                                <h3> Récupérer les mots de passe</h3>
                                <br>
                                <form action="cible_password.php" method="POST">
                                    <p><label>Saisir votre mot de passe : <input type="password" name="Mot de passe" /></label>
                                    <p><input type="submit" value="Valider" /></p>
                                </form>
                            </div>
                            <!--/METHODE POST - mots de passe (type password) ------>




                            <!--/METHODE POST - Zones de texte multilignes ------>
                            <div class=" text-center our-services new">
                                <div class="row">
                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
                                        <span class="label label-warning">Imput type textarea (message, commentaires)</span><br>
                                        <h3> Récupérer les zones de texte multilignes</h3>
                                        <br>
                                        <form action="cible_message.php" method="POST">
                                            <textarea name="message" rows="8" cols="45"></textarea>
                                            <p><input type="submit" value="Valider" /></p>
                                        </form>
                                    </div>

                                    <!--/METHODE POST - Zones de texte mutlignes ------>



                                    <!--/METHODE POST -Liste déroulante ------>
                                    <div class=" text-center our-services new">
                                        <div class="row">
                                            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms">
                                                <span class="label label-warning">Liste déroulante avec select et option</span><br>
                                                <h3> Récupérer les zones choisies dans une liste déroulante</h3>
                                                <br>
                                                <form action="cible_select.php" method="POST">
                                                    <p>Quel est votre niveau en PHP?</p>
                                                    <p><select name="choix">
                                                    <option value="debutant">Débutant</option>
                                                    <option value="confirme">Confirmé</option>
                                                    <option value="expert">Expert</option>
                                                    <option value="ne se prononce pas">Ne se prononce pas</option>   
                                                    </select>
                                                    <p><input type="submit" value="Valider" /></p>
                                                </form>
                                            </div>
                                            <!--/METHODE POST -Liste déroulante ------>


                                            <!--/METHODE POST -Cases à cocher ------>
                                            <div class=" text-center our-services new">
                                                <div class="row">
                                                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                                                        <span class="label label-warning">Cases à cocher avec checkbox et case</span><br>
                                                        <h3> Récupérer les cases cochées</h3>
                                                        <br>
                                                        <form action="cible_case.php" method="POST">
                                                            <p>Quels sont les langages que vous avez déja appris?</p>
                                                            <input type="checkbox" name="case" id="case" /> <label for="case">Html</label>
                                                            <input type="checkbox" name="case" id="case" /> <label for="case">CSS</label>
                                                            <input type="checkbox" name="case" id="case" /> <label for="case">Javascript</label>
                                                            <input type="checkbox" name="case" id="case" /> <label for="case">PHP</label>
                                                            <input type="checkbox" name="case" id="case" /> <label for="case">Java</label>
                                                            <p><input type="submit" value="Valider" /></p>
                                                        </form>
                                                    </div>
                                                    <!--/METHODE POST -Cases à cocher ------>



                                                    <!--/METHODE POST - boutons d'option ------>
                                                    <div class=" text-center our-services new">
                                                        <div class="row">
                                                            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1400ms">
                                                                <span class="label label-warning">Boutons d'option avec radio</span><br>
                                                                <h3> Récupérer les cases cochées (checked = case cochée par défaut)</h3>
                                                                <br>
                                                                <form action="cible_bouton.php" method="POST">
                                                                    <p>Etes vous inscrit à Openclassrooms?</p>
                                                                    <input type="radio" name="openclassrooms" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
                                                                    <input type="radio" name="openclassrooms" value="non" id="non" /> <label for="non">Non</label>
                                                                    <p><input type="submit" value="Valider" /></p>
                                                                </form>
                                                            </div>
                                                            <!--/METHODE POST - boutons d'option ------>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-------------------------------------------------------FIN SECTION POST------------------------------------------------------------------------------------------>



    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/mousescroll.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


</body>

</html>
