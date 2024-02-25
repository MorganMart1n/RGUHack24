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
                            <li><a href = "carbonExchange.php">Carbon Exchange</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--Form for inputting carbon material -->
    <div class="carbonSearch">
        <form action = "carbonConverter.php" method = "GET">
        <h2>Carbon Search</h2>
        <input type ="text" name = "query" />
        <input type ="submit" value = "Search" />
    
    
        </form>
    </div>
</main>    
<footer>
        <div class="footer">
            <p>Core29 &copy; 2024 | All Rights Reserved</p>
            <img src="public/images/core29-logo-white.png" alt="">
        </div>
    </footer>
</body>
</html>