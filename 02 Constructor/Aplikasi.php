<?php

class Mahasiswa
{
    private $nama;
    private $nim;
    private $umur;

    public function __construct($nama = "", $nim = "", $umur = 0)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function tampilkanInfo()
    {
        echo "Nama : " . $this->nama . PHP_EOL;
        echo "NIM  : " . $this->nim . PHP_EOL;
        echo "Umur : " . $this->umur . PHP_EOL;
    }
}

class Aplikasi
{
    public static function main(array $args = [])
    {
        // Menggunakan constructor tanpa parameter
        // $mhs1 = new Mahasiswa();
        // $mhs1->tampilkanInfo();

        // echo PHP_EOL;

        // Menggunakan constructor dengan 2 parameter
        // $mhs2 = new Mahasiswa("Budi", "12345678");
        // $mhs2->setUmur(20);
        // $mhs2->tampilkanInfo();

        // echo PHP_EOL;

        // Menggunakan constructor dengan 3 parameter
        // $mhs3 = new Mahasiswa("Siti", "87654321", 22);
        // $mhs3->tampilkanInfo();

        $soja = new Mahasiswa();
        $soja->tampilkanInfo();

        // memberikan value Soja Purnamasari ke property nama dari objek soja
        $soja->setNama("Soja Purnamasari");
        echo "Nama : " . $soja->getNama() . PHP_EOL;

        $soja->setNim("4523210104");
        echo "NIM : " . $soja->getNim() . PHP_EOL;

        $soja->setUmur(15);
        echo "Umur : " . $soja->getUmur() . PHP_EOL;

        // Constructor lengkap
        $nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
        $nenden->tampilkanInfo();
    }
}

Aplikasi::main();
