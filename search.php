<?php include "connect.php";

//saves query value and stores in variable
$query = $_GET['query'];

//Query which uses in the table that matches the query to display energy
$raw_results = mysqli_query($conn, "SELECT * FROM energy_tracking
    WHERE value_tracked = $query OR
    'text' LIKE '%".$query."%'") or die(mysqli_error($conn));

if(mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)){
        echo "<p><h3>".$results['value_tracked']." has been found</h3></p>";
        //echo "it works";
    }
} else {
    echo "No results";
}

mysqli_close($conn);
?>