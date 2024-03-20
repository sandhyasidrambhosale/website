<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("explore_india");
if(isset($_REQUEST['action']))
{
    $name=$_REQUEST['name'];
    $contact=$_REQUEST['contact'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    $ans=mysql_query("INSERT INTO `contact`(`user_name`, `user_contact`, `user_email`, `user_message`) VALUES ('$name','$contact','$email','$message')");
    if($ans==1){
        echo "<script>alert('Insert Successful...')</script>";
        echo "<script>window.location='index.php'</script>";
    }
    else{
        echo "<script>alert('Insert unsuccessful...')</script>";        
        echo "<script>window.location='index.php'</script>";
    }
}
?>