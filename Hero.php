<?php
class Hero extends Character{
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function getWeapon(){
       return $this->weapon;
    }

   public function getWeaponDamage(){
      return $this->weaponDamage;
     }

   public function getShield(){
      return $this->shield;
     }

   public function getShieldValue(){
      return $this->shieldValue;
     }

   public function setWeapon($weaponName){
      $this->weapon = $weaponName;
     }

   public function setWeaponDamage($weaponDamageValue){
      $this->weaponDamage = $weaponDamageValue;
   }

   public function setShield($shieldName){
      $this->shield = $shieldName;
   }

   public function setShieldValue($shieldDefenseValue){
      $this->shieldValue = $shieldDefenseValue;
   }

   public function __construct($healthValue, $rageValue,$weaponName, $weaponDamageValue, $shieldName, $shieldDefenseValue){
      parent::__construct($healthValue, $rageValue);
      $this->weapon = $weaponName;
      $this->weaponDamage = $weaponDamageValue;
      $this->shield = $shieldName;
      $this->shieldValue = $shieldDefenseValue;
      echo 'Bravo, vous venez de créer un héros <br>';
      echo 'Vie : ' . parent::getHealth() . '<br>';
         // $this->getHealth()
      echo 'Rage : ' . $this->getRage() . '<br>';
      echo 'DPS : ' . $this->getWeaponDamage() . '<br>';
      echo 'Weapon name : ' . $this->getWeapon() . '<br>';
      echo 'Protection : ' . $this->getShieldValue() . '<br>';
      echo 'Nom du bouclard : ' . $this->getShield() . '<br>';
   } 

   public function attacked($attackValue){
      $newHealth = $this->getHealth() - ($attackValue - $this->getShieldValue());
      $this->setHealth($newHealth);
   }

   public function rageIncrease($increaseValue){
      $rageValue = $this->getRage();
      $this->setRage($rageValue + $increaseValue);
   }

   }
