@extends('template.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fas fa-user-plus text-primary"></i> 
                        Tambah Mahasiswa
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Mahasiswa</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('mahasiswa.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nim">
                                                <i class="fas fa-id-card text-primary"></i> 
                                                NIM
                                            </label>
                                            <input type="text" 
                                                   class="form-control @error('nim') is-invalid @enderror" 
                                                   id="nim" 
                                                   name="nim" 
                                                   value="{{ old('nim') }}" 
                                                   placeholder="Masukkan NIM"
                                                   required>
                                            @error('nim')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nama">
                                                <i class="fas fa-user text-primary"></i> 
                                                Nama Lengkap
                                            </label>
                                            <input type="text" 
                                                   class="form-control @error('nama') is-invalid @enderror" 
                                                   id="nama" 
                                                   name="nama" 
                                                   value="{{ old('nama') }}" 
                                                   placeholder="Masukkan Nama Lengkap"
                                                   required>
                                            @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="jurusan">
                                                <i class="fas fa-graduation-cap text-primary"></i> 
                                                Jurusan
                                            </label>
                                            <input type="text" 
                                                   class="form-control @error('jurusan') is-invalid @enderror" 
                                                   id="jurusan" 
                                                   name="jurusan" 
                                                   value="{{ old('jurusan') }}" 
                                                   placeholder="Masukkan Jurusan"
                                                   required>
                                            @error('jurusan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="semester">
                                                <i class="fas fa-clock text-primary"></i> 
                                                Semester
                                            </label>
                                            <input type="number" 
                                                   class="form-control @error('semester') is-invalid @enderror" 
                                                   id="semester" 
                                                   name="semester" 
                                                   value="{{ old('semester') }}" 
                                                   placeholder="Masukkan Semester"
                                                   min="1" 
                                                   max="14"
                                                   required>
                                            @error('semester')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email">
                                                <i class="fas fa-envelope text-primary"></i> 
                                                Email
                                            </label>
                                            <input type="email" 
                                                   class="form-control @error('email') is-invalid @enderror" 
                                                   id="email" 
                                                   name="email" 
                                                   value="{{ old('email') }}" 
                                                   placeholder="Masukkan Email"
                                                   required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="no_hp">
                                                <i class="fas fa-phone text-primary"></i> 
                                                No. HP
                                            </label>
                                            <input type="text" 
                                                   class="form-control @error('no_hp') is-invalid @enderror" 
                                                   id="no_hp" 
                                                   name="no_hp" 
                                                   value="{{ old('no_hp') }}" 
                                                   placeholder="Masukkan No. HP"
                                                   required>
                                            @error('no_hp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-2">
                                            <i class="fas fa-save mr-1"></i> Simpan
                                        </button>
                                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                                            <i class="fas fa-arrow-left mr-1"></i> Kembali
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    /* Card Styles */
    .card {
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        border-radius: 0.5rem;
    }

    .card-outline {
        border-top: 3px solid;
    }

    /* Form Styles */
    .form-control {
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
    }

    .form-group label {
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #2d3748;
    }

    .form-group label i {
        margin-right: 0.5rem;
    }

    /* Button Styles */
    .btn {
        border-radius: 0.375rem;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        border: none;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        border: none;
    }

    /* Invalid Feedback */
    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .col-md-6 {
            margin-bottom: 1rem;
        }
    }
</style>

@push('scripts')
<script>
    $(document).ready(function() {
        // Add input masks
        $('#no_hp').inputmask('9999-9999-9999', { placeholder: '____-____-____' });
        
        // Form validation
        $('form').submit(function() {
            $(this).find('button[type=submit]').prop('disabled', true);
            return true;
        });
    });
</script>
@endpush
@endsection
