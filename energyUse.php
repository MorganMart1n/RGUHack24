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
                        <li><a href = "carbonExchange.php">Carbon Exchange</a></li>
                        <li><a href = "index.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    
    <main>
        <div class="energySearch">
            <h2>Search for a Captured Energy Consumption Value:</h2>
            <!--Search form for energy consumption -->
            <form action = "search.php" method = "GET">
                <input type = "text" name = "query" />
                <input type = "submit" value = "Search" />
            </form>
        </div>
        <div class="energyAddBtn">
            <!--Generates a mesurement of energy-->
            <button onclick = calculateEnergyUse()>Add Energy Usage</button>
            <!--When clicked display all energy values-->
            <button id = "displayButton"  onclick = listOutputs()>List outputs</button>
        </div>
        
        <div id = "energyValues"></div>
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