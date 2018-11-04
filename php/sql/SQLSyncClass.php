<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 1:09 PM
 * For: Hackathon
 */

abstract class SQLSyncClass{

    const SQL_HOST = "adsenseforcharities.com";
    const SQL_DB = "afc";
    const SQL_USER = "afc_user";
    const SQL_PASSWORD = "afc_password";

    /**
     * Abstract class to save data to SQL.
     * @return mixed
     */
    abstract function sync();

    /**
     * Get a connection to the portal's SQL database.
     * @return mysqli The SQL Connection.
     */
    public function getConnection()
    {
        $conn = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASSWORD, SQL_DB);
        return $conn;
    }

}