<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Primary key
    protected $primaryKey = 'id_barang';

    // Nama tabel
    protected $table = 'barangs';

    // Kolom yang diizinkan untuk diisi (mass assignable)
    protected $fillable = [
        'name',
        'category',
        'supplier',
        'stock',
        'price',
        'note',
    ];

    // Nonaktifkan kolom increment jika primary key bukan auto-increment
    public $incrementing = true;

    // Jenis tipe data primary key
    protected $keyType = 'int';
}
