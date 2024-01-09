@extends('masteradminlte.layout')

@section('judul', 'Karir')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/karir">Karir</a></li>
    <li class="breadcrumb-item active">Edit Karir</li>
@endsection

@section('content')
    <div class="card card-info w-75 mx-auto ">
        <div class="card-header">
            <h3 class="card-title">Karir</h3>
        </div>
        <form action="{{ route('karir.update', $karir->id) }}" method="POST" enctype="multipart/form-data" class="pb-5 px-5">
            @csrf
            @method('PUT')
                <!-- Tambahkan input untuk field lainnya -->
            <div class="card-body card-info">
            <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{$karir->name}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{$karir->email}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone_number" placeholder="phone_number" name="phone_number" value="{{$karir->phone_number}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Tentang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="about" placeholder="about" name="about" value="{{$karir->about}}">
        </div>
      </div>
      
        <!-- Field lainnya -->
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <a href="/admin/karir">
                            <button type="button" class="btn btn-primary">Kembali</button>
                        </a>
                    </div>
                </div>
        </form>
    </div>
@endsection
