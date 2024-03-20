<?php session_start();?>
<?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
?>
<!DOCTYPE html>
<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
		.center-spin {
			margin: 10% auto;
		}
	</style>
	<script>
		setInterval(function() {
			window.location.href = "index.php";
		}, 3000);
	</script>
</head>

<body>
	<center>
		<div class="center-spin">
			<div class="preloader-wrapper big active">
				<div class="spinner-layer spinner-blue-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</center>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>