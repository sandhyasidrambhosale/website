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
        .menu-3 {
            color: deepskyblue !important;
        }

        .menu-icon-3 {
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
            <div class="nav-wrapper" style="background: linear-gradient(to left,black 25%,grey 100%)">
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
    <div id="modal1" class="modal">
        <div class="row">
            <center>
                <h5 style="position:relative;top:20px">Add place information</h5>
            </center>
            <br><br>
            <div class="row">
                <form method='post' action='place_info_process.php' enctype='multipart/form-data'>
                   <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <input id="name" type="text" class="validate" name="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="file-field input-field col s8">
                            <div class="btn">
                                <span>Slider</span>
                                <input type="file" name="files[]" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files" name="slider">
                            </div>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <textarea id="textarea1" class="materialize-textarea" name="info"></textarea>
                            <label for="textarea1">Place information</label>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <textarea id="textarea1" class="materialize-textarea" name="more_info"></textarea>
                            <label for="textarea1">More information</label>
                        </div>
                        <div class="col s2"></div>
                    </div>

                    <div class="row">
                        <div class="col s2"></div>
                        <div class="file-field input-field col s8">
                            <div class="btn">
                                <span>Photos</span>
                                <input type="file" name="photos[]" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files" name="photos">
                            </div>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <input id="video" type="text" class="validate" name="video1">
                            <label for="video">Video1</label>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <input id="video" type="text" class="validate" name="video2">
                            <label for="video">Video2</label>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <input id="video" type="text" class="validate" name="video3">
                            <label for="video">Video3</label>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="file-field input-field col s8">
                            <div class="btn">
                                <span>Top Places</span>
                                <input type="file" name="top_places[]" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files" name="top_places">
                            </div>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <div class="row">
                        <div class="col s2"></div>
                        <div class="input-field col s8">
                            <input id="place_name" type="text" class="validate" name="places_name">
                            <label for="place_name">Places name</label>
                        </div>
                        <div class="col s2"></div>
                    </div>
                    <br>
                    <div class="row">
                        <center><button class="btn waves-effect waves-light" type="submit" name="action" style="top:-30px">Add</button></center>
                    </div>

                </form>
            </div>

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
                                    <input id="icon_prefix" type="text" class="validate" onkeyup="myFunction()">
                                    <label for="icon_prefix">Search Place</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s2 m2 l2">
                        <a class="btn-floating waves-effect waves-light green modal-trigger" href="#modal1" style="margin-top:10px;"><i class="material-icons">add_location</i></a>
                    </div>
                    <div class="col s12 m4 l3"></div>
                </div>

                <table id="place_data" class="highlight centered bordered">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Place Name</th>
                            <th>Place Desc</th>
                            <th>Places to Visit</th>
                        </tr>
                    </thead>

                    <tbody id="data"></tbody>
                </table>
            </div>
        </div>
    </main>
    
    <script>
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "placeinfo_data.php";
        var asynchronous = true;
        var count = 0;

        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //                alert(this.responseText);
                var data = JSON.parse(this.responseText);
                console.log(data); //for debugging
                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var place_id = data[a].place_id;
                    var place_name = data[a].name;
                    var place_description = data[a].info;
                    var top_places = data[a].places_name;
                    count = count + 1;

                    html += "<tr>";
                    html += "<td>" + count + "</td>";
                    html += "<td>" + place_name + "</td>";
                    html += "<td>" + place_description + "</td>";
                    html += "<td>" + top_places + "</td>";
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
        $(document).ready(function() {
            $('.materialboxed').materialbox();
        });
    </script>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("icon_prefix");
            filter = input.value.toUpperCase();
            table = document.getElementById("place_data");
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