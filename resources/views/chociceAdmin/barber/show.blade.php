@extends('masteradminlte.layout')

@section('judul','Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/barber">Barber</a></li>
    <li class="breadcrumb-item active">Show Barber</li>
@endsection

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan data kategori -->

<div class="card card-info position-relative" style="height: 70vh;">
        <div class="card-header fixed-top">
            <div class="d-flex justify-content-between">
                <a href="/admin/barber">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body " style="overflow-y: scroll;margin-bottom: 12px;">
        <table class="table table-striped">
                <tr>
                    <td width="20%">Barber Id</td>
                    <td>: {{ $barbers->barber_id }}</td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>: {{ $barbers->nama }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $barbers->email}}</td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>: {{ $barbers->nomor_telepon}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $barbers->alamat}}</td>
                </tr>
                <tr>
                    <td>Berkas</td>
                    <td>:  
                    @if($barbers->img_file)
                        <a href="{{ asset('imageB/' . $barbers->img_file) }}" target="_blank">
                            <img src="{{ asset('imageB/' . $barbers->img_file) }}" alt="File Image" width="100">
                        </a>
                    @else
                        Tidak ada file
                    @endif
                    </td>
                </tr>
            </table>
    </div>
    </div>
</div>
@endsection
