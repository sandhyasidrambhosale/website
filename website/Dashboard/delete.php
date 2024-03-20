<?php
$id = $_REQUEST["id"];
if(isset($_REQUEST['id']))
{
    include('connection.php');
    $query="DELETE FROM `places` WHERE `place_id`=$id";  
    mysql_query($query); 
    $ans=mysql_affected_rows()>0?"yes":"no";
    if($ans=="yes"){
        echo "Deleted Successfully";
    }
    else{
        echo "Deletion Unsuccessful";
    }
}
?>