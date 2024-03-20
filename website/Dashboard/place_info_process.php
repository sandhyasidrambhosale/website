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
             
    }
    catch(PDOException $e)
    {
	   die('Unable to connect with the database');
    }

	if(isset($_POST['action']))
    {
        mysql_connect("localhost", "root", "");
        mysql_select_db("explore_india");
        
        $name=$_REQUEST['name'];
        $placename=getname($name);
        $place_id=getid($name);
        $success=0;
        $countfiles=count($_FILES['files']['name']);
        $info=$_REQUEST['info'];
        $more_info=$_REQUEST['more_info'];
        $countphotos=count($_FILES['photos']['name']);
        $video1=$_REQUEST['video1'];
        $video2=$_REQUEST['video2'];
        $video3=$_REQUEST['video3'];
        $countplaces=count($_FILES['top_places']['name']);
        $places_name=$_REQUEST['places_name'];
        
        if($placename=="yes"){
            
            // Prepared statement
		$query = "INSERT INTO places_info (place_id,name,slider,info,more_info,photos,video1,video2,video3,top_places,places_name) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            echo "<script>alert($query);</script>";
		
        $file_insert_name="";
        
        $file_insert_name_1="";
        
        $file_insert_name_2="";
        
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
				   	if(move_uploaded_file($_FILES['files']['tmp_name'][$i],'upload/slider/'.$filename)){

				   		// Execute query
//                        echo "<script>alert('$filename'); </script>";     
                        $file_insert_name.=$filename."*";
                        
                        $success=1;   
                        
					}
            }
        }
        
        for($i=0;$i<$countphotos;$i++){        
                // File name
			   	$filename = $_FILES['photos']['name'][$i];
			   	// Get extension
          		$ext = end((explode(".", $filename)));
                   
          		// Valid image extension
          		$valid_ext = array("png","jpeg","jpg");

            if(in_array($ext, $valid_ext)){
                         
          			// Upload file
				   	if(move_uploaded_file($_FILES['photos']['tmp_name'][$i],'upload/photos/'.$filename)){

				   		// Execute query
//                        echo "<script>alert('$filename'); </script>";     
                        $file_insert_name_1.=$filename."*";
                        
                        $success1=2;   
                        
					}
            }
        }
        
        for($i=0;$i<$countplaces;$i++){        
                // File name
			   	$filename = $_FILES['top_places']['name'][$i];
			   	// Get extension
          		$ext = end((explode(".", $filename)));
                   
          		// Valid image extension
          		$valid_ext = array("png","jpeg","jpg");

            if(in_array($ext, $valid_ext)){
                         
          			// Upload file
				   	if(move_uploaded_file($_FILES['top_places']['tmp_name'][$i],'upload/places/'.$filename)){

				   		// Execute query
//                        echo "<script>alert('$filename'); </script>";     
                        $file_insert_name_2.=$filename."*";
                        
                        $success2=3;   
                        
					}
            }
        }
        
            $statement->execute(array($place_id,$name,$file_insert_name,$info,$more_info,$file_insert_name_1,$video1,$video2,$video3,$file_insert_name_2,$places_name));
                
            if($success==1 && $success1==2 && $success2=3){
                    
                echo "<script>alert('File uploaded successfully...'); </script>";
                echo "<script>window.location='place_info.php'</script>";
            }
            else{
                echo "<script>alert('File not uploaded..'); </script>";
                echo "<script>window.location='place_info.php'</script>";
            }
        }
        else{
            echo "<script>alert('Place Name Not Registered...')</script>";
            echo "<script>window.location='place_info.php'</script>";
        }
    }
?>