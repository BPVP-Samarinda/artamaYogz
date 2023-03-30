<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'nama' => 'Bolu Peca',
                'deskripsi' => 'Kue bolu disiram gula merah',
                'harga' => 10_000,
                'stok' => 20,
            ],
            [
                'nama' => 'Takoyaki',
                'deskripsi' => 'Adonan bulat berisi gurita',
                'harga' => 15_000,
                'stok' => 50,
            ],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}
