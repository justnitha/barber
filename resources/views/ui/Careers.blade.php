@extends('users.master')

@section('opacity')
<div class="lg:absolute top-0 left-0 bg-black opacity-25 w-full h-[40vh] hidden lg:block">a</div>
@endsection

@section('content')
<div class="scroll-smooth">
    <div 
        style="background-image: url('{{ asset('assets/image/keramas3.png') }}'); background-size: cover; background-position: center; width: 100%; height: 40vh;" 
        class="px-20 bg-no-repeat text-center text-white relative"
    >
        <div class="absolute bottom-20 text-center w-full left-0">
            <h1 class="text-7xl">Careers</h1>
            <p class="text-xl mt-4">We welcome applications for stylists, assistants, aestheticians and receptionists.</p>
        </div>
    </div>
</div>

<section class="text-xl py-20 bg-white">
    <ul class="w-[55%] mx-auto">
        <hr class="h-[0.9px] bg-slate-900">
        <li class="flex items-center justify-between py-8 px-5">
            <h4>Stylist</h4>
            <a 
              href="#form-karir" 
              class="border-2 rounded-full px-4 py-2"
              onclick="event.preventDefault(); document.getElementById('form-karir').scrollIntoView({ behavior: 'smooth' });"
            >
              apply now
            </a>
        </li>
        <hr class="h-[0.9px] bg-slate-900">
        <li class="flex items-center justify-between py-8 px-5">
            <h4>Assistant</h4>
            <a 
              href="#form-karir" 
              class="border-2 rounded-full px-4 py-2"
              onclick="event.preventDefault(); document.getElementById('form-karir').scrollIntoView({ behavior: 'smooth' });"
            >
              apply now
            </a>
        </li>
        <hr class="h-[0.9px] bg-slate-900">
        <li class="flex items-center justify-between py-8 px-5">
            <h4>Aesthetician</h4>
            <a 
              href="#form-karir" 
              class="border-2 rounded-full px-4 py-2"
              onclick="event.preventDefault(); document.getElementById('form-karir').scrollIntoView({ behavior: 'smooth' });"
            >
              apply now
            </a>
        </li>
        <hr class="h-[0.9px] bg-slate-900">
        <li class="flex items-center justify-between py-8 px-5">
            <h4>Receptionist</h4>
            <a 
              href="#form-karir" 
              class="border-2 rounded-full px-4 py-2"
              onclick="event.preventDefault(); document.getElementById('form-karir').scrollIntoView({ behavior: 'smooth' });"
            >
              apply now
            </a>
        </li>
        <hr class="h-[0.9px] bg-slate-900">
    </ul>
</section>

<section class="bg-[#f5f5f5] py-20" id="form-karir">
    <div class="text-center pt-16 tracking-wider">
        <h1 class="text-6xl" >Let's Work Together</h1>
        <p class="text-xl leading-9 w-[55%] mx-auto mt-8" >Thank you for your interest in a career at CHCB Barbers. We welcome applications for stylists, assistants, aestheticians and receptionists. If you are passionate about this industry and want to join our dynamic team please fill out the form below and drop off a copy of your resume at the salon. Be sure to include your qualifications, experience, and skills.</p>
        <p class="text-center text-xl py-10"><span class="font-bold" >Note</span>: Stylists, assistants, and aestheticians must be licensed or in the process there of.</p>
    </div>
    <!-- @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
    <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
    @endif -->

    <form 
      
      action="{{ route('karir.store')}}" 
      method="POST" 
      enctype="multipart/form-data"
      class="bg-white w-[75%] mx-auto p-14 shadow-xl pb-20"
    >
    @csrf
    <!-- <div class="border-b border-gray-900/10 pb-12"> -->
      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="first-name" class="block text-2xl font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <input 
                  type="text" 
                  name="name" 
                  id="first-name" 
                  autocomplete="given-name" 
                  class="block w-full rounded-md border-0 p-4  text-black  shadow-sm ring-1 ring-inset bg-[#f5f5f5] ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-xl sm:leading-6"
            >
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-2xl font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input 
                  type="email" 
                  name="email" 
                  id="email" 
                  autocomplete="family-name" 
                  class="block w-full rounded-md border-0 p-4  text-black  shadow-sm ring-1 ring-inset bg-[#f5f5f5] ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-xl sm:leading-6"
            >
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-2xl font-medium leading-6 text-gray-900">Phone Number</label>
          <div class="mt-2">
            <input 
              type="text" 
              name="phone_number" 
              id="number" 
              autocomplete="family-name" 
              class="block w-full rounded-md border-0 p-4 text-black shadow-sm ring-1 ring-inset bg-[#f5f5f5] ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-xl sm:leading-6"
            >
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="country" class="block text-2xl font-medium leading-6 text-gray-900">Applying For</label>
          <div class="mt-2">
            <select 
              id="country" 
              name="app_for" 
              autocomplete="country-name" 
              class="block w-full rounded-md border-0 p-4  text-black  shadow-sm ring-1 ring-inset bg-[#f5f5f5] ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-xl sm:leading-6"
            >
              <option>- - - -</option>
              <option value="Stylist">Stylist</option>
              <option value="Assistant">Assistant</option>
              <option value="Aesthetician">Aesthetician</option>
              <option value="Receptionist">Receptionist</option>
            </select>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-2xl font-medium leading-6 text-gray-900">Tell Us About Yourself...</label>
          <div class="mt-2">
            <textarea 
              id="about" 
              name="about" 
              rows="3" 
              class="block w-full rounded-md border-0 p-4  text-black  shadow-sm ring-1 ring-inset bg-[#f5f5f5] ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-hijau sm:text-sm lg:text-xl sm:leading-6"
            >
            </textarea>
          </div>
        </div>

        <div class="col-span-full">
        <label for="inputEmail3" class="text-xl">Upload Your Resume</label>
        <div class="col-sm-10 mt-3">
          <input type="file" class="form-control" id="inputEmail3" placeholder="foto barberman"  name="file">
        </div>

        <button 
          type="submit" 
          class="bg-hijau text-white text-xl px-9 py-4 mt-12 rounded-full"
        >
        Send
        </button>

      <!-- </div> -->
    </form>
</section>
@endsection

