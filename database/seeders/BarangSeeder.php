<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'id_barang' => 1,
            'name' => 'Laptop ASUS',
            'category' => 'Elektronik',
            'supplier' => 'PT ASUS Indonesia',
            'stock' => '10',
            'price' => '15000000',
            'note' => 'Laptop gaming dengan spesifikasi tinggi',
        ]);

        Barang::create([
            'id_barang' => 2,
            'name' => 'Printer Canon',
            'category' => 'Periferal',
            'supplier' => 'PT Canon Indonesia',
            'stock' => '5',
            'price' => '2000000',
            'note' => 'Printer multifungsi untuk kantor dan rumah',
        ]);

        Barang::create([
            'id_barang' => 3,
            'name' => 'Smartphone Samsung',
            'category' => 'Elektronik',
            'supplier' => 'Samsung Electronics',
            'stock' => '8',
            'price' => '12000000',
            'note' => 'Smartphone dengan kamera berkualitas tinggi',
        ]);

        Barang::create([
            'id_barang' => 4,
            'name' => 'Headset Logitech',
            'category' => 'Aksesoris',
            'supplier' => 'Logitech Indonesia',
            'stock' => '15',
            'price' => '500000',
            'note' => 'Headset nyaman dengan kualitas suara jernih',
        ]);

        Barang::create([
            'id_barang' => 5,
            'name' => 'Monitor LG',
            'category' => 'Elektronik',
            'supplier' => 'LG Electronics',
            'stock' => '7',
            'price' => '3000000',
            'note' => 'Monitor full HD dengan bezel tipis',
        ]);
    }
}
