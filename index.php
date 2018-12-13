<?php
abstract class Autobus
{
public function move(){
return 'Autobuzul Porneste';
    }
public function rotateLeft(){
return 'Facem La Stinga';
    }
public function rotateRight(){
return 'Facem La Dreapta';
    }
public function stop(){
return 'Oprire Autobus';
    }

}


class Car extends Autobus {

public $name = 'Autobuzul';

public function start()
    {
return $this->name.' '. 'Start Ruta';
    }
public function stop()
    {
return $this->name.' '. 'Stop Ruta';
    }
public function move($x)
    {
return $this->name .' '.$x;
    }

public function rotateRight()
    {
return $this->name . ' ' . parent::rotateRight();
    }
public function rotateLeft()
    {
return $this->name . ' ' . parent::rotateLeft();
    }

}


$car = new Car();
echo $car->start();
?><hr><?
echo $car->move('merge spre oporirea nr 1');
?><hr><?
echo $car->move('stopeaza la oporirea nr 1');
?><hr><?
echo $car->move('porneste la oporirea nr 2');
?><hr><?
echo $car->move('stopeaza la oporirea nr 2');
?><hr><?
echo $car->move('porneste la oporirea nr 3');
?><hr><?
echo $car->move('stopeaza la oporirea nr 3');
?><hr><?
echo $car->move('porneste la oporirea nr 4');
?><hr><?
echo $car->move('Stopeaza la oporirea nr 4');
?><hr><?
echo $car->move('porneste la oporirea nr 5');
?><hr><?
echo $car->move('Stopeaza la oporirea nr 5');
?><hr><?
echo $car->stop();
