<?php
// La classe Orc hérite de la classe Character.
class Orc extends Character
{
    public function __construct($_health, $_mana, $_stuff, $_power)
    {
        // $this -> health = $_health;
        // $this -> mana = $_mana;
        // $this -> stuff = $_stuff;
        // $this -> power = $_power;

        parent::__construct($_health, $_mana, $_stuff, $_power);

    }
    public function useHammer()
    {
        if($this -> power > 6) {
            return 'You get the power !';
        }
        return 'You don\'t have enough strenght !!!';
    }
    public function useSword()
    {
        return 'Arhhhhhhhhhhh';
    }
}