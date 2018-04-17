<?php

class Attack {
    public $Name;           // SlashAttack
    public $AttackPoints;   // TODO: implement https://bulbapedia.bulbagarden.net/wiki/Damage

    public function __construct($nme, $attack_points, $accuracy) {
        $this->Name = $nme;
        $this->AttackPoints = $attack_points;
        $this->Accuracy = $accuracy;
    }

    public function Execute($target) {
        if ($target == null) {
            die('Cannot execute Attack; target is null');
        }
/*
        if (gettype($target) !=  "Pokemon") {
            die('Cannot execute Attack; target is not of type Pokemon (' . gettype($target) . ')');
        }
*/
        $target->DoDamage($this->AttackPoints);
    }
}