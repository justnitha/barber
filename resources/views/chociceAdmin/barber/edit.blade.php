@extends('masteradminlte.layout')

@section('judul', 'Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/barber">Barber</a></li>
    <li class="breadcrumb-item active">Edit Barber</li>
@endsection

@section('content')
    <div class="card card-info w-75 mx-auto ">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <form action="{{ route('barber.update', $barber->barber_id) }}" method="POST" enctype="multipart/form-data" class="pb-5 px-5">
            @csrf
            @method('PUT')
                <!-- Tambahkan input untuk field lainnya -->
            <div class="card-body card-info">
                <div class="form-group row">
                    <label for="aktif" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barber" name="nama" value="{{ $barber->nama }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="aktif" class="col-sm-2 col-form-label">Nomor_telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="No Telepon" name="nomor_telepon" value="{{ $barber->nomor_telepon }}">
                    </div>
                </div>
                @if ($errors->has('nomor_telepon'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('nomor_telepon') }}
                </div>
                @endif

                <div class="form-group row">
                    <label for="aktif" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="email barber" name="email" value="{{ $barber->email }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="aktif" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="alamat barber" name="alamat" value="{{ $barber->alamat }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputEmail3" placeholder="foto barberman" name="filename">
                        <small id="fileChosenText" class="form-text text-muted">File Chosen: {{ $barber->img_file }}</small>
                    </div>
                </div>
            </div>
        <!-- Field lainnya -->
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <a href="/admin/barber">
                            <button type="button" class="btn btn-primary">Kembali</button>
                        </a>
                    </div>
                </div>
        </form>
    </div>
@endsection
