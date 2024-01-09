@extends('users.master')

@section('opacity')
<div class="lg:absolute top-0 left-0 bg-black opacity-25 w-full h-[40vh] hidden lg:block"></div>
@endsection

@section('content')
<div>
    <div 
        style="background-image: url('{{ asset('assets/image/etch5-bg.jpg') }}'); background-size: cover; background-position: center; width: 100%; height: 40vh;" 
        class="px-20 bg-no-repeat text-center text-white relative"
    >
        <div class="absolute bottom-24 text-center w-full left-0">
            <h1 class="text-7xl">Cancellation Policy</h1>
        </div>
    </div>
</div>
<div class="w-[60%] text-2xl leading-9 mx-auto py-20">
    <p>Less than 24-hour notice, will result in a charge of 50% of the reserved service amount. All appointments require a credit card to be put on file. This cancellation fee will be non-refundable.</p>
    <p class="mt-8">In the event of an unavoidable emergency, your cancellation fee may be applied to a future appointment within 30 days.</p>
    <p class="mt-8">Thank you in advance for your understanding.</p>
    <p class="mt-8">We look forward to seeing you at your next appointment.</p>
    <p class="mt-8 font-bold">-Choice Barber</p>
    <a 
        href="/transaksi/create" 
        class="py-4 px-2 mt-14 bg-hijau hover:bg-hijau-100 flex items-center gap-3 justify-center text-coklat text-2xl w-[35%]  rounded-full">
          <div  class=" h-[1px] w-[40px] bg-black"></div> 
          Book Your Appointment
      </a>
</div>
@endsection

