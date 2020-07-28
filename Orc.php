<?php

class Orc extends Character{
    private $damage;

    public function getDamage(){
        return $this->damage;
    }

    public function setDamage($damageValue){
        $this->damage = $damageValue;
    }
    
    public function __construct($healthValue, $rageValue){
        parent::__construct($healthValue, $rageValue);
    }

    public function randomOrcAttackDamage(){
    $this->setDamage(rand(600,800));
    }
}


