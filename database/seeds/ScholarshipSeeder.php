<?php

use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->insert([
            'name'          => 'PEMBUKAAN BEASISWA PPA PERIODE JANUARI - JUNI 2018',
            'firm'          => 'Dikti',
            'description'   => 'Dibuka kembali Beasiswa PPA untuk periode Januari - Juni 2018 dengan persyaratan sebagai berikut :
                                PERPANJANGAN (bagi penerima periode Juli – September 2017) :
                                1.       Mahasiswa Aktif D3 minimal semester 4 - 6
                                2.       Mahasiswa Aktif S1 regular minimal semester 4 – 8
                                3.       Nilai IPK Terakhir lebih besar dari semester sebelumnya
                                4.       Perpanjangan hanya daftar online di alamat http://bit.ly/prpjanjun18
                                
                                PENDAFTAR BARU :
                                1.       Mahasiswa Aktif D3 minimal semester 4 - 6
                                2.       Mahasiswa Aktif S1 regular minimal semester 4 - 8
                                3.       Nilai IPK terakhir minimal 3.00
                                4.       Download formulir pendaftaran dan berkas yang harus dikumpulkan disini
                                5.       Besar dana beasiswa Rp 400.000/bulan dibayarkan setiap 6 bulan sekali
                                
                                Tempat Pengumpulan Berkas :
                                1.       Mahasiswa D3 di Loket Pelayanan Beasiswa Kampus Diploma IPB (kolektif tidak langsung ke IPB Dramaga, jika langsung akan ditolak)
                                2.       Mahasiswa S1 di Loket Pelayanan Beasiswa Gedung Andi Hakim Nasoetion Lantai 1
                                
                                Batas Waktu Pengumpulan Berkas :
                                Hari / Tanggal : Senin, 23 April 2017
                                Pukul : 14.00 WIB',
            'applyOnline'   => '1',
            'image'         => 'beasiswa/78d607068cd064420401737e12f83bae_XL.jpg'
        ]);
    }
}
