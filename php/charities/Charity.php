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

    private $id, $name, $desc, $payment, $raised, $owner;

    /**
     * Charity constructor.
     * @param $id
     * @param $name
     * @param $desc
     * @param $payment
     * @param $raised
     * @param $owner
     */
    public function __construct($id, $name, $desc, $payment, $raised, $owner)
    {
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
        $this->payment = $payment;
        $this->raised = $raised;
        $this->owner = $owner;
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
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     * @return Charity
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
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
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     * @return Charity
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        $this->sync();
        return $this;
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
        $stmt = $conn->prepare("UPDATE `$table` WHERE `id`=? SET `name`=?, `description`=?, `owner`=?, `raised`=?;");
        $stmt->execute();
    }
}