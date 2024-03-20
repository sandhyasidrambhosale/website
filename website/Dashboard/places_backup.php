<?php session_start();?>
<?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
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
        .menu-2 {
            color: deepskyblue !important;
        }

        .menu-icon-2 {
            color: deepskyblue !important;
        }
    </style>
</head>

<body>
    <!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content dropdown-content-my">
		<li><a href="profile.php">Profile</a></li>
		<li><a href="settings.php">Settings</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
    <div class="nav-overall">
        <nav>
            <div class="nav-wrapper" style=" background: linear-gradient(to left,black 25%,grey 100%)">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right">
                    <!-- Dropdown Trigger -->
					<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="side-nav fixed">
            <li>
                <div class="user-view" style="height:200px;background-color:grey">
                    <a href="#!user">
                        <center><img class="square" style="height:100px;width:100px;" src="images/logo/admin.png"></center>
                    </a>
                    <a href="#!name"><span class="black-text name center-align" style="margin-top:-5px;font-size:20px;">Hello Admin</span></a>
                </div>
            </li>
            <li><a href="index.php" class="menu-1"><i class="material-icons menu-icon-1">person</i>Uesrs</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="places.php" class="menu-2"><i class="material-icons menu-icon-2">location_on</i>Places</a></li>
            <li>
                <div class="divider"></div>
            </li>
        </ul>
    </div>
   <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">NO</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">YES</a>
        </div>
    </div>
    <br>
    <main>
        <!-- Page Layout here -->
        <div class="row">
            <div class="col s12 m12 l3"></div>
            <div class="col s12 m12 l9">

                <div class="row">
                    <div class="col s12 m2 l3"></div>
                    <div class="col s10 m6 l4">
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Search Bar</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s2 m2 l2">
                        <a class="btn-floating waves-effect waves-light red modal-trigger" href="#modal1" style="margin-top:10px;"><i class="material-icons">add_location</i></a>
                    </div>
                    <div class="col s12 m4 l3"></div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav();
        });
        $(document).ready(function() {
            $('.tooltipped').tooltip({
                delay: 50
            });
        });
        $(document).ready(function() {
            $('.modal').modal();
        });
    </script>
</body>

</html>
</html>