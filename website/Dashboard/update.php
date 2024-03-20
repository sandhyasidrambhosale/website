<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("explore_india");
if(isset($_REQUEST['update']))
{
    $name=addslashes($_REQUEST['update_name']);
    $desc=addslashes($_REQUEST['update_desc']);
    $image=addslashes($_REQUEST['update_image']);
    $id=$_REQUEST['update_id'];
//    echo $name.$desc.$image;
    $ans=mysql_query("UPDATE places SET place_name='$name', place_desc='$desc', img_path='$image' WHERE place_id=$id");
//    echo $query;
    if($ans==1){
        echo "<script>alert('Update Successful...')</script>";
        echo "<script>window.location='places.php'</script>";
    }
    else{
        echo "<script>alert('Update unsuccessful...')</script>";        
        echo "<script>window.location='places.php'</script>";
    }
}
?>