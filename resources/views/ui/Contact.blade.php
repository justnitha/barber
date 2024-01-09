@extends('users.master')

@section('opacity')
<div class="lg:absolute top-0 left-0 bg-black opacity-25 w-full h-[40vh] hidden lg:block"></div>
@endsection

@section('content')
<div>
    <div 
        style="background-image: url('{{ asset('assets/image/bg-contact.png') }}'); background-size: cover; background-position: center; width: 100%; height: 40vh;" 
        class="px-20 bg-no-repeat text-center text-white relative"
    >
        <div class="absolute bottom-24 text-center w-full left-0">
            <h1 class="text-7xl">Contact Us</h1>
            <p class="text-2xl mt-2">
                ETCH Salon is located in the south corner of Denpasar, living World. Next to Mek Juwel.
            </p>
        </div>
    </div>
</div>
<div class="w-[80%] lg:w-[60%] mt-28 container mx-auto">
    <p class="text-[#7a7a7a] text-lg">Please fill in the form below</p>
</div>
<div class="grid lg:grid-cols-2 md:grid-cols-2 container mx-auto w-[80%] lg:w-[60%] mb-28">
    <div class="mt-5">
        <form action="" autocomplete="off">
            <div class="py-1">
                <label for="nama" class="block py-1 text-lg font-semibold ">
                    Full Name 
                    <span class="text-red-500">*</span>
                </label>
                <input 
                    name="Nama" 
                    id="nama" 
                    type="text" 
                    placeholder="Full Name" 
                    class="block mx-auto mt-3 focus:outline-[#e3e3e3] border-[#e3e3e3] text-[#7a7a7a] border-b w-full p-2 ">
            </div>
            <div class="py-1">
                <label for="Email" class="block py-1 text-lg font-semibold ">
                    Email 
                    <span class="text-red-500">*</span>
                </label>
                <input 
                    name="Email" 
                    id="Email" 
                    type="email" 
                    placeholder="Email" 
                    class="block mx-auto mt-3  focus:outline-[#e3e3e3] border-[#e3e3e3] text-[#7a7a7a] border-b w-full p-2">
            </div>
            <div class="py-1">
                <label for="Subject" class="block py-1 text-lg font-semibold ">
                    Subject 
                    <span class="text-red-500">*</span>
                </label>
                <input 
                    name="Subject" 
                    id="Subject" 
                    type="text" 
                    placeholder="Subject" 
                    class="block mx-auto mt-3  focus:outline-[#e3e3e3] border-[#e3e3e3] text-[#7a7a7a] border-b w-full p-2">
            </div>
            <div class="py-1">
                <label for="massege" class="block py-1 text-lg font-semibold ">
                    Questions
                    <span class="text-red-500">*</span>
                </label>
                <textarea 
                    name="Massage" 
                    id="massege" 
                    cols="78" 
                    rows="4" 
                    placeholder="Questions" 
                    class="block mx-auto mt-3 focus:outline-[#e3e3e3]  border-[#e3e3e3]  text-[#7a7a7a] border-b w-full p-2 overflow-y-hidden">
                </textarea>
            </div>
            <button type="submit" class="block mx-auto py-2 px-6 rounded-sm mt-4 bg-hijau-200 text-white capitalize w-full">
                send
            </button>
        </form>
    </div>

    <div class="py-2 mt-10 lg:mt-0 md:ms-28 lg:ms-28">
        <div>
            <h1 class="uppercase text-hijau-200 font-bold text-xl">choice barber</h1>
            <p class="text-base">
            15205 jln.Jalak Harupat.No.132, Denpasar Timur
            </p>
        </div>
        <div class="mt-10">
            <h1 class="uppercase text-hijau-200 font-medium text-lg">office hour</h1>
            <p class="text-base">Monday - Friday <br>09:00 WIB - 17:00 WIB <br>Sunday holidays</p>
        </div>
        <div class="mt-10"><h1 class="uppercase text-hijau-200 font-bold text-lg">contact info</h1>
        <div class="flex items-center gap-3 text-hijau-200 text-base">
            <i class="bi bi-phone"></i>
            <p>(+62) 8123456789</p>
        </div>
        <a class="flex items-center gap-3 text-hijau-200 text-base">
            <i class="bi bi-envelope"></i>
            <p>chcb@chocicebarber.com</p>
        </a>
    </div>
    <div class="mt-10">
        <h1 class="uppercase text-hijau-200 font-medium text-lg">social media</h1>
        <ul class="flex gap-4 mt-2 text-hijau-200">
            <li>    
                <a href="">
                    <i class="text-3xl bi bi-facebook"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="text-3xl bi bi-instagram"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="text-3xl bi bi-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="text-3xl bi bi-twitter"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="text-3xl bi bi-youtube"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
@endsection



