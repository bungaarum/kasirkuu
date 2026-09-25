<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;


class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $daftarProduk = [
            ['nama_produk' => 'Bunga Mawar Merah',   'harga' => 15000,  'stok' => 120],
            ['nama_produk' => 'Bunga Tulip',          'harga' =>25000, 'stok' => 60],
            ['nama_produk' => 'Bunga Lily',           'harga' => 30000,  'stok' => 25],
            ['nama_produk' => 'Bunga Matahari',       'harga' =>  20000,'stok' => 40],
            ['nama_produk' => 'Bunga Lavender',       'harga' =>  18000,'stok' => 35],
            ['nama_produk' => 'Buket Tulip',          'harga' => 95000, 'stok' => 50],
            ['nama_produk' =>  'Buket Mix Flower',    'harga' => 85000,   'stok' => 65],
            ['nama_produk' =>  'Buket Wisuda',        'harga' =>  100000,   'stok' => 70],
            ['nama_produk' =>  'Buket Ulang Tahun',   'harga' =>  90000,  'stok' => 30],
            ['nama_produk' =>  'Buket Valentine',     'harga' => 120000,  'stok' => 0],
        ];

        foreach ($daftarProduk as $produk) {

            Produk::firstOrCreate(['nama_produk' => $produk['nama_produk']], $produk);
        }
    }
}