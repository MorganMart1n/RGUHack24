<?php include 'connect.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Core29</title>
        <link rel="icon" type="image" href="public/images/favicon-128x128.png">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <link rel="stylesheet" href="public/css/main.css"/>
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

    <div class = "contact info">
        <div class = "contactInfoHeader">
            <h1>Can we help?</h1>
        </div>

        <p>+44 (0)1224 937729</p>
        <a href="hello@core29.uk">Send an email</a>
    </div>

    <div class = "Website purpose">
        <div class = "WebPurposeTitle">
            <h1>Tracking Emissions</h1>
        </div>

        <p>
            This web based app was designed to track energy emissions and 
            find a way to help reduce carbon footprint as part of the core29 challenge.
        </p>
    </div>
</body>
</html>