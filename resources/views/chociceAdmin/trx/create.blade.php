
@extends('masteradminlte.layout')

@section('judul','Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/booking">Booking</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="card card-info w-75 mx-auto mt-5">
  
  <form class="form-horizontal" action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body p-5">
      <div class="form-group row">
        <div class="col">
          <label for="aktif" class="col col-form-label">Nama Depan</label>
          <div class="col">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Depan" name="n_depan" >
          </div>
        </div>
        <div class="col">
          <label for="aktif" class="col col-form-label">Nama belakang</label>
          <div class="">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Belakang" name="n_belakang" >
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col">
          <label for="aktif" class="col col-form-label">No Telepon</label>
          <div class="col">
            <input type="text" class="form-control" id="inputEmail3" placeholder="No Telepon" name="no_telp" >
          </div>
        </div>
        <div class="col">
          <label for="aktif" class="col col-form-label">Email</label>
          <div class="col">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" >
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col">
          <label for="aktif" class="col col-form-label">Alamat</label>
          <div class="col">
            <input type="text" class="form-control" id="inputEmail3" placeholder="alamat" name="alamat" >
          </div>
        </div>
        <div class="col">
          <label for="aktif" class="col col-form-label">Kode Pos</label>
          <div class="">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Kode Pos" name="kode_pos" >
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-12">
        <label for="aktif" class="col-sm-2 col-form-label">Layanan</label>
        <select name="layanan_id" id="layanan_id" onchange="updateTotal()" class="form-control">
            <option value="">Pilih Layanan</option>  
            @foreach($trxx as $tr)
                <option value="{{ $tr->layanan_id }}" data-harga="{{ $tr->harga }}">{{ $tr->nama_layanan }}</option>
            @endforeach  
        </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-12">
        <label for="aktif" class="col-sm-2 col-form-label">Layanan</label>
        <div>
        <select name="bank" id="bank" class="form-control">
          <option value="bca">BCA</option>  
          <option value="qris">Qris</option>  
          <option value="gopay">Gopay</option>  
        </select>
        </div>
        </div>
      </div>

     

      <div class="form-group row">
        <div class="col-sm-12">
        <label for="aktif" class="col-sm-2 col-form-label">Total</label>
        <input name="total" id="harga" value="" readonly class="form-control">
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