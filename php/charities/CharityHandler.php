<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 6:14 PM
 * For: Hackathon
 */

require_once(__DIR__.'/../sql/SQLSyncClass.php');
require_once('Charity.php');
class CharityHandler{

    public function fetchCharity($name){
        $SQL_HOST = "localhost";
        $SQL_DB = "afc";
        $SQL_USER = "afcuser";
        $SQL_PASSWORD = "afcpassword";

        $conn = mysqli_connect($SQL_HOST, $SQL_USER, $SQL_PASSWORD, $SQL_DB);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("SELECT * FROM `charities` WHERE `name`=?;");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                return new Charity($row['Rank'], $row['name'], $row['Description'], $row['raised'], $row["link"], $row["pic1"], $row["long1"], $row["long2"], $row["logo"]);
            }
        }
        else{
            return new Charity(0, "Error", "No charity with that name was found.", 0, "#", "#","#", "Error", "Error");
        }
    }

    public function fetchAllCharities(){
        $SQL_HOST = "localhost";
        $SQL_DB = "afc";
        $SQL_USER = "afcuser";
        $SQL_PASSWORD = "afcpassword";

        $conn = mysqli_connect($SQL_HOST, $SQL_USER, $SQL_PASSWORD, $SQL_DB);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("SELECT * FROM `charities`;");
        $stmt->execute();
        $result = $stmt->get_result();
        $charities = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($charities, new Charity($row['Rank'], $row['name'], $row['Description'], $row['raised'], $row["link"], $row["pic1"], $row["long1"], $row["long2"], $row["logo"]));
            }
        }
        return $charities;
    }


}