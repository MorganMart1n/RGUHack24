<?php include "connect.php";

$query = $_GET['query'];

$raw_results = mysqli_query($conn, "SELECT * FROM energy_tracking
    WHERE value_tracked LIKE '%".$query."%' OR
    'text' LIKE '%".$query."%'") or die(mysqli_error($conn));

if(mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)){
        echo "<p><h3>".$results['value_tracked']."</h3>".$results['text']."</p>";
    }
} else {
    echo "No results";
}

mysqli_close($conn);
?>