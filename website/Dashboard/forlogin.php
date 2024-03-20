<?php session_start();
if(isset($_REQUEST['login']))
{  
	include('connection.php');
	
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];	
    
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
	
    $result = mysql_query("SELECT * FROM admin_details WHERE admin_password='$password' AND admin_email='$username'");

    $row = mysql_fetch_array($result);
	
    $checkemail=$row['admin_email'];
    $checkpass=$row['admin_password']; 

	if($checkemail=="" && $checkpass=="")
	{
		echo "<script>alert('Please enter register email and password');</script>";
	    echo "<script>window.location='login.php'</script>";
	}
	else{
		if($row['admin_email']=="$username" && $row['admin_password']=="$password"){
        $_SESSION['admin_id']=$row['admin_id'];
        $_SESSION['username']=$username;
		echo "<script>alert('Login successful!!!!!');</script>";
		echo "<script>window.location='loading.php'</script>";
        }
		else{
		echo "<script>alert('Login unsuccessful!!!!');</script>";
	    echo "<script>window.location='login.php'</script>";
        }
	}
	mysql_close($conn); // Closing Connection
}
else
{
	echo "<script>window.location='login.php'</script>";
}
?>