<!DOCTYPE html>
<html>
<head><title>viewer page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<header>
    <div class="logo">
        <h1 style="font-style: italic; text-align: center; text-decoration: none; color: #fff;"> Online
            Live Streaming</h1>
    </div>
</header>
<div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span></div>
    <ul>
        <li> <a href="Home.php" class="active">Home</a></li>
        <li> <a href="services.php" class="active">services</a></li>
        <li><a href="index.php" class="active">logout</a></li>
    </ul>
</div>
<div class="two">
    <div class="yes">
        <iframe src="http://192.168.1.100" >
            <div class="me"></div>
        </iframe>
    </div>
    <div class="container"><section>
            <ul class="Slider">
                <li class="slide active"><div class="text"></div>
                </li
                <li class="slide">
                    <div class="text"></div>
                </li>
                <li class="slide">
                    <div class="text"></div>
                <li class="slide"><div class="text"></div>
                <li class="slide">
                    <div class="text">
                    </div>
                </li>
                <li class="slide">
                    <div class="text"></div>
                </li>
                <li class="slide">
                    <div class="text">
                    </div></li></ul>
        </section></div>
</div>
<script src="slider.js"></script>
<footer>
    <p>&copy 2019 kendricks. All Rights Reserved</p>
</footer>
</body>
</html>