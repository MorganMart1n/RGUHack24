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
        
        <div class="locationInput">
            <div>
                <h2>Start</h2>
                <input type="text" id="startPositionInput">
            </div>
            <div>
                <h2>End</h2>
                <input type="text" id="endPositionInput">
            </div>
        </div>
        

        <script>
            function saveStartandEnd(){
                var startPosition = document.getElementById("startPositionInput").value;
                var endPosition = document.getElementById("endPositionInput").value;
            }
        </script>
        <div class="radioChoice">
            <h2>How did u travel</h2>
            <label class="container">Car</label>
                <input type="radio" name="radio" id="carSelected">
            <label class="container">Bus</label>
                <input type="radio" name="radio" id="busSelected">
            <label class="container">Train</label>
                <input type="radio" name="radio" id="trainSelected">
                
            
        </div>

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

    
    <footer>
        <div class="footer">
            <p>Core29 &copy; 2024 | All Rights Reserved</p>
            <img src="public/images/core29-logo-white.png" alt="">
        </div>
    </footer>

</body>
</html>