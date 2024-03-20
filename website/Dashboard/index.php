<?php session_start();?>
<?php error_reporting(0);
$id=$_SESSION['admin_id'];
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
        .menu-1 {
            color: deepskyblue !important;
        }

        .menu-icon-1 {
            color: deepskyblue !important;
        }
    </style>
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content dropdown-content-my">
        <li><a href="settings.php">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="nav-overall">
        <nav>
            <div class="nav-wrapper deep-purple accent-1">
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
                <div class="user-view" style="height:220px;">
                    <div class="background">
                        <img src="images/background.jpg" height="220" width="300">
                    </div>
                    <center><img class="circle white" src="images/admin.png" style="position:relative;height:100px;width:100px;top:10px;"></center>                    
                    <a href="#!name"><span class="white-text name center-align" style="margin-top:30px;font-size:20px;">Hello, Admin</span></a>
                </div>
            </li>
            <li><a href="index.php" class="menu-1"><i class="material-icons menu-icon-1">person</i>Users</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="places.php" class="menu-2"><i class="material-icons menu-icon-2">location_on</i>Places</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="place_info.php" class="menu-3"><i class="material-icons menu-icon-3">info</i>Places Info</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="location.php" class="menu-4"><i class="material-icons menu-icon-4">map</i>Location</a></li>
            <li>
                <div class="divider"></div>
            </li>
        </ul>
    </div>
    <br>
    <main>
        <!-- Page Layout here -->
        <div class="row">
            <div class="col s12 m12 l3"></div>
            <div class="col s12 m12 l9">

                <div class="row">
                    <div class="col s12 m3 l3"></div>
                    <div class="col s12 m6 l6">
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input id="icon_prefix" type="text" class="validate" onkeyup="myFunction()">
                                    <label for="icon_prefix">Search User</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m3 l3"></div>
                </div>

                <table id="user_data" class="highlight centered bordered">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "contactdata.php";
        var asynchronous = true;

        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //                alert(this.responseText);
                var data = JSON.parse(this.responseText);
                console.log(data); //for debugging
                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var user_id = data[a].user_id;
                    var user_name = data[a].user_name;
                    var user_contact = data[a].user_contact;
                    var user_email = data[a].user_email;
                    var user_message = data[a].user_message;

                    html += "<tr>";
                    html += "<td>" + user_id + "</td>";
                    html += "<td>" + user_name + "</td>";
                    html += "<td>" + user_contact + "</td>";
                    html += "<td>" + user_email + "</td>";
                    html += "<td>" + user_message + "</td>";
                    html += "</tr>";
                }
                document.getElementById("data").innerHTML = html;
            }
        }
    </script>
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
        
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("icon_prefix");
            filter = input.value.toUpperCase();
            table = document.getElementById("user_data");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>