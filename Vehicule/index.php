<?php 
// L'instruction require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.

    require_once 'Vehicule.php';

    $veh1 = new Vehicule('Blanche','Toyota','RAV-4',193,'Hybride');
    $veh2 = new Vehicule('Rouge','Tesla','Model-S',193,'Electrique');
?>
    <p><?php echo $veh1->brand.' '.$veh1->color.' '.$veh1->model.' '.$veh1->power.' '.$veh1->engine;?></p>
    <p><?php echo $veh2->brand.' '.$veh2->color.' '.$veh2->model.' '.$veh2->power.' '.$veh2->engine;?></p>

<?php  
    $number = 2;
    $number2 = $number;
    $number = 5;
    echo $number .'<br>';
    echo $number2 .'<br>';

    $veh3 = $veh1;
    $veh1->color ='Noir';

    echo $veh3->color .'<br>';
    echo $veh1->color;
?>