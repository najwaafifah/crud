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
            'nim' => '235150601111002',
            'nama' => 'Najwa Afifah',
            'jurusan' => 'Pendidikan Teknologi Informasi',
            'semester' => 3,
            'email' => 'najwaaafifah@student.ub.ac.id',
            'no_hp' => '08971685300',
        ]);

        Mahasiswa::create([
            'nim' => '235150601111023',
            'nama' => 'Aisyah Nur Zahra',
            'jurusan' => 'Pendidikan Teknologi Informasi',
            'semester' => 3,
            'email' => 'aisyahnur@student.ub.ac.id',
            'no_hp' => '08565423418',
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
