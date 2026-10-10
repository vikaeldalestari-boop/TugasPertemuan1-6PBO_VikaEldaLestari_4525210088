<?php

abstract class Handphone
{
    protected string $merk;
    protected string $model;

    public function __construct(string $merk, string $model)
    {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function nyalakan(): void
    {
        echo "Handphone dinyalakan\n";
    }

    public function telepon(string $nomor): void
    {
        echo "Menelpon $nomor\n";
    }

    public function matikan(): void
    {
        echo "Handphone dimatikan\n";
    }
}

class Smartphone extends Handphone
{
    public function nyalakan(): void
    {
        echo "Smartphone {$this->merk} {$this->model} dinyalakan\n";
    }

    public function telepon(string $nomor): void
    {
        echo "Smartphone {$this->merk} {$this->model} menelpon $nomor\n";
    }

    public function matikan(): void
    {
        echo "Smartphone {$this->merk} {$this->model} dimatikan\n";
    }

    public function aksesInternet(): void
    {
        echo "Akses internet melalui {$this->merk} {$this->model}\n";
    }
}

class FeaturePhone extends Handphone
{
    public function nyalakan(): void
    {
        echo "Feature phone {$this->merk} {$this->model} dinyalakan\n";
    }

    public function telepon(string $nomor): void
    {
        echo "Feature phone {$this->merk} {$this->model} menelpon $nomor\n";
    }

    public function matikan(): void
    {
        echo "Feature phone {$this->merk} {$this->model} dimatikan\n";
    }

    public function mainGameSnake(): void
    {
        echo "Main game Snake di {$this->merk} {$this->model}\n";
    }
}

class Main
{
    public static function main(array $args = []): void
    {
        $daftarHandphone = [
            new Smartphone("Samsung", "Galaxy S21"),
            new FeaturePhone("Nokia", "3310"),
        ];

        foreach ($daftarHandphone as $hp) {
            $hp->nyalakan();
            $hp->telepon("08123456789");
            $hp->matikan();
            echo PHP_EOL;
        }

        foreach ($daftarHandphone as $hp) {
            if ($hp instanceof Smartphone) {
                $hp->aksesInternet();
            } elseif ($hp instanceof FeaturePhone) {
                $hp->mainGameSnake();
            }
        }
    }
}

Main::main();
