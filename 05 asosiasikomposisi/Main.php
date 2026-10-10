<?php

declare(strict_types=1);

class Dokter
{
    private string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    public function merawat(Pasien $pasien): void
    {
        echo $this->nama . " merawat pasien " . $pasien->getNama() . ".<br>";
    }
}

class Pasien
{
    private string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}

class Pemain
{
    private string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}

class Tim
{
    private string $nama;
    private array $pemain;

    public function __construct(string $nama, array $pemain)
    {
        $this->nama = $nama;
        $this->pemain = $pemain;
    }

    public function tampilkanPemain(): void
    {
        echo "Tim {$this->nama} beranggotakan:<br>";

        foreach ($this->pemain as $pemain) {
            echo "- " . $pemain->getNama() . "<br>";
        }
    }
}

class Bab
{
    private string $judul;

    public function __construct(string $judul)
    {
        $this->judul = $judul;
    }

    public function getJudul(): string
    {
        return $this->judul;
    }
}

class Buku
{
    private string $judul;
    private array $bab;

    public function __construct(string $judul)
    {
        $this->judul = $judul;
        $this->bab = [
            new Bab("Pengenalan PHP"),
            new Bab("Variabel dan Tipe Data"),
            new Bab("Class dan Objek")
        ];
    }

    public function tampilkanBab(): void
    {
        echo "Buku: {$this->judul}<br>";

        foreach ($this->bab as $index => $bab) {
            echo ($index + 1) . ". " . $bab->getJudul() . "<br>";
        }
    }
}

class Main
{
    public static function main(): void
    {
        /**
         * ASOSIASI
         */
        $dokter = new Dokter("Dr. Andi");
        $pasien = new Pasien("Budi");

        $dokter->merawat($pasien);

        /**
         * AGREGASI
         */
        $pemain1 = new Pemain("Eko");
        $pemain2 = new Pemain("Dina");

        $tim = new Tim("Garuda", [$pemain1, $pemain2]);
        $tim->tampilkanPemain();

        /**
         * KOMPOSISI
         */
        $buku = new Buku("Belajar Java");
        $buku->tampilkanBab();

        // Jika buku dihancurkan, bab juga ikut hilang
        unset($buku);
    }
}

Main::main();
