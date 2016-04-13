$("document").ready(function(){

    //Hoogte van de blokken hetzelfde als de breedte
    $(".blok").each(function () {
        $(this).css("height", $(this).width());
        //Font-size
        //$(this).find("h1").css("font-size", parseInt($(".blok").width()/50)+"px");
    });

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////// KLEUREN ///////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var colors = [
        "#F22613",
        "#4183D7",
        "#81CFE0",
        "#52B3D9",
        "#22313F",
        "#89C4F4",
        "#87D37C",
        "#1BBC9B",
        "#019875",
        "#F89406",
        "#E87E04",
        "#D35400",
        "#6C7A89"
    ];

    // Begin ergens midden in de array te tellen
    var counter = Math.floor((Math.random() * colors.length));

    //Elk blok een andere kleur geven
    $(".blok").each(function() {

        // Als counter even veel is als de lengte van de array (dus als ie door de array is voordat alle divs zijn ingekleurd, hij begint ergens in het midden) begin bij 0
        if (counter == colors.length) {
            counter =  0;
        }

        // De div de kleur geven
        $(this).css("background-color", colors[counter]);
        counter++;
    });

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////// ZOEKEN ///////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $("#zoek").on('keyup', function(){
        var term = $(this).val().toString().toLowerCase();
        console.log("Heuuj: " + term);
        if (!term){
            $(".blok").show();
        } else {
            $(".blok").hide().filter(function() {
                return ($(this).find("h1").text().toLowerCase().indexOf(term) > -1) || ($(this).find("p").text().toLowerCase().indexOf(term) > -1);
            }).show();
        }
    });

});