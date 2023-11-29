@extends('users.master')

@section('opacity')
<div class="lg:absolute top-0 left-0 bg-black opacity-25 w-full h-[40vh] hidden lg:block"></div>
@endsection

@section('content')
<div>
    <div 
        style="background-image: url('{{ asset('assets/image/services-bg.png') }}'); background-size: cover; background-position: center; width: 100%; height: 40vh;" 
        class="px-20 bg-no-repeat text-center text-white relative"
    >
        <div class="absolute bottom-20 text-center w-full left-0">
            <h1 class="text-7xl">Services</h1>
            <p class="text-xl mt-4">We are committed to providing our clients with an unparalleled salon experience.</p>
        </div>
    </div>
</div>

<section class="px-20">
    <h2 class="text-center text-4xl mt-40  font-bold">Paket & Harga</h2>
    <p class="text-center py-4 bg-orange-300 w-[10%] rounded-full text-xl mx-auto text-white my-5">Reguler</p>
    <div class="grid grid-cols-2 text-2xl gap-10 mt-10">
        @foreach($layanan as $serv)
        <div>
            <div class="flex">
                <p>{{$serv->nama_layanan}}</p>
                <div class="titik"></div>
                <p class="text-orange-300">{{$serv->harga}}K</p>
            </div>
            <p class="text-lg">{{$serv->deskripsi}}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection