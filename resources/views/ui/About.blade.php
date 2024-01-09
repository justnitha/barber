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
        <div class="absolute bottom-20 text-center w-full left-0">
            <h1 class="text-7xl">About Choice Barber</h1>
            <p class="text-xl mt-4">Professionalism, dedication, and incredible staff is what makes CHCB so unique.</p>
        </div>
    </div>
</div>
<!-- foto barber (orang yang memangkas rambut) -->
<section class="container mx-auto">
  <div class="grid grid-cols-3 gap-32">
  @foreach($dataBearber as $barber)
    <div>
      <div class="img-hover-zoom--brightness overflow-hidden  cursor-pointer mt-14">
        <img 
          src="{{ asset('imageB/' . $barber->img_file) }}" 
          alt="barber1"
          class="h-[33rem] w-full"
        >
      </div>
      <p class="mt-10 font-bold text-lg tracking-wider">Educator || Master Stylist</p>
      <p class="mt-1 text-2xl">{{ $barber->nama }}</p>
    </div>
    @endforeach
  </div>
  
</section>
<!-- about -->
<section class="relative mb-32">
    <div 
        style="background-image: url('{{ asset('assets/image/etch1.jpg') }}'); background-size: cover; background-position: center; width: 90%; height: 60vh; margin:50px auto 0;" 
        class="bg-no-repeat text-center text-white relative"
    >
    </div>
    <marquee class="custom-marquee" behavior="scroll" direction="left" scrollamount="17" loop="infinite">
        <div class="flex items-center">
            <h2>A COMMITMENT TO KEEP • CHOICE BARBER • <span>&nbsp;</span><h2>
            <h2>A COMMITMENT TO KEEP • CHOICE BARBER • <span>&nbsp;</span><h2>
            <h2>A COMMITMENT TO KEEP • CHOICE BARBER • <span>&nbsp;</span><h2>
        </div>
    </marquee>
    <div class="w-[45%] mx-auto mt-16">
        <h1 class="text-6xl tracking-wider">CHOICE BARBER HAS A COMMITMENT TO KEEP.</h1>
        <p class="mt-8 text-xl">
            We are committed to providing our clients with an unparalleled salon experience. We achieve this by attracting the most talented and passionate stylists; each of whom uphold the highest standard of service.
        </p>
        <div class="bg-hijau h-1 my-10 w-[30%]"></div>
        <p class="text-xl">
            Since opening in 2023, we have successfully built a reputation on talent, with a staff so knowledgeable and dedicated to hair that we guarantee you will leave feeling beautiful. At Choice Barber, excellence is our forté and improvement never stops. Our staff receives extensive, ongoing education from world renowned industry leaders, ensuring that your new style is created using the most up to date techniques. Make your escape into our spacious 4000 square foot salon with floor-to-ceiling windows, state of the art lighting and styling stations that raise the bar for a creative salon environment. Like you, we get excited about fashion, new hair styles and feeling luxurious. The energy at ETCH is contagious as a result of our passion for what we do.
        </p>
    </div>
</section>
@endsection

