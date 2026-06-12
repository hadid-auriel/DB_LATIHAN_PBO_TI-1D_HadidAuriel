<?php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan spesifik (di-set nullable atau ?string karena di DB bisa bernilai NULL)
    private ?string $tipeAudio;
    private ?string $lokasiBaris;

    // Konstruktor kelas anak
    public function __construct(
        int $idTiket, string $namaFilm, DateTime $jadwalTayang, int $jumlahKursi, float $hargaDasarTiket,
        ?string $tipeAudio, ?string $lokasiBaris
    ) {
        // Memanggil konstruktor dari abstract class Tiket
        parent::__construct($idTiket, $namaFilm, $jadwalTayang, $jumlahKursi, $hargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Wajib mengimplementasikan metode abstrak hitungTotalHarga
    public function hitungTotalHarga(): float {
        // Contoh logika: Harga dasar dikali jumlah kursi (Bisa kamu kembangkan di Tahap 5)
        return $this->hargaDasarTiket * $this->jumlahKursi;
    }

    // Wajib mengimplementasikan metode abstrak tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas(): void {
        echo "Fasilitas Studio Regular:\n";
        echo "- Tipe Audio: " . ($this->tipeAudio ?? "Standard Audio") . "\n";
        echo "- Lokasi Baris: " . ($this->lokasiBaris ?? "Standard Seat") . "\n";
    }

    // Getter dan Setter untuk properti spesifik
    public function getTipeAudio(): ?string { return $this->tipeAudio; }
    public function setTipeAudio(?string $tipeAudio): void { $this->tipeAudio = $tipeAudio; }

    public function getLokasiBaris(): ?string { return $this->lokasiBaris; }
    public function setLokasiBaris(?string $lokasiBaris): void { $this->lokasiBaris = $lokasiBaris; }
}