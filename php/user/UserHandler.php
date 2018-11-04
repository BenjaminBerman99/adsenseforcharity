<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/4/18
 * Time: 12:19 PM
 * For: AFC
 */

require_once ("User.php");
class UserHandler{

    public function getUser($gid){
        $SQL_HOST = "localhost";
        $SQL_DB = "afc";
        $SQL_USER = "afcuser";
        $SQL_PASSWORD = "afcpassword";

        $conn = mysqli_connect($SQL_HOST, $SQL_USER, $SQL_PASSWORD, $SQL_DB);

        if ($conn->connect_error){
            die();
        }

        $table = 'users';
        $stmt = $conn->prepare("SELECT * FROM users WHERE googleID=?;");
        $stmt->bind_param("s", $gid);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                return new User($row['googleID'], $row['email'], $row['donated']);
            }
        }
        else{
            null;
        }
    }

    public function createIfNeeded($gid, $email){
        if ($this->getUser($gid) === null){
            $SQL_HOST = "localhost";
            $SQL_DB = "afc";
            $SQL_USER = "afcuser";
            $SQL_PASSWORD = "afcpassword";

            $conn = mysqli_connect($SQL_HOST, $SQL_USER, $SQL_PASSWORD, $SQL_DB);

            if ($conn->connect_error){
                die();
            }

            $table = 'users';
            $stmt = $conn->prepare("INSERT INTO users (id, googleID, email, donated) VALUES(null, ?,?,0);");
            $stmt->bind_param("is", $gid, $email);
            $stmt->execute();
            return true;
        }
        return false;
    }

}