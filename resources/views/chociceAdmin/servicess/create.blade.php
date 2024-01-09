
@extends('masteradminlte.layout')

@section('judul','Services')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/barber">Services</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="card card-info w-75 mx-auto mt-5">
  <div class="card-header">
    <h3 class="card-title">Menu Kategori</h3>
  </div>
  <form class="form-horizontal" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body p-5">
      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Nama Layanan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Layanan" name="nama_layanan" >
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
          <select class="form-control" name="type">
            <option value="Reguler">Reguler</option>
            <option value="Premium">Premium</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
        <textarea class="form-control" rows="3" placeholder="Enter ..." name="deskripsi"></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">harga</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="masukan harga " name="harga" >
          <small>contoh: 60.000  -> 60</small>
        </div>
      </div>

      <hr>
      <div class=" d-flex" style="gap:5px">
        <button type="submit" class="btn btn-danger">Tambah Data</button>
        <a href="/admin/services">
          <button type="button" class="btn btn-info">Kembali</button>
        </a>
      </div>
    </div>
  </form>
</div>
@endsection