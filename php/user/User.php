<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 3:22 PM
 * For: Hackathon
 */

require_once ("LevelCalculator.php");
require_once (__DIR__.'/../sql/SQLSyncClass.php');
class User extends SQLSyncClass {

    private $googleId, $email, $donated;

    /**
     * User constructor.
     * @param $googleId
     * @param $email
     * @param $donated
     */
    public function __construct($googleId, $email, $donated)
    {
        $this->googleId = $googleId;
        $this->email = $email;
        $this->donated = $donated;
    }

    /**
     * @return mixed
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getDonated()
    {
        return $this->donated;
    }

    /**
     * @param mixed $donated
     * @return User
     */
    public function setDonated($donated)
    {
        $this->donated = $donated;
        return $this;
    }

    public function getLevel(){
        $lc = new LevelCalculator();
        return $lc->getLevel($this->getDonated());
    }

    public function getRemaining(){
        $lc = new LevelCalculator();
        return $lc->getRemaining($this->getDonated());
    }

    /**
     * Abstract class to save data to SQL.
     * @return mixed
     */
    function sync()
    {
        $table = 'users';
        $conn = $this->getConnection();
        if ($conn->connect_error)
            die();
        $stmt = $conn->prepare("UPDATE `$table` WHERE `googleID`=? SET `email`=?, `donated`=?, `helped`=?;");
        $stmt->bind_param($this->getGoogleId(), $this->getEmail(), $this->getDonated(), $this->getHelpedJSON());
        $stmt->execute();
    }
}