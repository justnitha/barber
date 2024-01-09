@extends('masteradminlte.layout')

@section('judul', 'Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/services">Servicees</a></li>
    <li class="breadcrumb-item active">Edit Services</li>
@endsection

@section('content')
    <div class="card card-info w-75 mx-auto ">
        <div class="card-header">
            <h3 class="card-title">Services</h3>
        </div>
        <form action="{{ route('services.update', $service->layanan_id) }}" method="POST" enctype="multipart/form-data" class="pb-5 px-5">
            @csrf
            @method('PUT')
                <!-- Tambahkan input untuk field lainnya -->
            <div class="card-body card-info">
            <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Nama Layanan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Layanan" name="nama_layanan" value="{{ $service->nama_layanan}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
          <select class="form-control" name="type" value="{{ $service->type}}">
            <option value="Reguler">Reguler</option>
            <option value="Premium">Premium</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
        <textarea class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" >{{ $service->deskripsi }}</textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">harga</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="masukan harga " name="harga" value="{{ $service->harga }}">
          <small>contoh: 60.000  -> 60</small>
        </div>
      </div>
        <!-- Field lainnya -->
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <a href="/admin/services">
                            <button type="button" class="btn btn-primary">Kembali</button>
                        </a>
                    </div>
                </div>
        </form>
    </div>
@endsection
