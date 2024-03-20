<?php
$place_id_page=$_REQUEST['p_id'];
include ('dynamic_data.php');
?>
<!DOCTYPE html>
<html>

<head>
    <script type='text/javascript' src='js/jquery-1.6.2.min.js'></script>
    <script type='text/javascript' src='js/jquery-ui.min.js'></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/card_style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:200,300|Dosis:300|Permanent+Marker" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        body {
            background-color: rgb(240, 240, 240);
        }
        
        #map {
            position: relative;
            height: 650px;
            width: 100%;
        }

        .dash {
            margin-top: 5px;
            border-top: 2px solid #F86960;
            width: 80px;
        }

        .place-info-font {
            font-family: 'Catamaran', sans-serif;
            font-size: 30px;
            font-weight: 100;
        }

        @media (min-width: 481px) and (max-width: 767px) {
            .place-info-font {
                font-size: 24px;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .place-info-font {
                font-size: 22px;
            }
    </style>
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_6FZBR4V5vYudKgk0xxzR1VLnrJGUY4o"></script>
    
    <script type='text/javascript'>
        //This javascript will load when the page loads.
        jQuery(document).ready(function($) {

            //Initialize the Google Maps
            var geocoder;
            var map;
            var markersArray = [];
            var infos = [];

            geocoder = new google.maps.Geocoder();

            var myOptions = {
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            //Load the Map into the map div
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            map = new google.maps.Map(document.getElementById("map"), myOptions);

            //Initialize a variable that the auto-size the map to whatever you are plotting
            var bounds = new google.maps.LatLngBounds();
            //Initialize the encoded string       
            var encodedString;
            //Initialize the array that will hold the contents of the split string
            var stringArray = [];
            //Get the value of the encoded string from the hidden input
            encodedString = document.getElementById("encodedString").value;
            //Split the encoded string into an array the separates each location
            stringArray = encodedString.split("****");


            var x;
            for (x = 0; x < stringArray.length; x = x + 1) {
                var addressDetails = [];
                var marker;
                //Separate each field
                addressDetails = stringArray[x].split("&&&");
                //Load the lat, long data
                var lat = new google.maps.LatLng(addressDetails[1], addressDetails[2]);
                //Create a new marker and info window
                marker = new google.maps.Marker({
                    map: map,
                    position: lat,
                    //Content is what will show up in the info window
                    content: addressDetails[0]
                });

                //Pushing the markers into an array so that it's easier to manage them
                //
                markersArray.push(marker);
                google.maps.event.addListener(marker, 'click', function() {
                    closeInfos();
                    var info = new google.maps.InfoWindow({
                        content: this.content
                    });
                    //On click the map will load the info window
                    info.open(map, this);
                    infos[0] = info;
                });

                //Extends the boundaries of the map to include this new location///
                bounds.extend(lat);
            }
            //Takes all the lat, longs in the bounds variable and autosizes the map
            map.fitBounds(bounds);

            //Manages the info windows
            function closeInfos() {
                if (infos.length > 0) {
                    infos[0].set("marker", null);
                    infos[0].close();
                    infos.length = 0;
                }
            }

        });
    </script>


</head>

<body>
    

    <!--   -------------------------------------------navbar--------------------------------------------------->
    <?php
    include ('navbar1.php');
    ?>
    
    <!--   -------------------------------------------slider--------------------------------------------------->
    <?php
    include('place_data.php');
    ?>
    <?php echo $data; ?>
    <!--   --------------------------------------information--------------------------------------------------->

    <br>
    <br>
    <br>

    <!--Maps-->
    <div id="location">
        <h2 class="center-align" style="color:#3b444f;font-weight:100;font-family:font-family: 'Permanent Marker', cursive;">Locations
            <center>
                <div class="dash"></div>
            </center>
        </h2>
        <div id='input'>
            <?php
                include('googlemap.php');
            ?>
            <input type="hidden" id="encodedString" name="encodedString" value="<?php echo $encodedString; ?>" />
        </div>
        <div id="map"></div>
    </div>
    <!--    -------------------------------------footer--------------------------------------------->
    <?php
    include ('footer.php');
    ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.slider').slider({
                indicators: false,
                height: 580
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".read-less").hide();
            $(".info").hide();
            $(".read-more").click(function() {
                $(".info").show();
                $(".read-more").hide();
                $(".read-less").show();
            });
            $(".read-less").click(function() {
                $(".info").hide();
                $(".read-more").show();
                $(".read-less").hide();
            });
        });

        $(document).ready(function() {
            $('.materialboxed').materialbox();
        });
    </script>
</body>

</html>