<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan spesifik
    private ?string $kacamata3dId;
    private ?string $efekGerakFitur;

    public function __construct(
        int $idTiket, string $namaFilm, DateTime $jadwalTayang, int $jumlahKursi, float $hargaDasarTiket,
        ?string $kacamata3dId, ?string $efekGerakFitur
    ) {
        parent::__construct($idTiket, $namaFilm, $jadwalTayang, $jumlahKursi, $hargaDasarTiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function hitungTotalHarga(): float {
        // Contoh logika untuk IMAX (Misal ada biaya tambahan layar lebar)
        return ($this->hargaDasarTiket * $this->jumlahKursi);
    }

    public function tampilkanInfoFasilitas(): void {
        echo "Fasilitas Studio IMAX:\n";
        echo "- Kacamata 3D ID: " . ($this->kacamata3dId ?? "Tidak Menggunakan Kacamata") . "\n";
        echo "- Efek Gerak Fitur: " . ($this->efekGerakFitur ?? "Standard IMAX") . "\n";
    }

    // Getter dan Setter untuk properti spesifik
    public function getKacamata3dId(): ?string { return $this->kacamata3dId; }
    public function setKacamata3dId(?string $kacamata3dId): void { $this->kacamata3dId = $kacamata3dId; }

    public function getEfekGerakFitur(): ?string { return $this->efekGerakFitur; }
    public function setEfekGerakFitur(?string $efekGerakFitur): void { $this->efekGerakFitur = $efekGerakFitur; }
}