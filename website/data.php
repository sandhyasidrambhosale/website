<?php
        $con=mysql_connect("localhost","root","");
        mysql_select_db("explore_india");
        $a=mysql_query("select * from places");
        $b=mysql_fetch_array($a);
        $data="";
        while($row=$b)
        {
            $data.="<div class='col s12 m6 l4'>
            <div class='card'>
                <div class='card-image'>
                    <img src=".$b[3]." style='height:210px'>
                    <span class='card-title'>".$b[1]."</span>
                </div>
                <div class='card-content' style='height:160px'>
                    <p>".$b[2]."</p>
                </div>
                <div class='card-action'>
                    <center>
                        <a href='place_info.php?p_id=$b[0]'>Know More</a>
                    </center>
                </div>
            </div>
            </div>";
        $b=mysql_fetch_array($a);
        }
        mysql_close($con);
?>