<?php
abstract class Automobil
{
    public function move(){
        return 'Merge';
    }
    public function rotateLeft(){
        return 'Rotire la Stinga';
    }
    public function rotateRight(){
        return 'Rotire la Dreapta';
    }
    public function distance($x){
        return $x;
    }
}
class Car extends Automobil {
    private $name = 'Masina';
    public function Start()
    {
        return $this->name. 'Start';
    }
    public function Stop()
    {
        return $this->name. 'Stop';
    }
    public function move($x)
    {
    return $this->name . ' ' . parent::move() . ' '. $x;
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



$car = new Car();
echo $car->start();
?><hr><?
echo $car->move(10);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->move(40);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(30);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(25);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->move(35);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(35);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(25);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(70);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(45);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(20);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->move(10);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->move(100);
?><hr><?
echo $car->stop();
