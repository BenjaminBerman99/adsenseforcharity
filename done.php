<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/4/18
 * Time: 1:34 PM
 * For: AFC
 */
require_once ("php/user/UserHandler.php");
session_start();
if (isset($_GET["save"]) && isset($_SESSION["googleID"])){

    $uh = new UserHandler();
    $usr = $uh->getUser($_SESSION["googleID"]);
    $usr->setDonated($save+$usr->getDonated());

}
header("location: http://www.adsenseforcharities.com");