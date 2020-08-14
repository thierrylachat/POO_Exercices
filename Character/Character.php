<?php 
class Character {
    protected $health;
    protected $mana;
    protected $stuff;
    protected $power;
    protected $armor = 100;

    public function __construct($_health = 1000, $_mana, $_stuff, $_power){
        // Hydration de l'objet.
        $this -> health = $_health;
        $this -> mana = $_mana;
        $this -> stuff = $_stuff;
        $this -> power= $_power;
    }
    public function __toString()
    {
        return $this -> health .' '.$this -> mana; 
    }
    public function getHealth()
    {
        return $this -> health;
    }
    public function setHealth($_health)
    {
        $this -> health = $_health;
    }
    public function getArmor()
    {
        return $this->armor;
    }
    public function setArmor()
    {
        return $this->armor;
    }
    public function getStuff()
    {
        return $this->stuff;
    }
}
?>