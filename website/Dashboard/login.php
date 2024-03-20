<?php session_start();?>
<?php error_reporting(0);
if($_SESSION['username']!="")
{
    header("location:index.php");   
}   
?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            background-color: #c3c1c1;
        }

        .container-box {
            margin: 15% auto;
            padding: 40px 35px 10px 35px;
            height: auto;
            width: 345px;
            box-shadow:20px 20px 50px 10px grey;
            background-color: white;
        }

        .center-button {
            width: 145px;
            margin: 0 auto;
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .container-box {
                width: 320px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container-box">
            <div class="row">
                <form class="col s12" method="post" action="forlogin.php">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="username" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="telephone-password" name="password" type="password" class="validate" maxlength="30" required>
                            <label for="telephone-password">Password</label>
                        </div>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light red" name="login">login
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>