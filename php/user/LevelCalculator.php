<?php
/**
 * Created by Cole Kasaba
 * Copyright (c) Airbornz 2018
 * Date: 11/3/18
 * Time: 11:10 PM
 * For: Hackathon
 */

class LevelCalculator{

    public function getLevel($donationAmount){
        $level = 0;
        while ($level < 5 && $donationAmount >= 5){
            $donationAmount -= 5;
            $level++;
        }
        while ($level < 10 && $donationAmount >= 10){
            $donationAmount -= 10;
            $level++;
        }
        while ($donationAmount >= 25){
            $donationAmount -= 25;
            $level++;
        }
        if ($donationAmount == 0){
            $level++;
        }
        return $level;
    }

    public function getRemaining($donationAmount){
        $level = 0;
        while ($level < 5 && $donationAmount >= 5){
            $donationAmount -= 5;
            $level++;
        }
        while ($level < 10 && $donationAmount >= 10){
            $donationAmount -= 10;
            $level++;
        }
        while ($donationAmount >= 25){
            $donationAmount -= 25;
            $level++;
        }
        if ($donationAmount == 0){
            $level++;
        }
        if ($level < 5){
            return 5-$donationAmount;
        }
        else if ($level < 10){
            return 10-$donationAmount;
        }
        else{
            return 25-$donationAmount;
        }
    }

}