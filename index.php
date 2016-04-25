<?php
include ("db/functions.php");
?>

<!DOCTYPE HTML>

<html>

<head>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Wanneer wat? geeft je een overzicht van al je belangrijke momenten, zoals de uitbetaling van je stufi, de eerstvolgende feestdag en wanneer er weer een voetbalwedstrijd gespeeld wordt." />
    <meta name="keywords" content="data, datum, wanneer, stufi, studiefinanciering, zorgverzekering, zorgtoeslag, toeslag, rekening, betaling, betaald, voetbal, wedstrijd, 18+, vakantie, vakanties, nk, ek, wk, feestdagen, sport, evenementen, feest, sportevenementen, nederland, festival, festivals" />
    <meta name="author" content="meta-tags generator">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 month" />
    <title>Wanneer wat? - Overzicht van belangrijke datums</title>

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
        <h1 class="titel">Wanneer wat?</h1>
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
                    <article class="blok groot">
                        <div class="text">
                            <?php show_studiefinanciering(); ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <div class="kop">
                                <h1>Zorgtoeslag</h1>
                            </div>
                            <?php show_zorgtoeslag(); //Kop in html want deze functie is ook voor huurtoeslag ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende vakantie:</span></p>
                            <?php show_vakantie(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende festival:</span></p>
                            <?php show_festival(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende feestdag:</span></p>
                            <?php show_feestdag(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <?php show_NLvoetbal(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <p><span class="bold">Eerstvolgende stemmingen:</span></p>
                            <?php show_stemmen(0) ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-12 col-lg-6">
                    <article class="blok groot">
                        <div class="text">
                            <div class="kop">
                                <h1>Huurtoeslag</h1>
                            </div>
                            <?php show_zorgtoeslag(); ?> 
<!--                            Kop in html want deze functie is ook voor zorgtoeslag -->
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
                    <article class="blok middel">
                        <div class="text">
                            <?php show_bijzonderedag(0);?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok middel">
                        <div class="text">
                            <?php show_volgendseizoen(); ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok middel">
                        <div class="text">
                            <div class="kop">
                                <h1>Kinderbijslag</h1>
                            </div>
                            <?php show_kinderbijslag(); ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok middel">
                        <div class="text">
                            <p><span class="bold">De klok gaat</span></p>
                            <?php show_klokverzet(); ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok middel">
                        <div class="text">
                            <div class="kop">
                                <h1>Zons verduistering</h1>
                            </div>
                            <?php show_verduistering(0); ?>
                        </div> 
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-4">
                    <article class="blok middel">
                        <div class="text">
                            <div class="kop">
                                <h1>Volle maan</h1>
                            </div>
                            <?php show_vollemaan(0); ?>
                        </div>
                    </article>
                </div>

                
                <?php
                $teller = 1;
                for ($i=0; $i<6; $i++){
                    ?>
                    <div class="col-xs-24 col-sm-8 col-lg-4">
                        <article class="blok middel">
                            <div class="text">
                                
                                <?php show_feestdag($teller) ?>
                            </div>
                        </article>
                    </div>
                    <?php
                    $teller++;
                }
                ?>
                
                <?php
                $teller2 = 1;
                for ($y=0; $y<6; $y++){
                    ?>
                    <div class="col-xs-24 col-sm-8 col-lg-4">
                        <article class="blok middel">
                            <div class="text">
                                <?php show_festival($teller2) ?>
                            </div>
                        </article>
                    </div>
                <?php
                    $teller2++;
                }
                ?>

                <?php
                $teller = 1;
                for ($i=0; $i<6; $i++){
                    ?>
                    <div class="col-xs-24 col-sm-8 col-lg-4">
                        <article class="blok middel">
                            <div class="text">
                                <?php show_bijzonderedag($teller) ?>
                            </div>
                        </article>
                    </div>
                    <?php
                    $teller++;
                }
                ?>
                

            </div>
        </section>
    </div>

    <!-- Rij drie -->
    <div class="col-xs-22 col-xs-offset-1 col-sm-24 col-sm-offset-0">
        <section class="rij_drie">
            <div class="row">

               

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

                <div class="col-xs-24 col-sm-8 col-lg-3">
                    <article class="blok klein">
                        <div class="text">
                            <?php  ?>
                        </div>
                    </article>
                </div>

        </section>
    </div>
</div>

</body>
</html>