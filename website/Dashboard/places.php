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
        <div class="ro
            <center>
                <h5 style="position:relative;top:20px">Add new place</h5>
            </center>
            <form class="col s12" action="process.php" method="post">
                <div class="row" style="position:relative;top:40px">
                    <div class="col s2"></div>
                    <div class="input-field col s8">
                        <input id="name" type="text" class="validate" name="name" required>
                        <label for="name">Place name</label>
                    </div>
                    <div class="col s2"></div>
                </div>
                <div class="row" style="position:relative;top:20px">
                    <div class="col s2"></div>
                    <div class="input-field col s8">
                        <textarea id="textarea1" class="materialize-textarea" name="desc" required></textarea>
                        <label for="textarea1">Place description</label>
                    </div>
                    <div class="col s2"></div>
                </div>
                <div class="row" style="position:relative;top:0px">
                    <div class="col s2"></div>
                    <div class="input-field col s8">
                        <input id="image" type="text" class="validate" name="image" required>
                        <label for="image">Place image</label>
                    </div>
                    <div class="col s2"></div>
                </div>
                <center><button class="btn waves-effect waves-light" type="submit" name="action">Add</button></center>
            </form>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="row">
            <center>
                <h5 style="position:relative;top:20px">Edit place</h5>
            </center>
            <form class="col s12" action="update.php" method="post">
               <input type="hidden" id="update_id" name="update_id">
                <div class="row" style="position:relative;top:40px">
                    <div class="col s2"></div>
                    <div class="input-field col s8">
                        <input id="update_name" placeholder="Place name" type="text" class="validate" name="update_name" required>
<!--                        <label for="update_name">Place name</label>-->
                    </div>
                    <div class="col s2"></div>
                </div>
                <div class="row" style="position:relative;top:20px">
                    <div class="col s2"></div>
                    <div class="input-field col s8">
                        <textarea id="update_desc" placeholder="Place description" class="materialize-textarea" name="update_desc" required></textarea>
<!--                        <label for="update_desc">Place description</label>-->
                    </div>
                    <div class="col s2"></div>
                </div>
                <div class="row" style="position:relative;top:0px">
                    <div class="col s2"></div>
                    <div class="input-field col s8">
                        <input id="update_image" placeholder="Place image" type="text" class="validate" name="update_image" required>
<!--                        <label for="update_image">Place image</label>-->
                    </div>
                    <div class="col s2"></div>
                </div>
                <center><button class="btn waves-effect waves-light" type="submit" name="update">Update</button></center>
            </form>
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
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
        var url = "placedata.php";
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
                    var place_name = data[a].place_name;
                    var place_description = data[a].place_desc;
                    var img_path = data[a].img_path;
                    count = count + 1;

                    html += "<tr>";
                    html += "<td>" + count + "</td>";
                    html += "<td>" + place_name + "</td>";
                    html += "<td>" + place_description + "</td>";
                    html += "<td><img class='materialboxed' src=" + img_path + " width='60px' height='40px'></td>";
                    html += "<td><a class='btn-floating waves-effect waves-light blue modal-trigger' href='#modal2'><i class='material-icons' id=" + place_id + " onclick='getid(this.id)'>edit</i></a></td>";
                    html += "<td><a class='btn-floating waves-effect waves-light red'><i class='material-icons' id=" + place_id +" onclick='getidfordelete(this.id)'>delete</i></a></td>";
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
        function getidfordelete(clicked_id_del) {
			var x = confirm("Do you really want to delete?");
			if (clicked_id_del == 0 || x == false) {
				alert("Cancelled");
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						alert(this.responseText);
						window.location='places.php';
					}
				};
				xmlhttp.open("GET", "delete.php?id="+clicked_id_del, true);
				xmlhttp.send();
			}
		}
        function getid(clicked_id) {
//            alert(clicked_id);
            var ajax2 = new XMLHttpRequest();
            var method2 = "GET";
            var url2 = "update_data.php?id="+clicked_id;
            var asynchronous2 = true;

        ajax2.open(method2, url2, asynchronous2);
        ajax2.send();

        ajax2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //                alert(this.responseText);
                var data = JSON.parse(this.responseText);
                document.getElementById("update_id").value=data[0].place_id;
                document.getElementById("update_name").value=data[0].place_name;
                document.getElementById("update_desc").innerHTML=data[0].place_desc;
                document.getElementById("update_image").value=data[0].img_path;
//                alert(data[0].place_image);
                }
            }
        }
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