<?php
include ("db/functions.php");
?>

<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Wanneer wat? Alle belangrijke datums in één overzicht" content="Wanneer wat? geeft je een overzicht van al je belangrijke momenten, zoals de uitbetaling van je stufi, de eerstvolgende feestdag en wanneer er weer een voetbalwedstrijd gespeeld wordt.">

    <title>Wanneer wat? - Overzicht van belangrijke datums</title>

    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/template.css" rel="stylesheet" type="text/css" />

    <!-- Open Sans -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>

    <!-- Javascript -->
    <script src="js/jquery-2.2.2.min.js" type="text/javascript"></script>
    <script src="js/javascript.js" type="text/javascript"></script>

    <!-- Race SEO -->
    <script src="http://raceseo.smoishele.com/scripts/raceSeoTracking.js"></script>
    <script>
        _raceSeoTracker.init('0eaca431e03d16c1cf95609e4c77e574abbfe0f3088bfbfa932feb8febbdca2e');
    </script>
</head>

<body>
<?php
// Google Analytics tracking
include_once ("analyticstracking.php");
?>

<header class="header">

    <div class="col-xs-24 col-sm-12 col-lg-12">
        <h2>Wanneer wat?</h2>
    </div>
    <div class="col-xs-22 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-lg-12 col-lg-offset-0">
        <div class="search">
            <input id="zoek" type="text" placeholder="Zoeken" autocomplete="off" />
        </div>
    </div>

</header>

<div class="content">

    <!-- Eerste rij -->
    <div class="col-xs-22 col-xs-offset-1 col-sm-24 col-sm-offset-0">
        <section class="rij_een">
            <div class="row">

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <?php show_studiefinanciering(); ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <div class="kop">
                                <h1>Zorgtoeslag</h1>
                            </div>
                            <?php show_zorgtoeslag(); //Kop in html want deze functie is ook voor huurtoeslag ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende vakantie:</span></p>
                            <?php show_vakantie(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende festival:</span></p>
                            <?php show_festival(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende feestdag:</span></p>
                            <?php show_feestdag(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <?php show_NLvoetbal(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende stemmingen:</span></p>
                            <?php show_stemmen(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok">
                        <div class="text">
                            <div class="kop">
                                <h1>Huurtoeslag</h1>
                            </div>
                            <?php show_zorgtoeslag(); //Kop in html want deze functie is ook voor zorgtoeslag ?>
                        </div>
                    </article>
                </div>

            </div>
        </section>

    </div>

    <!-- Tweede rij -->
    <div class="col-xs-22 col-xs-offset-1 col-sm-24 col-sm-offset-0">
        <section class="rij_twee">
            <div class="row">

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

            </div>
        </section>
    </div>

    <!-- Rij drie -->
    <div class="col-xs-22 col-xs-offset-1 col-sm-24 col-sm-offset-0">
        <section class="rij_drie">
            <div class="row">

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok">
                        <div class="text">
                            <p>Hoi dit is een test en nog een en nogg een</p>
                            <?php  ?>
                        </div>
                    </article>
                </div>

        </section>
    </div>
</div>

</body>
</html>