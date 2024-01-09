
@extends('masteradminlte.layout')

@section('judul','Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/booking">Edit</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="card card-info w-75 mx-auto mt-5">
  
  <form class="form-horizontal" action="{{ route('booking.update', $trxx->transaksi_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body p-5">

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">Layanan</label>
        <div class="col-sm-10">
        <select name="layanan_id" id="layanan_id" onchange="updateTotal()" class="form-control">
            @foreach($layananList as $tr)
                <option value="{{ $tr->layanan_id }}" data-harga="{{ $tr->harga }}">{{ $tr->nama_layanan }}</option>
            @endforeach  
        </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="aktif" class="col-sm-2 col-form-label">harga</label>
        <div class="col-sm-10">
        <input type="text" name="total" id="harga" class="form-control" value="{{ $trxx->total }}" readonly>
        </div>
      </div>

      <hr>
      <div class=" d-flex" style="gap:5px">
        <button type="submit" class="btn btn-danger">Tambah Data</button>
        <a href="/admin/booking">
          <button type="button" class="btn btn-info">Kembali</button>
        </a>
      </div>
    </div>
  </form>
</div>


<script>
    function updateTotal() {
        // Get the selected option
        var selectedOption = document.getElementById("layanan_id");
        var selectedPrice = selectedOption.options[selectedOption.selectedIndex].getAttribute("data-harga");

        // Set the value of the price input
        document.getElementById("harga").value = selectedPrice;
    }
</script>
@endsection