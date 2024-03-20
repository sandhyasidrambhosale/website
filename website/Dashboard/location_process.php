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
if(isset($_REQUEST['action']))
{
    $name=addslashes($_REQUEST['name']);
    $id=getid($name);
    $checkname=getname($name);
    $lat=$_REQUEST['lat'];
    $lng=$_REQUEST['lng'];
//    echo $name.$id.$lat.$lng.$checkname;
    if($checkname=="yes"){
    $ans=mysql_query("INSERT INTO `locations`(`place_name`, `place_id`, `lat`, `lng`) VALUES ('$name','$id','$lat','$lng')");
    if($ans==1){
        echo "<script>alert('Insert Successful...')</script>";
        echo "<script>window.location='location.php'</script>";
    }
    else{
        echo "<script>alert('Insert unsuccessful...')</script>";        
        echo "<script>window.location='location.php'</script>";
    }
    }
    else{
        echo "<script>alert('Place not registered...')</script>";        
        echo "<script>window.location='location.php'</script>";
    }
}

?>