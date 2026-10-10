<?php

class FeaturePhone
{
    private string $merk;
    private string $model;

    public function __construct(string $merk, string $model)
    {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function nyalakan(): void
    {
        echo "Feature Phone " . $this->merk . " " . $this->model . " dinyalakan." . PHP_EOL;
    }

    public function matikan(): void
    {
        echo "Feature Phone " . $this->merk . " " . $this->model . " dimatikan." . PHP_EOL;
    }

    public function telepon(string $nomor): void
    {
        echo "Melakukan panggilan suara ke nomor " . $nomor . PHP_EOL;
    }

    public function mainGameSnake(): void
    {
        echo "Memainkan game Snake." . PHP_EOL;
    }
}
