<?php
    $con = mysqli_connect("localhost", "root", "", "registration") or die("Error connecting to database: ".mysqli_error($con));
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
        if connection fails it will stop loading the page and display an error
    */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	    <!-- Title -->
        <title>Search results</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <?php
            $query = $_GET['locationNameQuery']; 
            // gets value sent over search form
            
            $min_length = 3;
            // you can set minimum length of the query if you want
            
            if(strlen($query) >= $min_length) { // if query length is more or equal minimum length then
                
                $query = htmlspecialchars($query); 
                // changes characters used in html to their equivalents, for example: < to &gt;
                
                $query = mysqli_real_escape_string($con, $query);
                // makes sure nobody uses SQL injection
                
                $raw_results = mysqli_query($con, "SELECT * FROM hotspots
                WHERE (`wifiName` LIKE '%".$query."%') OR (`address` LIKE '%".$query."%') OR (`suburb` LIKE '%".$query."%')") or die(mysqli_error($con));         
            
                // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
                // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
                // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
                
                if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
                    while($row = mysqli_fetch_assoc($raw_results)) {
                        echo $row["wifiName"]. ", ". $row["address"]. ", " . $row["suburb"]. ", " . $row["postcode"]. "<br>";
                        echo "<a href='"."reviewPageOut.php"."'>Find on Map</a>"."<br>";
                    }
                }else{ // if there is no matching rows do following
                    echo "No results";
                }
            }
                
            else{ // if query length is less than minimum
                echo "Minimum length is ".$min_length;
            }
            mysqli_close($con);
        ?>
    </body>
</html>