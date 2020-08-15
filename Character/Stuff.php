<?php 

class Stuff 
{
    private $_head;
    private $_body;
    private $_weapon;
    /**
     * Les commentaires techniques facilitent la lecture et la compréhension du code.
     * Le constructeur permet d'hydrater mon objet lors de sa création.
     * @param string $_head
     * @param string $_body
     * @param string $_weapon
     */

    public function __construct($_head,$_body,$_weapon)
    {
        $this->head = $_head;
        $this->body = $_body;
        $this->weapon = $_weapon;
    }
    public function __get($attr)
    {
        return 'Tu essaies d\'accéder à la propriété de Stuff '.$this->$attr;
    }
}