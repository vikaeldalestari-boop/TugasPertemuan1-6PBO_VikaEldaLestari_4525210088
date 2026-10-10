<?php

$baseDir = __DIR__;
$requiredClasses = ['BangunDatar', 'Lingkaran', 'Persegi', 'Segitiga'];

function requireClassIfNeeded(string $className, string $baseDir): void
{
    if (class_exists($className, false)) {
        return;
    }

    $candidateFiles = [
        $baseDir . DIRECTORY_SEPARATOR . $className . '.php',
        $baseDir . DIRECTORY_SEPARATOR . strtolower($className) . '.php',
        $baseDir . DIRECTORY_SEPARATOR . ucfirst(strtolower($className)) . '.php',
        $baseDir . DIRECTORY_SEPARATOR . strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $className)) . '.php',
    ];

    foreach ($candidateFiles as $classFile) {
        if (file_exists($classFile)) {
            require_once $classFile;
            if (class_exists($className, false)) {
                return;
            }
        }
    }

    throw new RuntimeException("Class {$className} tidak ditemukan.");
}

foreach ($requiredClasses as $className) {
    requireClassIfNeeded($className, $baseDir);
}

if (!class_exists('BangunDatar', false)) {
    throw new RuntimeException('Class BangunDatar tidak ditemukan.');
}
if (!class_exists('Lingkaran', false)) {
    throw new RuntimeException('Class Lingkaran tidak ditemukan.');
}
if (!class_exists('Persegi', false)) {
    throw new RuntimeException('Class Persegi tidak ditemukan.');
}
if (!class_exists('Segitiga', false)) {
    throw new RuntimeException('Class Segitiga tidak ditemukan.');
}

class App
{
    public static function main()
    {
        // BangunDatar adalah kelas induk/base class.
        // Tidak seharusnya dibuat objek langsung.
        // $bd = new BangunDatar();
        // $bd->luas();
        // $bd->keliling();

        // instantiate / membuat objek lingkaran
        $lk = new Lingkaran(15);
        echo "Luas lingkaran: " . $lk->luas() . PHP_EOL;
        echo "keliling lingkaran: " . $lk->keliling() . PHP_EOL;

        // instantiate / membuat objek Persegi
        $pj = new Persegi(10);
        echo "Luas Bujur Sangkar: " . $pj->luas() . PHP_EOL;
        echo "keliling Bujur Sangkar: " . $pj->keliling() . PHP_EOL;

        // instantiate / membuat objek segitiga
        $sg = new Segitiga(10, 8);
        echo "Luas Segitiga: " . $sg->luas() . PHP_EOL;

        // karena class Segitiga tidak mendefinisikan keliling
        // maka ketika $sg memanggil keliling(), yang terpanggil
        // adalah keliling() yang ada di parent/super class yaitu
        // BangunDatar
        $sg->keliling();
        // echo "keliling Segitiga: " . $sg->keliling();
    }
}

App::main();
