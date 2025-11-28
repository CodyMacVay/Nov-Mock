<?php
session_start();
require_once "assets/common.php";

echo "<!DOCTYPE html>";
echo "<html>";

echo "<head>";
    echo "<title> Rolsa Technologies </title>";
    echo "<link rel='stylesheet' type='text/css' href='css/styles.css' />";
echo "</head>";

echo "<body>";
echo "<div class='container'>";

require_once "assets/topbar.php";
require_once "assets/nav.php";

echo "<div class='content'>";
echo "<br>";

echo usermessage();

    echo "<h2> Go Green. Save Energy. Change the World.</h2>";

    echo "<p class='content'> Rolsa technologies is a green energy company looking to help people decrease their carbon footprint by
                              using products such as EV chargers, solar panels or even implementing smart home systems. </p>";

        echo "<div class='features'>";
            echo "<div class='feature'>";
                echo "<img src='images/EVcharger.jpg' alt='EV Charger'>";
                echo "<h3>Electric Vehicle Chargers</h3>";
                echo "<p>This is on of the products that Rolsa Technologies has to offer. </p>";
            echo "</div>";
            echo "<div class='feature'>";
                echo "<img src='images/solarpanel.webp' alt='Solar panels'>";
                echo "<h3>Solar Panels</h3>";
                echo "<p>Rolsa Technologies offers a variety of solar panels aswell. </p>";
            echo "</div>";
            echo "<div class='feature'>";
                echo "<img src='images/Smartsystems.jpg' alt='Smart home systems'>";
                echo "<h3>Smart home systems</h3>";
                echo "<p> We also provide smart home systems</p>";
            echo "</div>";
        echo "</div>";

    echo "<p class='content'> You need to be registered to login and book. This is version 1 the login will be available with version 2. </p>";

echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>