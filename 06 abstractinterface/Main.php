<?php

include_once 'Movable.php';
include_once 'Fuelable.php';
include_once 'Vehicle.php';

include_once 'Car.php';
include_once 'Boat.php';
include_once 'Building.php';
include_once 'Motor.php';

class Main
{
    public static function main()
    {
        // Membuat objek Car dan Boat
        $myCar = new Car("Mobil Sport");
        $myBoat = new Boat("Perahu Motor");
        $myMotor = new Motor("Motor Gravel");
        $myBuilding = new Building("Gedung Tinggi");

        // Menampilkan informasi dan menggerakkan kendaraan
        $myCar->showInfo();
        $myCar->move();
        $myCar->refuel();

        echo PHP_EOL; // Pembatas antar output

        $myBoat->showInfo();
        $myBoat->move();
        $myBoat->refuel();

        echo PHP_EOL; // Pembatas antar output

        $myMotor->showInfo();
        $myMotor->move();
        $myMotor->refuel();

        echo PHP_EOL; // Pembatas antar output

        $myBuilding->showInfo();
        // $myBuilding->move(); // Tidak bisa dipanggil karena Building tidak mengimplementasikan Movable
        // $myBuilding->refuel(); // Tidak bisa dipanggil karena Building tidak mengimplementasikan Fuelable
    }
}

Main::main();
