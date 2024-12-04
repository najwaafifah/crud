<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '215150700111001',
            'nama' => 'Ahmad Rifai',
            'jurusan' => 'Teknologi Informasi',
            'semester' => 5,
            'email' => 'ahmad.rifai@student.ub.ac.id',
            'no_hp' => '081234567890',
        ]);

        Mahasiswa::create([
            'nim' => '215150700111002',
            'nama' => 'Siti Rahmah',
            'jurusan' => 'Teknik Komputer',
            'semester' => 3,
            'email' => 'siti.rahmah@student.ub.ac.id',
            'no_hp' => '082345678901',
        ]);

        Mahasiswa::create([
            'nim' => '215150700111003',
            'nama' => 'Budi Santoso',
            'jurusan' => 'Sistem Informasi',
            'semester' => 7,
            'email' => 'budi.santoso@student.ub.ac.id',
            'no_hp' => '083456789012',
        ]);

        Mahasiswa::create([
            'nim' => '215150700111004',
            'nama' => 'Dewi Lestari',
            'jurusan' => 'Teknik Informatika',
            'semester' => 1,
            'email' => 'dewi.lestari@student.ub.ac.id',
            'no_hp' => '084567890123',
        ]);

        Mahasiswa::create([
            'nim' => '215150700111005',
            'nama' => 'Andi Wijaya',
            'jurusan' => 'Pendidikan Teknologi Informasi',
            'semester' => 5,
            'email' => 'andi.wijaya@student.ub.ac.id',
            'no_hp' => '085678901234',
        ]);
    }
}
