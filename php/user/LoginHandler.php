<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 4:48 PM
 * For: Hackathon
 */

require_once('UserHandler.php');

if (isset($_GET["googleID"])){
    session_start();
    $_SESSION["googleID"] = $_GET["googleID"];
    $_SESSION["email"] = $_GET["email"];
    $_SESSION["name"] = $_GET["name"];
    $_SESSION["pic"] = $_GET["pic"];
    $uh = new UserHandler();
    echo $uh->createIfNeeded($_GET["googleID"], $_GET["email"]);
    header("location: http://www.adsenseforcharities.com");
}
else{
    echo 'Error: Your token is invalid!';
}