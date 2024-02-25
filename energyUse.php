<?php include 'connect.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Core29</title>
        <link rel="icon" type="image" href="public/images/favicon-128x128.png">
        <link rel = "stylesheet" href = "public/css/main.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src = "public/js/energyUse.js"></script>
    </head>
<body>
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
    <br>
    <br>
    
    <main>
        <button onclick = calculateEnergyUse()>Track emission</button>

        <button style = float:right id = "displayButton"  onclick = listOutputs()>List outputs</button>

        <div id = "energyValues"></div>

        <br>
        <br>
        <p id = "avgEngPara"></p>
    </main>    
    <footer>
        <div class="footer">
            <p>Core29 &copy; 2024 | All Rights Reserved</p>
            <img src="public/images/core29-logo-white.png" alt="">
        </div>
    </footer>
</body>
</html>