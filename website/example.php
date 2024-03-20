<?php
mysql_connect("localhost","root","");
mysql_select_db("explore_india");

$result=mysql_query("SELECT * FROM `places_info`");

$data=array();
while($row=mysql_fetch_array($result))
{
    $data[]=$row;
}

echo json_encode($data);

?>
