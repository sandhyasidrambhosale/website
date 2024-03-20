<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Arimo|Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        body::-webkit-scrollbar {
            width: 0.9em;
            background-color: #EEE;
        }

        body::-webkit-scrollbar-thumb {
            background-color: darkturquoise;
            border-radius: 1em;
        }

        .dash {
            margin-top: 5px;
            border-top: 2px solid #F86960;
            width: 80px;
        }
        
    </style>

</head>

<body>
    <?php
    include ('data.php');
    ?>
    <!--   -----------------------------navbar---------------------------------------------->
    <?php
    include ('navbar.php');
    ?>
    <!--   -----------------------------slider---------------------------------------------->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="images/slide2.jpg">
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="images/slide3.jpg">
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="images/slide4.jpg">
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>

    <!--   ----------------------------------cards---------------------------------------------->
    <div id="places">
        <br>
        <h2 class="center-align" id="places" style="color:#3b444f;font-weight:100;font-family:font-family: 'Permanent Marker', cursive;">Top Tourist Destinations
            <center>
                <div class="dash"></div>
            </center>
        </h2>
        <br>
        <div class="container">
            <!-- Page Content goes here -->
            <div class="row">
                <?php echo $data; ?>
            </div>
        </div>
    </div>

    <!--    -------------------------------------footer--------------------------------------------->
    <?php
    include ('footer.php');
    ?>

</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    //        navbar-jQuery
    $(document).ready(function() {
        $(".button-collapse").sideNav();
    });
    //        slider-jQuery
    $(document).ready(function() {
        $('.slider').slider({
            indicators: false,
            height: 580,
            transition: 1000
        });
    });
</script>

</html>