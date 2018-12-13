<?php
abstract class Autobus
{

    public function move(){
        return 'Autobuzul Porneste';
    }
    public function rotateLeft(){
        return 'Face La Stinga';
    }
    public function rotateRight(){
        return 'Face La Dreapta';
    }
    public function stop(){
        return 'Oprire Autobus';
    }
    public function fuel(){
        return 'Combustibil';
    }
    public function distance(){
        return 'parcurge distanta de';
    }
}


class Car extends Autobus {

    public $name = 'Autobuzul';

    public function fuelConsumption($a)
    {
        return $this->name.' '. 'consuma'.' '.$a.' '.'litri la 100km';
    }
    public function maxPassengers($b)
    {
        return $this->name.' '.'are numarul maxim'.' '.$b.' '.'pasageri';
    }
    public function distance($z)
    {
        return $this->name . ' ' . parent::distance() .' '.$z.' '.'metri';
    }

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



    private $configuration = null;
    public function __construct($configuration){
        $this->configuration = $configuration;
    }

    public function vacancies()
    {
        return !empty($this->configuration['vacancies']);
    }

    public function fuelResidue(){
        return !empty($this->configuration['fuelResidue']);
    }

    public function fuel($y){
        if(!$this->vacancies()){
            return 'Nu au ramas locuri libere';
        }
        if(!$this->fuelResidue()){
            return 'Nu a mai ramas combustibil';
        }
        return 'Combustibil ramas in rezervuar'.' '.$y.' '.'%';

    }
}

$configuration = [
    "vacancies" =>'1',
    "fuelResidue" => '1'
];
$car = new Car($configuration);

echo $car->fuelConsumption(7);
?><hr><?
echo $car->maxPassengers(25);
?><hr><?
echo $car->start();
?><hr><?
echo $car->fuel(100);
?><hr><?
echo $car->move('merge spre oporirea nr 1');
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->distance(50);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(15);
?><hr><?
echo $car->move('stopeaza la oporirea nr 1');
?><hr><?
echo $car->move('porneste la oporirea nr 2');
?><hr><?
echo $car->fuel(90);
?><hr><?
echo $car->distance(100);
?><hr><?
echo $car->move('stopeaza la oporirea nr 2');
?><hr><?
echo $car->move('porneste la oporirea nr 3');
?><hr><?
echo $car->fuel(77);
?><hr><?
echo $car->distance(30);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(25);
?><hr><?
echo $car->move('stopeaza la oporirea nr 3');
?><hr><?
echo $car->move('porneste la oporirea nr 4');
?><hr><?
echo $car->fuel(60);
?><hr><?
echo $car->distance(10);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(15);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->distance(10);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(13);
?><hr><?
echo $car->move('Stopeaza la oporirea nr 4');
?><hr><?
echo $car->move('porneste la oporirea nr 5');
?><hr><?
echo $car->fuel(40);
?><hr><?
echo $car->distance(100);
?><hr><?
echo $car->move('Stopeaza la oporirea nr 5');
?><hr><?
echo $car->fuel(30);
?><hr><?
echo $car->distance(50);
?><hr><?
echo $car->stop();
?><hr><?
echo $car->fuel(20);
?><hr><?