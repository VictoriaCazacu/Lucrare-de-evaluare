<?php
abstract class Autobus
{
    public function move(){
        return 'Se porneste autobusul';
    }
    public function rotateLeft(){
        return 'Rotire la Stinga';
    }
    public function rotateRight(){
        return 'Rotire la Dreapta';
    }
    public function stop(){
        return 'Oprire Autobus';
    }
}
class Bus extends Autobus {
    private $name = 'Autobus';
    public function Start()
    {
        return $this->name. 'Start ruta';
    }
    public function Stop()
    {
        return $this->name. 'Stop ruta';
    }
    public function move($x)
    {
        return $this->name . ' '. $x;
    }
    public function rotateRight()
    {
        return $this->name . ' ' . parent::rotateRight() . ' Rotire la dreapta';
    }
    public function rotateLeft()
    {
        return $this->name . ' ' . parent::rotateLeft() . ' Rotire la stinga';
    }
}

$Bus = new Bus();
echo $bus->start();
?><hr><?
echo $bus ->move('')

