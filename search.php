<?php include "connect.php";

$query = $_GET['query'];

$raw_results = mysqli_query($conn, "SELECT * FROM energy_tracking
    WHERE value_tracked = $query OR
    'text' LIKE '%".$query."%'") or die(mysqli_error($conn));

if(mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)){
        echo "<p><h2>".$results['value_tracked']." has been found</h2></p>";
        //echo "it works";
    }
} else {
    echo "<h1 class = noResults>No results</h1>";
}

mysqli_close($conn);
?>

<link rel = stylesheet href = "public/css/main.css">