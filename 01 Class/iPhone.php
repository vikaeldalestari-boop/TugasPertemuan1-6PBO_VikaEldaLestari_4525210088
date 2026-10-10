<?php

class iPhone
{
    // Properties
    // warna/color
    // storage/kapasistas penyimpanan
    private string $color;
    private string $storage;

    // Constructor
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
