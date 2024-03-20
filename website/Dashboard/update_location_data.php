<?php
mysql_connect("localhost","root","");
mysql_select_db("explore_india");
$id = $_REQUEST['id'];
$result=mysql_query("SELECT * FROM locations WHERE place_id=$id");

$data=array();
while($row=mysql_fetch_array($result))
{
    $data[]=$row;
}

echo json_encode($data);

?>