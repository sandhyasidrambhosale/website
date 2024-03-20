<?php
function getdata($id,$tablename,$colname)
{
    $query="select * from $tablename where $colname=$id limit 1";
    $row=mysql_fetch_array(mysql_query($query));
    $data=array();
    $data['place_id']=$row['place_id'];
    $data['place_name']=$row['place_name'];
    $data['place_desc']=$row['place_desc'];
    $data['img_path']=$row['img_path'];
    return $data;
}
$tablename="places";
$id=$_REQUEST['place_id'];
$colname="place_id";
$data=getdata($id,$tablename,$colname);
?>