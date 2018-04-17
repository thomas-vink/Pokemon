<?php

class Pokemon {
    public $Name;
    public $CurrentHealth;
    public $MaxHealth;
    public $Weakness;
    public $Defense;    // this will be substracted from any attack

    public $Attacks;    // array


    public function __construct($nm, $def, $maxhealth) {
        $this->Name = $nm;
        $this->Defense = $def;
        $this->MaxHealth = $maxhealth;
        $this->CurrentHealth = $this->MaxHealth;
        $this->Attacks = [];
 		$this->Weakness = [];
    }

    public function DoDamage($dmg) {
        $calculatedDamage = $dmg - $this->Defense;
        if( $calculatedDamage > 0) {
            $this->CurrentHealth = $this->CurrentHealth - $calculatedDamage;
        }
    }
}	