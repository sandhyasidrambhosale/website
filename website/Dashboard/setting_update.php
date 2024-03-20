<?php session_start();?>
<?php error_reporting(0);
$id=$_SESSION['admin_id'];
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
?>
<?php
    if(isset($_REQUEST['update']))
    {
        mysql_connect("localhost","root","");
        mysql_select_db("explore_india");
        $new_password=$_REQUEST['new_password'];
        $conf_password=$_REQUEST['conf_password'];
        if($new_password==$conf_password)
        {
            $query="UPDATE `admin_details` SET `admin_password`='$new_password' WHERE `admin_id` LIKE '$id'";
            $ans=mysql_query($query); 
            if($ans==1)
            {
                echo "<script>alert('Update Successful...')</script>";
                echo "<script>window.location='index.php'</script>";
            }
            else
            {
                echo "<script>alert('Update Unsuccessful...')</script>";
                echo "<script>window.location='index.php'</script>";
            }
        }
        else
        {
            echo "<script>alert('Password does not match...')</script>";
            echo "<script>window.location='settings.php'</script>";
        }
    }
?>