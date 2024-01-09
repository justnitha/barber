@extends('users.master')


@section('content')
<div>
    <div 
        style="background-image: url('{{ asset('assets/image/bg-book.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100vh;" 
        class="px-20 bg-no-repeat text-white relative"
    >
        <div class="flex items-center gap-52 absolute top-52 ">
            <div class="w-[35%]">
                <h1 class="text-8xl">Book Now at Etch Salon.</h1>
                <p class="text-2xl mt-10 leading-9">We look forward to meeting you and matching you with the best stylist for your hair needs. For all of our current clients, we will get you scheduled with your favorite stylist.</p>
                <a 
                    href="/cancellation-policy" 
                    class="py-4 px-2 mt-10 bg-hijau hover:bg-hijau-100 flex items-center gap-3 justify-center text-coklat font-medium text-2xl w-[60%] rounded-full">
                    <div  class=" h-[1px] w-[50px] bg-black"></div> 
                    Cancellitation Pollicy
                </a>
            </div>
            <div class="flex items-center gap-40">
                <div>
                    <h1 class="text-4xl">Call Us (Fastest)</h1>
                    <a href="" class="text-2xl mt-5 flex items-center gap-5"><div  class=" h-[1px] w-[25px] bg-white"></div> (+62) 8123456789</a>
                </div>
                <div>
                    <h1 class="text-4xl">Email Us</h1>
                    <a href="" class="text-2xl mt-5 flex items-center gap-5"><div  class=" h-[1px] w-[25px] bg-white"></div> chcb@chocicebarber.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-[#f4f5fe] px-[8%] py-10">
    
    <!-- 2 metode pembayarab -->
    <div class="mt-5 py-10">
        <h4 class="mt-16 text-4xl font-bold">2. Select Payment</h4>
        <form action="{{ route('transaksi.store'); }}" method="POST">
          @csrf
        <div class="grid grid-cols-2 gap-4 mt-8">
            <div>
                <div class="flex gap-3 bg-white border-2 py-4 px-3 cursor-pointer hover:border-hijau">
                    <input type="radio" id="bca" name="bank" value="bca">
                    <label for="bca" class="flex items-center justify-between w-full cursor-pointer">
                        <p>BCA </p>
                        <img src="{{ asset('assets/image/bca_va.svg') }}" alt="" class="w-20">
                    </label>
                </div>
                <div class="flex gap-3 bg-white border-2 py-4 mt-3 px-3 cursor-pointer hover:border-hijau">
                    <input type="radio" id="gopay" name="bank" value="gopay">
                    <label for="gopay" class="flex items-center justify-between w-full cursor-pointer">
                        <p>Gopay </p>
                        <img src="{{ asset('assets/image/midtrans.gopay.svg') }}" alt="" class="w-20">
                    </label>
                </div>
                <div class="flex gap-3 bg-white border-2 py-4 mt-3 px-3 cursor-pointer hover:border-hijau">
                    <input type="radio" id="qris" name="bank" value="qris">
                    <label for="qris" class="flex items-center justify-between w-full cursor-pointer">
                        <p>Qris</p>
                        <img src="{{ asset('assets/image/midtrans.qris.svg') }}" alt="" class="w-20">
                    </label>
                </div>
            </div>
            <div class="bg-white p-3">
                <h1 class="text-center text-xl py-6">Masukan data diri dan pilih Servicess yang diinginkan</h1>
                <hr>
                <div class="grid grid-cols-2 gap-4 pt-6">
                    <input 
                        type="text"
                        name="n_depan" 
                        placeholder="Nama Depan (opsiaonal)"         
                        class=" w-full rounded-md border-0 py-3 px-4  text-black  shadow-sm ring-1 ring-inset  ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6"
                    >
                    <input 
                        type="text"
                        name="n_belakang" 
                        placeholder="Nama Belakang (opsiaonal)"         
                        class=" w-full rounded-md border-0 py-3 px-4  text-black  shadow-sm ring-1 ring-inset  ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6"
                    >
                </div>
                <input 
                    type="text"
                    name="no_telp" 
                    placeholder="No Telepon "         
                    class=" w-full rounded-md border-0 mt-5 py-3 px-4  text-black  shadow-sm ring-1 ring-inset  ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6"
                >
                <input 
                    type="email"
                    name="email" 
                    placeholder="email"         
                    class=" w-full rounded-md border-0 mt-5 py-3 px-4  text-black  shadow-sm ring-1 ring-inset  ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6"
                >
                <div class="grid grid-cols-2 gap-4 pt-6">
                    <input 
                        type="text"
                        name="alamat" 
                        placeholder="Alamat (opsiaonal)"         
                        class=" w-full rounded-md border-0 py-3 px-4  text-black  shadow-sm ring-1 ring-inset  ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6"
                    >
                    <input 
                        type="text"
                        name="kode_pos" 
                        placeholder="Kode Pos(opsiaonal)"         
                        class=" w-full rounded-md border-0 py-3 px-4  text-black  shadow-sm ring-1 ring-inset  ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6"
                    >
                </div>
                <select name="layanan_id" id="layanan_id" onchange="updateTotal()" class="w-full rounded-md border-0 mt-5 py-3 px-4 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-lg sm:leading-6">
                    @foreach($trx as $tr)
                        <option value="{{ $tr->layanan_id }}" data-harga="{{ $tr->harga }}">{{ $tr->nama_layanan }}</option>
                    @endforeach  
                </select>

                <hr>

                <!-- Price display -->
                <div class="py-6 mt-16">
                    <div class="text-3xl font-bold mb-3 flex items-center justify-between">
                        <h2>TOTAL</h2>
                        <input type="text" name="total" id="harga" value="" readonly>
                    </div>
                    <a href="" class="text-blue-600 font-bold text-xl mt-4">
                        Punya Kode Kupon?
                    </a>
                </div>
                
                <hr>
                <button type="submit" class="mt-10 mb-20 bg-blue-600 hover:bg-blue-700 text-white text-2xl px-6 py-4 rounded-md">
                    Buat Tagihan Pembayaran
                </button>
            </div>
        </div>
        </form>
    </div>
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

 