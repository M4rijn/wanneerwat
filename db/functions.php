<?php

function changeDateFormat($dbDate){
    $formattedDate = date("d F Y", strtotime($dbDate));
    return $formattedDate;
}

function show_studiefinanciering(){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM stufi ORDER BY stufi_date LIMIT 2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        ?>
        <div class="kop">
            <h1>Studiefinanciering</h1>
        </div>
        <?php

        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="datum">
                <p><?php echo changeDateFormat($row["stufi_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);

}

function show_zorgtoeslag(){ //Ook voor huurtoeslag, zelfde datum
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM zorgtoeslag ORDER BY zorgtoeslag_date LIMIT 2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="datum">
                <p><?php echo changeDateFormat($row["zorgtoeslag_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_vakantie($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM vakantie ORDER BY vakantie_start_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="kop">
                <h1><?php echo $row["vakantie_event_name"]; ?></h1>
            </div>
            <div class="datum">
                <p><?php echo changeDateFormat($row["vakantie_start_date"]) . " - " . changeDateFormat($row["vakantie_end_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_feestdag($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM feestdag ORDER BY feestdag_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="kop">
                <h1><?php echo $row["feestdag_event_name"]; ?></h1>
            </div>
            <div class="datum">
                <p><?php echo changeDateFormat($row["feestdag_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_bijzondereDag($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM bijzonderedag ORDER BY bijzonderedag_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="datum">
                <h1><?php echo $row["bijzonderedag_event_name"]; ?></h1>
                <p><?php echo changeDateFormat($row["bijzonderedag_date"]); ?><br><br></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_festival($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM festival ORDER BY festival_start_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="kop">
                <h1><?php echo $row["festival_event_name"]; ?></h1>
            </div>

            <div class="datum">
                <p><?php if($row["festival_end_date"] == 0){
                        echo changeDateFormat($row["festival_start_date"]);
                    } else {
                        echo changeDateFormat($row["festival_start_date"]) . " - " . changeDateFormat($row["festival_end_date"]);
                    }; ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}



function show_stemmen($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM stemmen ORDER BY stemmen_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="kop">
                <h1>Stemmen voor <?php echo $row["stemmen_event_name"]; ?></h1>
            </div>
            <div class="datum">
                <p><?php echo changeDateFormat($row["stemmen_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_NLvoetbal($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM voetbal ORDER BY voetbal_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        ?>
        <div class="kop">
            <h1>Nederlands Elftal</h1>
        </div>
        <?php
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="datum">
                <p><?php echo $row["voetbal_event_name"]; ?></p>
                <p><?php echo $row["voetbal_teams"]; ?></p>
                <p><?php echo changeDateFormat($row["voetbal_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_volgendSeizoen(){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM seizoen ORDER BY seizoen_date LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="kop">
                <h1><?php echo $row["seizoen_event_name"]; ?> Begint</h1>
            </div>
            <div class="datum">
                <p><?php echo changeDateFormat($row["seizoen_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_kinderbijslag(){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM kinderbijslag ORDER BY kinderbijslag_date LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="datum">
                <p><?php echo changeDateFormat($row["kinderbijslag_date"]); ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_klokverzet(){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM klokverzet ORDER BY klokverzet_start_date LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="kop">
                <h1><?php echo $row["klokverzet_event_name"]; ?></h1>
            </div>

            <div class="datum">
                <p><?php echo changeDateFormat($row["klokverzet_start_date"]) . " op " . changeDateFormat($row["klokverzet_end_date"]); ?>
                     </p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_verduistering($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM verduistering ORDER BY verduistering_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="datum">
                <p><?php echo changeDateFormat($row["verduistering_date"]) . " om " . $row["verduistering_tijd"]; ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}

function show_vollemaan($offset){
    include 'db/db_connect.php';

    //Get values from DB
    $sql = "SELECT * FROM vollemaan ORDER BY vollemaan_date LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="datum">
                <p><?php echo changeDateFormat($row["vollemaan_date"]) . " om " . $row["vollemaan_tijd"]; ?></p>
            </div>
            <?php

        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}