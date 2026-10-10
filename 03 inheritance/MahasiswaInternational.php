<?php
// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa
{
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    // Constructor 1: tanpa parameter, memanggil constructor parent
    public function __construct()
    {
        $args = func_get_args();

        if (count($args) === 0) {
            parent::__construct();
            $this->negaraAsal = "Belum Diisi";
            return;
        }

        if (count($args) === 3) {
            [$nama, $nim, $negaraAsal] = $args;
            parent::__construct($nama, $nim);
            $this->negaraAsal = $negaraAsal;
            return;
        }

        if (count($args) === 4) {
            [$nama, $nim, $umur, $negaraAsal] = $args;
            parent::__construct($nama, $nim, $umur);
            $this->negaraAsal = $negaraAsal;
            return;
        }

        throw new InvalidArgumentException("Format constructor tidak valid.");
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo(?string $nama = null, ?string $nim = null, ?int $umur = null): void
    {
        parent::tampilkanInfo();
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}
