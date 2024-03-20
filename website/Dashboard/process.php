<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("explore_india");
if(isset($_REQUEST['action']))
{
    $name=addslashes($_REQUEST['name']);
    $desc=addslashes($_REQUEST['desc']);
    $image=addslashes($_REQUEST['image']);
//    echo $name.$desc.$image;
    $ans=mysql_query("INSERT INTO `places`(`place_name`, `place_desc`, `img_path`) VALUES ('$name','$desc','$image')");
//    echo $query;
    if($ans==1){
        echo "<script>alert('Insert Successful...')</script>";
        echo "<script>window.location='places.php'</script>";
    }
    else{
        echo "<script>alert('Insert unsuccessful...')</script>";        
        echo "<script>window.location='places.php'</script>";
    }
}
?>