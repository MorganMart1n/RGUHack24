<?php include 'connect.php';



$query = $_POST['username'];
//Signs in based on user input
$raw_results = mysqli_query($conn, "SELECT * FROM user
    WHERE username LIKE '%".$query."%' OR
    'text' LIKE '%".$query."%'") or die(mysqli_error($conn));

if(mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)){
        header("Location: dashboard.php");
    }}else {
    echo "Login failed";
}

mysqli_close($conn);
?>










