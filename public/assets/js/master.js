/*Script Untuk NAvbar*/
const buttonToogle =document.querySelector('.buttonToogle')
const mobileMenu = document.querySelector('.mobileMenu')

buttonToogle.addEventListener('click', function(){
    mobileMenu.classList.toggle('hidden');
})
// scroll navbar
document.addEventListener("DOMContentLoaded", function () {
  var navbar = document.querySelector(".navbar");
  var timeout;

  function hideNavbar() {
    navbar.classList.add("hid");
    navbar.classList.remove("scroler");
  } 

  function showNavbar() {
    // Menunjukkan navbar hanya jika window.scrollY lebih besar dari 250
    if (window.scrollY < 200) {
      navbar.classList.remove("hid");
      navbar.classList.remove("scroler");
      navbar.classList.add("scrolers");
      // Set timeout untuk menyembunyikan navbar setelah 1 detik diam
      // timeout = setTimeout(hideNavbar, 1000);
    }else if (window.scrollY > 200) {
      navbar.classList.add("hid");
      navbar.classList.add("scroler");
      navbar.classList.remove("scrolers");
      
      timeout = setTimeout(hideNavbar, 5000);
    }
  }

  function resetTimeout() {
    clearTimeout(timeout);
    // Set timeout kembali setelah terjadi scroll
    timeout = setTimeout(hideNavbar, 5000);
  }

  window.addEventListener("scroll", function () {
    showNavbar();
    resetTimeout();
  });
});


// slide show
// contact
  document.addEventListener("DOMContentLoaded", function() {
    var navbar = document.querySelector(".contact");

    window.addEventListener("scroll", function() {
      if (window.scrollY > 250) {
        navbar.classList.add("show"); // Tambahkan kelas bg-white saat di-scroll
      } else {
        navbar.classList.remove("show"); // Hapus kelas bg-white saat tidak di-scroll
      }
    });
  });



