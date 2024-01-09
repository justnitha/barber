@extends('masteradminlte.layout')

@section('judul','Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/booking">Booking</a></li>
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
                <a href="/admin/booking">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body " style="overflow-y: scroll;margin-bottom: 12px;">
        <table class="table table-striped">
                <tr>
                    <td width="20%">Transaksi Id</td>
                    <td>: {{ $trxx->transaksi_id }}</td>
                </tr>
                <tr>
                    <td>Tanggal Trx</td>
                    <td>: {{ $trxx->created_at}}</td>
                </tr>
                <tr>
                    <td>Nama Layanan </td>
                    <td>: {{ $trxx->n_depan }} {{ $trxx->n_belakang }}</td>
                </tr>
                <tr>
                    <td>No telepon</td>
                    <td>: {{ $trxx->no_telp}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $trxx->email}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $trxx->alamat}} {{ $trxx->kode_pos}}</td>
                </tr>
                <tr>
                    <td>Bank</td>
                    <td>: {{ $trxx->bank}}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>: {{ $trxx->total}} K</td>
                </tr>
                
            </table>
    </div>
    </div>
</div>
@endsection
