<?php 
include 'connect.php';
//store form into variable
$query = $_GET["query"];
//Displays the information of the queried material name
$raw_results = mysqli_query($conn, "SELECT * FROM procured_items 
                                    WHERE material_name = '" . $query ."' 
                                    AND CO2_Emissions_kg_CO2_per_unit < 1000000 
                                    AND category = 'Metal'") or die(mysqli_error($conn));
//displays results
if(mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)){
        echo "<p><h3>".$results['material_name']." has been found</h3></p>";
        echo "<p>CO2 Emissions kgs per unit: ".$results['CO2_Emissions_kg_CO2_per_unit']."</p>";
        echo "<p>Category: ".$results['category']."</p>";
    }
} else {
    //error handling
    echo "No results";
}

mysqli_close($conn);
?>





