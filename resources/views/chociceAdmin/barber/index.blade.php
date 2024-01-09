@extends('masteradminlte.layout')

@section('judul','Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Barber</a></li>
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
                <a href="/admin/barber">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
                <form 
                    action="{{ route('barber.search') }}" 
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
                <!-- <th>ID</th> -->
                <!-- <th>image</th> -->
                <th>nama</th>
                <th>alamat</th>
                <th>email</th>
                <th>no Telpon</th>
                <th style="width:30%">Edit</th>
            </tr>
            @forelse($barbers as $barber)
            <tr>
                    <!-- <td>{{ $barber->barber_id }}</td> -->
                    <!-- <td>
                        <img src="{{ asset('imageB/' . $barber->img_file) }}" alt="Image" style="width:80px;">
                    </td> -->
                <td>{{ $barber->nama }}</td>
                <td>{{ $barber->alamat }}</td>
                <td>{{ $barber->email }}</td>
                <td>{{ $barber->nomor_telepon }}</td>
                <td>
                    
                    <form action="{{ route('barber.destroy', $barber->barber_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('barber.edit', $barber->barber_id) }}" class="">
                        <button type="submit" class="btn btn-warning">
                                <i class="fa fa-edit"></i> Edit
                        </button>
                        </a>
                        <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                        </button>
                        <a href="{{ route('barber.show',['barber'=>$barber->barber_id]); }}">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-info"></i> Detail
                                </button>
                            </a>
                    </form>
                </td>

                </tr>
            @empty
                <tr>
                    <td colspan='3'>Data Barber kosong</td>
                </tr>
            @endforelse
        </table>
    </div>
    <div class="card-footer card-secondary">
        <a href="{{ route('barber.create') }}">
            <button type="button" class="btn btn-success">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </a>
    </div>
    </div>
</div>
@endsection