<?php

namespace App\Models;

use CodeIgniter\Model;

class Nilai_Model extends Model
{
    protected $table      = 'nilai';

    protected $allowedFields = [
        'username', 'Baris_dan_Deret_Aritmatika', 'Baris_dan_Deret_Geometri', 'Baris_dan_Deret_Tak_Hingga', 'Sifat-sifat_Ekponensial',
        'Pembagian_Suku_Banyak', 'Teorema_Sisa', 'Persamaan_Kuadrat', 'Akar-akar_Persamaan', 'Grafik_Fungsi_Kuadrat', 'Grafik_Fungsi_Kuadrat_2',
        'Menentukan_Fungsi', 'Konsep_Fungsi_Komposisi', 'Macam-macam_Fungsi', 'Komposisi_Fungsi', 'Invers_Fungsi', 'Persamaan_Garis_Lurus',
        'Mencari_Persamaan_Garis_Lurus', 'Mencari_Persamaan_Garis_Lurus_2', 'Konsep_Logaritma', 'Sifat-sifat_Logaritma', 'Persamaan_Logaritma',
        'Pertidaksamaan_dan_Fungsi_Logaritma', 'Konsep_Matriks', 'Operasi_Matriks', 'Determinan_Matriks', 'Invers_Matriks', 'Konsep_Trigonometri',
        'Rumus-rumus_Dalam_Segitiga', 'Jumlah_dan_Selisih_2_Sudut', 'Menggambar_Fungsi_1', 'Menggambar_Fungsi_2', 'Konsep_Limit_Aljabar',
        'Metode_Penyelesaian_Limit_Aljabar_1', 'Metode_Penyelesaian_Limit_Aljabar_2', 'Metode_Penyelesaian_Limit_Aljabar_3', 'Metode_Penyelesaian_Limit_Aljabar_4',
        'Konsep_Limit_Fungsi_Trigonometri', 'Rumus_Limit_Fungsi_Trigonometri_1', 'Rumus_Limit_Fungsi_Trigonometri_2', 'Konsep_Turunan',
        'Aturan_Rantai', 'Garis_Singgung_Pada_Kurva', 'Nilai_Stasioner', 'Konsep_Turunan_Fungsi_Trigonometri', 'Aturan_Rantai_Fungsi_Trigonometri',
        'Aplikasi_Turunan_Fungsi_Trigonometri', 'Konsep_Integral', 'Integral_Tak_Tentu', 'Aplikasi_Integral_Tak_Tentu', 'Aplikasi_Integral_Tentu',
        'Integral_Subtitusi', 'Integral_Parsial', 'Konsep_Lingkaran', 'Mencari_Persamaan_Lingkaran', 'Kedudukan_Titik_Terhadap_Lingkaran',
        'Kedudukan_Garis_Terhadap_Lingkaran', 'Persamaan_Garis_Singgung_Lingkaran', 'Konsep_Transformasi_Geometri',
        'Bayangan_Kurva,_Titik,_Dan_Bangung_Datar', 'Komposisi_Transformasi_Geometri', 'Konsep_Kaidah_Pencacahan', 'Permutasi', 'Kombinasi',
        'Peluang', 'Konsep_Geometri_Bidang_Datar', 'Sudut_Geometri_Bidang_Datar', 'Segitiga_Pada_Geometri_Bidang_Datar', 'Teorema_Pada_Segitiga',
        'Konsep_Geometri_Bidang_Ruang', 'Jarak_Pada_Geometri_bidang_Ruang', 'Sudut_Pada_Geometri_Bidang_Ruang', 'Konsep_Statistika_1',
        'Konsep_Statistika_2', 'Konsep_Statistika_3', 'Data_Berkelompok', 'bulan',
    ];

    protected $returnType     = 'array';
}