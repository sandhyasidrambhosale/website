<?php
mysql_connect("localhost","root","");
mysql_select_db("explore_india");
$result=mysql_query("select * from places_details");
//storing in array
$data=array();
while($row=mysql_fetch_array($result))
{
    $data[]=$row;
}

//returning response in JSON format
echo json_encode($data);
?>