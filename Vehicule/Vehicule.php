<?php

    class Vehicule 
    // Mettre le même nom que le fichier, attention aux majuscules si présentes.
    { 
        public $color = 'blanche';
        public $brand = 'peugeot';
        public $model = '205';
        public $power = 4;
        public $engine = 'essence';

        public function __construct($_color='', $_brand='', $_model='', $_power='', $_engine='')
        {
            $this->color = $_color;
            $this->brand = $_brand;
            $this->model = $_model;
            $this->power = $_power;
            $this->engine = $_engine;
        }
    }

