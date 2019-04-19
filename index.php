<?php

//echo 'Hello';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Doodle</title>
</head>
<body>
<!--<p>Hi</p>-->

<div class="main-section">
<!--    LOGO-->
    <div class="logoContainer">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="">
    </div>
<!--    SEARCH-->
    <div class="searchContainer">

        <form action="search.php" method="GET">
            <input type="text" name="term" class="searchBox" placeholder="Enter anything..">
            <input type="submit" value="Search" class="searchButton">

        </form>
    </div>
</div>
</body>
</html>
