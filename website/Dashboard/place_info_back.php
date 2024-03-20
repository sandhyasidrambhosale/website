<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "explore_india";

    // Create connection
    try
    {
	   $conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
	   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
	   die('Unable to connect with the database');
    }
	if(isset($_POST['action']))
    {
        $success=0;
        $countfiles = count($_FILES['files']['name']);
        $countphotos = count($_FILES['photos']['name']);
        
        // Prepared statement
		$query = "INSERT INTO places_info (slider) VALUES(?)";
        
        $file_insert_name="";
		$statement  = $conn->prepare($query);

		// Loop all files
		for($i=0;$i<$countfiles;$i++){        
                // File name
			   	$filename = $_FILES['files']['name'][$i];
			   	// Get extension
          		$ext = end((explode(".", $filename)));
                   
          		// Valid image extension
          		$valid_ext = array("png","jpeg","jpg");

            if(in_array($ext, $valid_ext)){
                         
          			// Upload file
				   	if(move_uploaded_file($_FILES['files']['tmp_name'][$i],'upload/'.$filename)){

				   		// Execute query
                        echo "<script>alert('$filename'); </script>";     
                        $file_insert_name.=$filename."*";
                        
                        $success=1;   
                        
					}
            }
        }
        
        $statement->execute(array($file_insert_name));
        
        if($success==1){
            echo "<script>alert('File uploaded successfully...'); </script>";
            echo "<script>window.location='place_info.php'</script>";
        }
        else{
            echo "<script>alert('File not uploaded..'); </script>";
            echo "<script>window.location='place_info.php'</script>";
        }    
        
    }
?>