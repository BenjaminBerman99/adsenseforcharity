<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 1:07 PM
 * For: Hackathon
 */

require_once(__DIR__.'/../sql/SQLSyncClass.php');
class Charity extends SQLSyncClass {

    private $rank, $name, $desc, $raised, $link, $pic1, $long1, $long2, $logo;

    /**
     * Charity constructor.
     * @param $rank
     * @param $name
     * @param $desc
     * @param $raised
     * @param $link
     * @param $pic1
     * @param $long1
     * @param $long2
     * @param $logo
     */
    public function __construct($rank, $name, $desc, $raised, $link, $pic1, $long1, $long2, $logo)
    {
        $this->rank = $rank;
        $this->name = $name;
        $this->desc = $desc;
        $this->raised = $raised;
        $this->link = $link;
        $this->pic1 = $pic1;
        $this->long1 = $long1;
        $this->long2 = $long2;
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Charity
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->sync();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     * @return Charity
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        $this->sync();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRaised()
    {
        return $this->raised;
    }

    /**
     * @param mixed $raised
     * @return Charity
     */
    public function setRaised($raised)
    {
        $this->raised = $raised;
        $this->sync();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getPic1()
    {
        return "http://".$this->pic1;
    }

    /**
     * @return mixed
     */
    public function getLong1()
    {
        return $this->long1;
    }

    /**
     * @return mixed
     */
    public function getLong2()
    {
        return $this->long2;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return "http://".$this->logo;
    }

    /**
     * Abstract class to save data to SQL.
     * @return mixed
     */
    function sync()
    {
        $table = 'charities';
        $conn = $this->getConnection();
        if ($conn->connect_error)
            die();
        $stmt = $conn->prepare("UPDATE `$table` WHERE `rank`=? SET `name`=?, `description`=?, `raised`=?;");
        $stmt->bind_param($this->rank, $this->name, $this->desc, $this->raised);
        $stmt->execute();
    }
}