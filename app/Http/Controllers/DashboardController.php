<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard');
    }
}
