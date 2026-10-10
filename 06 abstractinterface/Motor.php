<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Fuelable.php';
require_once __DIR__ . '/Movable.php';

class Motor extends Vehicle implements Fuelable, Movable
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move(): void
    {
        echo $this->name . " bergerak di tanah gravel.";
    }

    // Implementasi method dari interface Fuelable
    public function refuel(): void
    {
        echo $this->name . " sedang diisi bahan bakar.";
    }
}
