<?php

    class Vehicule 
    // La classe doit portée une majuscule et le fichier porte le même nom.
    { 
        public $color = 'blanche';
        public $brand = 'peugeot';
        public $model = '205';
        public $power = 4;
        public $engine = 'essence';

        // Le constructeur est "public" et les attributs sont "private". 
        public function __construct($_color='', $_brand='', $_model='', $_power='', $_engine='')
        {
            $this->color = $_color;
            $this->brand = $_brand;
            $this->model = $_model;
            $this->power = $_power;
            $this->engine = $_engine;
        }
    }
