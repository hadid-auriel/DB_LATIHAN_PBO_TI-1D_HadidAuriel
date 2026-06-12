<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan spesifik
    private ?string $bantalSelimutPack;
    private ?string $layananButler;

    public function __construct(
        int $idTiket, string $namaFilm, DateTime $jadwalTayang, int $jumlahKursi, float $hargaDasarTiket,
        ?string $bantalSelimutPack, ?string $layananButler
    ) {
        parent::__construct($idTiket, $namaFilm, $jadwalTayang, $jumlahKursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga(): float {
        // Contoh logika untuk Velvet (Misal kelas premium)
        return ($this->hargaDasarTiket * $this->jumlahKursi);
    }

    public function tampilkanInfoFasilitas(): void {
        echo "Fasilitas Studio Velvet (Premium):\n";
        echo "- Paket Bantal & Selimut: " . ($this->bantalSelimutPack ?? "Standard Pack") . "\n";
        echo "- Layanan Butler: " . ($this->layananButler ?? "Tidak Tersedia") . "\n";
    }

    // Getter dan Setter untuk properti spesifik
    public function getBantalSelimutPack(): ?string { return $this->bantalSelimutPack; }
    public function setBantalSelimutPack(?string $bantalSelimutPack): void { $this->bantalSelimutPack = $bantalSelimutPack; }

    public function getLayananButler(): ?string { return $this->layananButler; }
    public function setLayananButler(?string $layananButler): void { $this->layananButler = $layananButler; }
}