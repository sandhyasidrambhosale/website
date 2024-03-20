<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("explore_india");
function getname($name){
           $checkquery="SELECT COUNT(*) AS cnt FROM `places` WHERE `place_name`='$name'";
           $row=mysql_fetch_array(mysql_query($checkquery));    
           if($row['cnt']>0){
               return "yes";
           }
           else{
               return "no";
           }
        }
        function getid($name){
           $checkquery="SELECT `place_id` FROM `places` WHERE `place_name`='$name'";
           $row=mysql_fetch_array(mysql_query($checkquery));    
           $place_id=$row['place_id'];
           return $place_id;    
        }
if(isset($_REQUEST['update']))
{
    $name=addslashes($_REQUEST['update_name']);
    $id=getid($name);
    $checkname=getname($name);
    $lat=$_REQUEST['update_lat'];
    $long=$_REQUEST['update_lng'];
    $id=$_REQUEST['update_id'];
    if($checkname=="yes"){
//    echo $name.$desc.$image;
    $ans=mysql_query("UPDATE locations SET place_name='$name', lat='$lat', lng='$long' WHERE place_id=$id");
//    echo $query;
    if($ans==1){
        echo "<script>alert('Update Successful...')</script>";
        echo "<script>window.location='location.php'</script>";
    }
    else{
        echo "<script>alert('Update unsuccessful...')</script>";        
        echo "<script>window.location='location.php'</script>";
    }
    }
    else{
        echo "<script>alert('Place not registered...')</script>";        
        echo "<script>window.location='location.php'</script>";
    }
}
?>