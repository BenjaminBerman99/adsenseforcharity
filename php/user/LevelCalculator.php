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
        $level1 = floor(($donationAmount / 5)*100)/100;
        if ($level1 > 5){
            $level2 = floor((($donationAmount - 25)/10)*100)/100;
            if ($level1+$level2> 10){
                return floor((($donationAmount - 75)/25)*100)/100;
            }
            else{
                return $level1+$level2+1;
            }
        }
        else{
            return $level1+1;
        }
    }

    public function getRemaining($donationAmount){
        $level = $this->getLevel($donationAmount);
        if ($level > 10){
            
        }
    }

}