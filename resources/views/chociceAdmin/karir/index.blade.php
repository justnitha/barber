@extends('masteradminlte.layout')

@section('judul','Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Karir</a></li>
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
                <a href="/admin/karir">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
                <form 
                    action="{{ route('karir.search') }}" 
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
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Job Desk</th>
                <th style="width:30%">Edit</th>
            </tr>
            @forelse($karirs as $karir)
            <tr>
                <td>{{ $karir->name }}</td>
                <td>{{ $karir->email }}</td>
                <td>{{ $karir->phone_number }}</td>
                <td>{{ $karir->app_for }}</td>
                <td>
                    <form method="POST" action="{{ route('karir.destroy', $karir->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('karir.edit', $karir->id) }}">
                                <button type="button" class="btn btn-warning">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                            </a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus?'); ">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                            <a href="{{ route('karir.show',['karir'=>$karir->id]); }}">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-info"></i> Detail
                                </button>
                            </a>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan='3'>Data Karir kosong</td>
                </tr>
            @endforelse
        </table>
    </div>
    
    </div>
</div>
@endsection