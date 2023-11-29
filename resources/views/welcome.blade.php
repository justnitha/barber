@extends('users.master')

@section('opacity')
<div class="lg:absolute top-0 left-0 bg-black opacity-25 w-full h-screen hidden lg:block"></div>
@endsection

@section('content')
<div style="background-image: url('{{ asset('assets/image/barber999.jpg') }}'); background-size: cover; background-position: center; width: 100%; height: 100vh;" class="px-20 bg-fixed">
    <div class="absolute top-[10rem] w-[38rem] h-[34rem] text-white">
      <h3 class="font-normal text-5xl leading-[60px] mt-10"> CHBR Salon Has A Commitment To Keep.</h3>
      <p class="py-10 text-xl">We are committed to providing our clients with an unparalleled salon experience. We achieve this by attracting the most talented and passionate stylists; each of whom uphold the highest standard of service.</p>
      <a 
        href="#" 
        class="py-5 px-2 mt-10 bg-hijau hover:bg-hijau-100 flex items-center gap-3 justify-center text-coklat text-2xl w-[65%] rounded-full">
          <div  class="bg-coklat h-[1px] w-[50px]"></div> 
          Book Your Appointment
      </a>
    </div>
</div>

<!--  -->
<section class="container mx-auto grid grid-cols-2 mt-32 gap-24 text-[22px]">
  <div>
    <img src="{{asset('assets/image/potrait.jpg')}}" alt="barberroo" class="h-[65rem] w-full">
  </div>
  <div class="tracking-wider leading-9 py-10 pe-8">
    <p>
      Since opening in 2004, we have successfully built a reputation on talent, with a staff so knowledgable and dedicated to hair that we guarantee you will leave feeling beautiful. At ETCH Salon, excellence is our forté and improvement never stops. Our staff receives extensive, ongoing education from world renowned industry leaders, ensuring that your new style is created using the most up to date techniques.
    </p>
    <p class="mt-10">
      Make your escape into our spacious 4000 square foot salon with floor-to-ceiling windows, state of the art lighting and styling stations that raise the bar for a creative salon environment. Like you, we get excited about fashion, new hair styles and feeling luxurious. The energy at ETCH is contagious as a result of our passion for what we do.
    </p>
    <a 
        href="services" 
        class="py-5  mt-10  flex items-center gap-3 justify-beetween text-coklat text-2xl w-[65%] ">
          <div  class="bg-coklat h-[1px] w-[50px]"></div> 
          View Our Services
    </a>
    <div  class="bg-gray-400 h-[1px] w-[400px] my-16"></div> 
    <!-- question -->
    <p class="w-[40%] font-medium text-xl tracking-normal">“I am so happy with their service. I got highlights and a haircut (perfect).”</p>
    <div class="flex items-start gap-5 mt-8">
      <img src="{{asset('assets/image/pp.png')}}" alt="people" class="rounded-full w-[80px] h-[80px]" >
      <div class="text-lg tracking-normal">
        <h4 class="font-bold text-xl">no name</h4>
        <p>preview</p>
      </div>
    </div>
  </div>
</section>

<!-- services -->
<!-- bg-image -->
<div 
  style="background-image: url('{{ asset('assets/image/services.png') }}'); background-size: cover; background-position: center;" 
  class="w-full h-[40rem] mt-60">
</div>
<p class="py-20 text-center container px-60 mx-auto text-6xl">We offer a wide array of services so you can look great and feel confident</p>
<div class="container mx-auto grid grid-cols-5 gap-10">
  <!-- hair -->
  <a href="serviceshair"  
    style="background-image: url('{{ asset('assets/image/hair.png') }}');"
    class="hover-effect"
  >
    <div class=" hover:bg-gradient-to-b from-transparent to-hijau h-full">
     <div class="absolute bottom-6 left-6 text-white">
       <i class="bi bi-scissors text-5xl"></i>
       <p class="text-3xl mt-4">Hair</p>
     </div>
    </div>
  </a>
  <!-- color -->
  <a href=""  
    style="background-image: url('{{ asset('assets/image/color.png') }}');"
    class="hover-effect"
  >
    <div class=" hover:bg-gradient-to-b from-transparent to-hijau h-full">
     <div class="absolute bottom-6 left-6 text-white">
       <i class="bi bi-brush text-5xl"></i>
       <p class="text-3xl mt-4">Color</p>
     </div>
    </div>
  </a>
  <!-- keramas -->
  <a href=""
    style="background-image: url('{{ asset('assets/image/keramas.png') }}');"
    class="hover-effect"
  >
    <div class=" hover:bg-gradient-to-b from-transparent to-hijau h-full">
     <div class="absolute bottom-6 left-6 text-white">
       <i class="bi bi-hourglass-bottom text-5xl"></i>
       <p class="text-3xl mt-4">Chemical</p>
     </div>
    </div>
  </a>
  <!-- treatment -->
  <a href=""  
    style="background-image: url('{{ asset('assets/image/treatmen.png') }}');"
    class="hover-effect"
  >
    <div class=" hover:bg-gradient-to-b from-transparent to-hijau h-full">
     <div class="absolute bottom-6 left-6 text-white">
       <i class="bi bi-tree text-5xl"></i>
       <p class="text-3xl mt-4">Treatment</p>
     </div>
    </div>
  </a>
  <!-- waxing -->
  <a href=""
    style="background-image: url('{{ asset('assets/image/waxing.png') }}');"
    class="hover-effect"
  >
    <div class=" hover:bg-gradient-to-b from-transparent to-hijau h-full">
     <div class="absolute bottom-6 left-6 text-white">
       <i class="bi bi-globe-central-south-asia text-5xl"></i>
       <p class="text-3xl mt-4">Waxing</p>
     </div>
    </div>
  </a>
</div>
<div class="mx-auto container py-20">
  <a 
    href="#" 
    class="py-5 px-2 mt-10 bg-hijau hover:bg-hijau-100 flex items-center gap-3 justify-center text-coklat text-2xl w-[20%] mx-auto rounded-full">
      <div  class="bg-coklat h-[1px] w-[50px]"></div> 
      View Our Services
  </a>
</div>
<!-- team -->
<section class="container mx-auto">
  <div 
    style="background-image: url('{{ asset('assets/image/keramas2.png') }}'); background-size: cover; background-position: center;" 
    class="w-full h-[40rem] mt-12">
  </div>
  <p class="w-[44%] py-24 leading-[70px] text-6xl">Our team is made up of genuinely gifted people</p>
  <div class="grid grid-cols-3">
    <div>
      <div class="img-hover-zoom--brightness overflow-hidden w-[80%] cursor-pointer mt-14">
        <img 
          src="{{ asset('assets/image/man4.jpg') }}" 
          alt="barber1"
          class="h-[38rem] w-full"
        >
      </div>
      <p class="mt-10 font-bold text-lg tracking-wider">Master Stylist</p>
      <p class="mt-1 text-2xl">Jack De Jack</p>
    </div>

    <div>
      <div class="img-hover-zoom--brightness overflow-hidden w-[80%] cursor-pointer">
        <img 
          src="{{ asset('assets/image/man3.jpg') }}" 
          alt="barber1"
          class="h-[30rem] w-full"
        >
      </div>
      <p class="mt-10 font-bold text-lg tracking-wider">Advance Stylist</p>
      <p class="mt-1 text-2xl">Trajusts</p>
    </div>

    <div>
      <div class="img-hover-zoom--brightness overflow-hidden w-[80%] cursor-pointer mt-14">
        <img 
          src="{{ asset('assets/image/marco.jpg') }}" 
          alt="barber1"
          class="h-[30rem] w-full"
        >
      </div>
      <p class="mt-10 font-bold text-lg tracking-wider">Educator || Master Stylist</p>
      <p class="mt-1 text-2xl">Marco</p>
    </div>
  </div>
  <div class="mx-auto container py-20">
  <a 
    href="#" 
    class="py-5 px-2 mt-10 bg-hijau hover:bg-hijau-100 flex items-center gap-3 justify-center text-coklat text-2xl w-[20%] mx-auto rounded-full">
      <div  class="bg-coklat h-[1px] w-[50px]"></div> 
      View All Stylist
  </a>
</div>
</section>
<!-- courosel -->
<h1 class="w-[60%] mx-auto text-center text-6xl">A vibrant work culture that flows with creativity is our secret</h1>
<div class="slider relative mt-32">
    <div class="w-[5%] mx-10 cursor-pointer"><img src="{{ asset('assets/image/etch2.jpg') }}" alt="Slide 1"></div>
    <div class="w-[6.43%] mx-10 cursor-pointer"><img src="{{ asset('assets/image/etch1.jpg') }}" alt="Slide 1"></div>
    <div class="w-[5%] mx-10 cursor-pointer"><img src="{{ asset('assets/image/etch3.jpg') }}" alt="Slide 1"></div>
    <div class="w-[5%] mx-10 cursor-pointer"><img src="{{ asset('assets/image/etch4.jpg') }}" alt="Slide 1"></div>
    
    <!-- Add more slides as needed -->
</div>

<!-- products -->
<section class="w-[60%] mx-auto text-center text-6xl mt-48">
  <h1>When it comes to our products we only use what is best for your hair</h1>
  <div class="grid grid-cols-4 gap-20 mt-32" >
    <img src="{{ asset('assets/image/kerastase.jpg') }}" alt="kerastase">
    <img src="{{ asset('assets/image/shu-uemura.jpg') }}" alt="shu uemura">
    <img src="{{ asset('assets/image/brazilian-blowout-1.jpg') }}" alt="brazilian blowout">
    <img src="{{ asset('assets/image/face-reality.jpg') }}" alt="face reality">
  </div>
  <div class="flex justify-center gap-10 mt-10 " >
    <img src="{{ asset('assets/image/le-mieux.jpg') }}" alt="lemiux">
    <img src="{{ asset('assets/image/oribe.jpg') }}" alt="oribe">
    <img src="{{ asset('assets/image/elta-md-skincare.jpg') }}" alt="skincare">
    <!-- <img src="{{ asset('assets/image/face-reality.jpg') }}" alt="face reality"> -->
  </div>
</section>


@endsection

  

