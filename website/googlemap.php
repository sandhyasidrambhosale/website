<?php 
        mysql_connect("localhost", "root", "") or
         die("Could not connect: " . mysql_error());
        mysql_select_db("explore_india");
 
        //Initialize your first couple variables
        $encodedString = ""; //This is the string that will hold all your location data
        $x = 0; //This is a trigger to keep the string tidy
 
        $result = mysql_query("SELECT * FROM `locations`");
 
        //Multiple rows are returned
        while ($row = mysql_fetch_array($result, MYSQL_NUM))
        {
            //This is to keep an empty first or last line from forming, when the string is split
            if ( $x == 0 )
            {
                 $separator = "";
            }
            else
            {
                 //Each row in the database is separated in the string by four *'s
                 $separator = "****";
            }
            //Saving to the String, each variable is separated by three &'s
            //this is for the shows the details in the map
            $encodedString = $encodedString.$separator.
            "<p class='content'><b>Name: </b>".$row[2].
            "<br><b>Lat:</b> ".$row[3].
            "<br><b>Long: </b>".$row[4].
//            "<br><b>Address: </b>".$row[4].
//            "<br><b>Division: </b>".$row[5].
            "</p>&&&".$row[3]."&&&".$row[4];
            $x = $x + 1;
        }        
        ?>