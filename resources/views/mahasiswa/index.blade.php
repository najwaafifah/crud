@extends('template.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Mahasiswa</h1>
                    <p class="text-muted">Disuru nambahin data mahasiswa disini hehe lesgo</p>
                </div>
                    <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="h-100 d-flex align-items-center justify-content-end">
                        <ol class="breadcrumb bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a href="/" class="text-primary">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                        </ol>
                    </nav>
                    </div>
            </div>
        </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah Mahasiswa
                            </a>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $mahasiswa->count() }}</h3>
                                            <p>Total Mahasiswa</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>{{ $mahasiswa->unique('jurusan')->count() }}</h3>
                                            <p>Jurusan</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>{{ $mahasiswa->max('semester') }}</h3>
                                            <p>Semester Tertinggi</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>{{ $mahasiswa->where('created_at', '>=', now()->subDays(7))->count() }}</h3>
                                            <p>Mahasiswa Baru (7 Hari)</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-user-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswa as $index => $mhs)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ $mhs->nama }}</td>
                                        <td>{{ $mhs->jurusan }}</td>
                                        <td>{{ $mhs->semester }}</td>
                                        <td>{{ $mhs->email }}</td>
                                        <td>{{ $mhs->no_hp }}</td>
                                        <td>
                                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
