<!DOCTYPE html>
<!--
/*<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <table id="place_data" class="highlight centered">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Slider</th>
                <th>Info</th>
                <th>More Info</th>
                <th>Photos</th>
            </tr>
        </thead>
        <tbody id="data"></tbody>
    </table>

    <script>
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "example.php";
        var asynchronous = true;
        var count = 0;

        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);
                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var id = data[a].id;
                    var slider = data[a].slider;
                    var info = data[a].info;
                    var more_info = data[a].more_info;
                    var photos = data[a].photos;
                    count = count + 1;

                    html += "<tr>";
                    html += "<td>" + count + "</td>";
                    html += "<td>" + slider + "</td>";
                    html += "<td>" + info + "</td>";
                    html += "<td>" + more_info + "</td>";
                    html += "<td>" + photos + "</td>";
                    html += "</tr>";
                }
                document.getElementById("data").innerHTML = html;
            }
        }
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>*/
-->
<?php
        $con=mysql_connect("localhost","root","");
        mysql_select_db("explore_india");

        $result = mysql_query("select * from places_info  limit 1");
        
        if($result === FALSE) { 
            die(mysql_error()); // TODO: better error handling
        }
        
        while($row = mysql_fetch_array($result))
        {
            $str=$row['slider'];
            $img_src_data=array();
            $a=substr_count($str,"*");
            $i=0;
            while($i<$a)
            {
                $pos1=0;
                $pos2=strpos($str,"*");
                $strtemp1=substr($str,$pos1,$pos2);
                $strtemp2=substr($str,$pos2+1);
                $str=$strtemp2;
                $img_src_data[$i]=$strtemp1;
                $i++;
            }
        }
        echo $img_src_data[0];
        echo $img_src_data[1];
?>
