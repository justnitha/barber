@extends('masteradminlte.layout')

@section('judul','Services')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/services">Services</a></li>
    <li class="breadcrumb-item active">Show</li>
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
                <a href="/admin/karir">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body " style="overflow-y: scroll;margin-bottom: 12px;">
        <table class="table table-striped">
                <tr>
                    <td width="20%">Services Id</td>
                    <td>: {{ $services->layanan_id }}</td>
                </tr>
                <tr>
                    <td>Nama Layanan </td>
                    <td>: {{ $services->nama_layanan }}</td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>: {{ $services->type}}</td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>: {{ $services->deskripsi}}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: {{ $services->harga}} K</td>
                </tr>
                
            </table>
    </div>
    </div>
</div>
@endsection
