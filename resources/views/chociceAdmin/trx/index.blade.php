@extends('masteradminlte.layout')

@section('judul','TRansaksi')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">TRansaksi</a></li>
    <!--li class="breadcrumb-item active"></li -->
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
                <form 
                    action="{{ route('booking.search') }}" 
                    method="GET" 
                    class="d-flex justify-content-end" 
                    role="search"
                >
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="card-body " style="overflow-y: scroll;margin-bottom: 12px;">
        <table border='1' class="table table-bordered" >
            <tr class="text-capitalize">
                <th>tanggal trx</th>
                <th>pelanggan</th>
                <th>nama layanan</th>
                <th>bank</th>
                <th>total harga</th>
                <th style="width:30%">Edit</th>
            </tr>
            @forelse($trxx as $trx)
            <tr>
                <td>{{ $formattedTime }}</td>
                <td>{{ $trx->n_depan }} {{ $trx->n_belakang }}</td>
                <td>{{ $trx->services->nama_layanan }}</td>
                <td>{{ $trx->bank }}</td>
                <td>{{ $trx->total }} K</td>
                <td class="text-center align-items-center d-flex justify-content-center" style="gap:20px; border-bottom:none; border-left:none; border-right:none;">
                    <form method="POST" action="{{ route('booking.destroy', $trx->transaksi_id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('booking.edit', $trx->transaksi_id) }}" class="">
                        <button type="button" class="btn btn btn-warning">
                                <i class="fa fa-minus"></i> Edit
                        </button>
                        </a>
                        <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                        </button>
                        <a href="{{ route('booking.show',$trx->transaksi_id)}}">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-info"></i> Detail
                                </button>
                        </a>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan='3'>Data admin kosong</td>
                </tr>
            @endforelse
        </table>
    </div>
    <div class="card-footer card-secondary">
        <a href="{{ route('booking.create') }}">
            <button type="button" class="btn btn-success">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </a>
    </div>
    </div>
</div>
@endsection