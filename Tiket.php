<?php

/**
 * Abstract Class Tiket
 * Menerapkan prinsip Abstraksi dan Enkapsulasi di PHP.
 * Properti dipetakan langsung dari kolom tabel `tb_tiket` di database.
 */
abstract class Tiket {
    // Atribut Terenkapsulasi (protected agar bisa diwariskan ke subclass)
    protected int $idTiket;
    protected string $namaFilm;
    protected DateTime $jadwalTayang; // Menggunakan objek DateTime untuk kolom DATETIME
    protected int $jumlahKursi;
    protected float $hargaDasarTiket; // Di PHP, nilai DECIMAL/Floating-point menggunakan float

    // Constructor untuk inisialisasi data (Fitur PHP 8+ Constructor Property Promotion bisa digunakan, 
    // namun ini format standar agar mudah dipahami)
    public function __construct(int $idTiket, string $namaFilm, DateTime $jadwalTayang, int $jumlahKursi, float $hargaDasarTiket) {
        $this->idTiket = $idTiket;
        $this->namaFilm = $namaFilm;
        $this->jadwalTayang = $jadwalTayang;
        $this->jumlahKursi = $jumlahKursi;
        $this->hargaDasarTiket = $hargaDasarTiket;
    }

    // =========================================================================
    // METODE ABSTRAK (Wajib di-override dan diimplementasikan oleh subclass)
    // =========================================================================
    
    /**
     * Menghitung total harga tiket berdasarkan rumus spesifik masing-masing jenis studio.
     */
    abstract public function hitungTotalHarga(): float;

    /**
     * Menampilkan informasi fasilitas eksklusif yang didapatkan dari jenis studio terkait.
     */
    abstract public function tampilkanInfoFasilitas(): void;

    // =========================================================================
    // GETTER AND SETTER (Akses enkapsulasi standar untuk properti protected)
    // =========================================================================
    
    public function getIdTiket(): int {
        return $this->idTiket;
    }

    public function setIdTiket(int $idTiket): void {
        $this->idTiket = $idTiket;
    }

    public function getNamaFilm(): string {
        return $this->namaFilm;
    }

    public function setNamaFilm(string $namaFilm): void {
        $this->namaFilm = $namaFilm;
    }

    public function getJadwalTayang(): DateTime {
        return $this->jadwalTayang;
    }

    public function setJadwalTayang(DateTime $jadwalTayang): void {
        $this->jadwalTayang = $jadwalTayang;
    }

    public function getJumlahKursi(): int {
        return $this->jumlahKursi;
    }

    public function setJumlahKursi(int $jumlahKursi): void {
        $this->jumlahKursi = $jumlahKursi;
    }

    public function getHargaDasarTiket(): float {
        return $this->hargaDasarTiket;
    }

    public function setHargaDasarTiket(float $hargaDasarTiket): void {
        $this->hargaDasarTiket = $hargaDasarTiket;
    }
}