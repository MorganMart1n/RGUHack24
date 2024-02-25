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
                        <li><a href = "commuting.php">Commuting Insights</a></li>
                        <li><a href = "energyUse.php">Energy tracker</a></li>
                        <li><a href = "co2.php">Emissions tracker</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <form>
        <h2>Start</h2>
        <input type="text" id="startPositionInput">
        <h2>End</h2>
        <input type="text" id="endPositionInput">

        <script>
            function saveStartandEnd(){
                var startPosition = document.getElementById("startPositionInput").value;
                var endPosition = document.getElementById("endPositionInput").value;
            }
        </script>

        <label>How did u travel</label>
        <label class="container">Car
            <input type="radio" name="radio" id="carSelected">
            <span class="checkmark"></span>
        </label>
        <label class="container">Bus
            <input type="radio" name="radio" id="busSelected">
            <span class="checkmark"></span>
        </label>
        <label class="container">Train
            <input type="radio" name="radio" id="trainSelected">
            <span class="checkmark"></span>
        </label>

        <script>
            // if statement to get selected travel method

            function selectedMethod(){

                var methodOfTravel = "";

                if (carSelected == true){
                    methodOfTravel = "car";
                }
                if (busSelected == true){
                    methodOfTravel = "bus";
                }
                if(trainSelected == true){
                    methodOfTravel = "train";
                }

            }
        </script>

        <button type="submit">Add</button>
    </form>

    

</body>
</html>