<?php

class iPhone
{
    private string $color;
    private string $storage;

    public function __construct(string $color, string $storage)
    {
        $this->color = $color;
        $this->storage = $storage;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getStorage(): string
    {
        return $this->storage;
    }
}

class Main
{
    public static function main(): void
    {
        // membuat object iPhone dari class iPhone
        $iphone13 = new iPhone("Red", "128GB"); // proses inisiasi atau instantiation
        $iphone14 = new iPhone("Grey", "256GB"); // proses inisiasi atau instantiation

        echo "Spesifikasi iPhone 13\n";
        echo "Warna: " . $iphone13->getColor() . "\n";
        echo "Storage: " . $iphone13->getStorage() . "\n";

        echo "Spesifikasi iPhone 14\n";
        echo "Warna: " . $iphone14->getColor() . "\n";
        echo "Storage: " . $iphone14->getStorage() . "\n";
    }
}

Main::main();
