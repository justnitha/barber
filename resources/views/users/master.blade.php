<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Choice Barber</title>
  <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  

  <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
@include('users.nav')

 
@yield('content')

@include('users.footer')

<div 
    class="contact bg-green-400 hover:bg-green-600 text-white p-5 rounded-full text-4xl cursor-pointer" 
    onclick="sendWhatsAppMessage()"
>
  <i class="bi bi-whatsapp"></i>
</div>
   
  

  <script src="{{asset('assets/js/master.js')}}"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      variableWidth: true,

      // focusOnSelect: true,

    });
  //   $('.slider-nav').slick({
  // slidesToShow: 3,
  // slidesToScroll: 1,
  // // asNavFor: '.slider-for',
  // dots: true,
  // centerMode: true,
  // focusOnSelect: true
    });
  </script>
</body>
</html>