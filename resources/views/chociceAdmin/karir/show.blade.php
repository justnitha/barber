@extends('masteradminlte.layout')

@section('judul','Barber')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Karir/Show</a></li>
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
                    <td width="20%">Karir Id</td>
                    <td>: {{ $karirs->id }}</td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>: {{ $karirs->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $karirs->email}}</td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>: {{ $karirs->phone_number}}</td>
                </tr>
                <tr>
                    <td>Job Desk</td>
                    <td>: {{ $karirs->app_for}}</td>
                </tr>
                <tr>
                    <td>Tentang</td>
                    <td>: {{ $karirs->about}}</td>
                </tr>
                <tr>
                    <td>Berkas</td>
                    <td>:  
                    @if($karirs->file)
                        @if (pathinfo($karirs->file, PATHINFO_EXTENSION) == 'pdf')
                            <a href="{{ asset('imageKarir/' . $karirs->file) }}" target="_blank">Lihat PDF</a>
                        @elseif (in_array(pathinfo($karirs->file, PATHINFO_EXTENSION), ['doc', 'docx']))
                            <a href="{{ asset('imageKarir/' . $karirs->file) }}" target="_blank">Lihat Dokumen</a>
                        @elseif (in_array(pathinfo($karirs->file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                        <a href="{{ asset('imageKarir/' . $karirs->file) }}" target="_blank">
                            <img src="{{ asset('imageKarir/' . $karirs->file) }}" alt="File Image" width="100">
                        </a>                        @else
                            <a href="{{ asset('imageKarir/' . $karirs->file) }}" target="_blank">Lihat File</a>
                        @endif
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
