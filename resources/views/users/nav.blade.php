<!--Tampilan Desktop-->
<nav class="relative">
   
<div class="navbar flex justify-between items-center text-white bg-black lg:bg-transparent  w-full px-10 lg:px-20 py-4 relative lg:fixed top-0 left-0 text-xl z-40">
    <a href="" class="">
        <img src="{{asset('assets/image/logo-ajust.png')}}" alt="logo" width="260">
    </a>
    <ul class="lg:flex gap-8 hidden items-center">
        <li class="list"><a href="/" class="a aktif">Home</a></li>
        <li class="list"><a href="/about" class="a">About</a></li>
        <li class="list"><a href="/services" class="a">Services</a></li>
        <li class="list"><a href="/careers" class="a">Careers</a></li>
        <li class="list"><a href="/cancellation-policy" class="a">Cancellation Policy</a></li>
        <!-- <li class="list"><a href="/contact" class="a">Contacts Us</a></li> -->
        <a href="/transaksi/create" 
            class="py-2 px-8 bg-hijau hover:bg-hijau-100 flex items-center gap-3 justify-center text-coklat rounded-full"> 
            Book Now
        </a>
    </ul>
    <div class="lg:hidden block buttonToogle">
        <button>
            <i class="bi bi-list text-2xl"></i>
        </button>
    </div>

</div>
        <!--Tampilan Mobile-->
<div class="mobileMenu hidden bg-black text-white pb-5">
    <ul class=" text-sm gap-8 ">
        <li class="py-3 ps-3 cursor-pointer hover:bg-primary-100"><a href="/">Home</a></li>
        <li class="py-3 ps-3 cursor-pointer hover:bg-primary-100"><a href="/about">About</a></li>
        <li class="py-3 ps-3 cursor-pointer hover:bg-primary-100"><a href="/services">Services</a></li>
        <li class="py-3 ps-3 cursor-pointer hover:bg-primary-100"><a href="#">Hair Artist</a></li>
        <li class="py-3 ps-3 cursor-pointer hover:bg-primary-100"><a href="">Contact us</a></li>
    </ul>
    <div class="flex gap-4  mt-5 mx-auto px-3">
        <button class="text-xs outline px-9 py-4 rounded-full w-full">Sign In</button>
        <button class="text-xs text-primary outline px-9 py-4 rounded-full  w-full">Sign Up</button>
</div>
</nav>


        