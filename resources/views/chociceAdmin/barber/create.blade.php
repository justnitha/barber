
@extends('masteradminlte.layout')

@section('judul','Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/barber">Barber</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="card card-info w-75 mx-auto mt-5">
  <div class="card-header">
    <h3 class="card-title">Menu Kategori</h3>
  </div>
  <form class="form-horizontal" action="{{ route('barber.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body p-5">
      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barber" name="nama" >
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Nomor Telepon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="No Telepon" name="nomor_telepon" >
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
          <input type="email" class="form-control" id="inputEmail3" placeholder="email barber" name="email" >
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="alamat barber" name="alamat" >
        </div>
      </div>
      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">job Desk</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Job Desk" name="job_desk" >
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="inputEmail3" placeholder="foto barberman"  name="filename">
        </div>
      </div>

      <hr>
      <div class=" d-flex" style="gap:5px">
        <button type="submit" class="btn btn-danger">Tambah Data</button>
        <a href="/admin/barber">
          <button type="button" class="btn btn-info">Kembali</button>
        </a>
      </div>
    </div>
  </form>
</div>
@endsection