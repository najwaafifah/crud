@extends('template.main')
@section('title', 'Barang')
@section('content')

<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1 class="m-0 text-gradient">Manajemen Barang</h1>
                    <p class="text-muted">Kelola data barang dengan mudah</p>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="h-100 d-flex align-items-center justify-content-end">
                        <ol class="breadcrumb bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a href="/" class="text-primary">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Barang</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3>{{ $barang->count() }}</h3>
                            <p>Total Barang</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{ $barang->sum('stock') }}</h3>
                            <p>Total Stok</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-info">
                        <div class="inner">
                            <h3>{{ $barang->groupBy('category')->count() }}</h3>
                            <p>Kategori</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tags"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{ $barang->groupBy('supplier')->count() }}</h3>
                            <p>Supplier</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-truck"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Barang</h5>
                        <a href="/barang/create" class="btn btn-primary">
                            <i class="fas fa-plus-circle mr-2"></i>Tambah Barang
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Supplier</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-light rounded p-2 mr-3">
                                                <i class="fas fa-box text-primary"></i>
                                            </div>
                                            <span>{{ $data->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">{{ $data->category }}</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-secondary">{{ $data->supplier }}</span>
                                    </td>
                                    <td>
                                        @if($data->stock > 10)
                                            <span class="badge badge-success">{{ $data->stock }}</span>
                                        @elseif($data->stock > 0)
                                            <span class="badge badge-warning">{{ $data->stock }}</span>
                                        @else
                                            <span class="badge badge-danger">Habis</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="text-primary font-weight-bold">
                                            Rp {{ number_format($data->price, 0, ',', '.') }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{ $data->note ?: '-' }}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/barang/{{ $data->id_barang }}/edit" 
                                               class="btn btn-sm btn-outline-primary mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form class="d-inline" action="/barang/{{ $data->id_barang }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" id="btn-delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
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
</div>

@endsection
