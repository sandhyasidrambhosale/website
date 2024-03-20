<?php
        $con=mysql_connect("localhost","root","");
        mysql_select_db("explore_india");
        $query1=mysql_query("select * from places where place_id=$place_id_page");
        $main_data=mysql_fetch_array($query1);
        mysql_close($con);
?>