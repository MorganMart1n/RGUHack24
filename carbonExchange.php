<?php include 'connect.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Core29</title>
        <link rel="icon" type="image" href="public/images/favicon-128x128.png">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="public/css/main.css">
    </head>
<body class="commutingBody">
    <header>
        <div class="header">
            <div>
                <img src="public/images/core29-logo.png" alt="">
            </div>
            <div>
                <nav>
                    <ul>
                        <li><a href = "dashboard.php">Home</a></li>
                        <li><a href = "carbonExchange.php">Carbon Exchange</a></li>
                        <li><a href = "index.php">Login</a></li>
                        <li><a href = "co2.php">C02</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<?php
    $sql = "SELECT * FROM procured_items";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Material Id: " . $row["material_id"] . " - Name Of Material: " . $row["material_name"] . " - CO2 Emissions kg per unit: " . $row["CO2_Emissions_kg_CO2_per_unit"] . "<br>";
        }
    } else {
        echo "ZERO RESULTS";
    }
    $conn->close();
?>




</body>
</html>