<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 4:48 PM
 * For: Hackathon
 */

require_once(__DIR__.'/../sql/SQLSyncClass.php');

if (isset($_GET["googleID"])){
    session_start();
    $_SESSION["googleID"] = $_GET["googleID"];
    echo $_SESSION["googleID"];
    echo "Logged in";
}
else{
    echo 'Error: Your token is invalid!';
}