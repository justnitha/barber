/*Script Untuk NAvbar*/
const buttonToogle =document.querySelector('.buttonToogle')
const mobileMenu = document.querySelector('.mobileMenu')

buttonToogle.addEventListener('click', function(){
    mobileMenu.classList.toggle('hidden');
})

// navbar akftif

// document.addEventListener("DOMContentLoaded", function () {
//   var navLinks = document.querySelectorAll(".list a");

//   navLinks.forEach(function (link) {
//       link.addEventListener("click", function () {
//           // Remove the "aktif" class from all elements
//           navLinks.forEach(function (otherLink) {
//               otherLink.classList.remove("");
//           });

//           // Add the "aktif" class to the clicked element
//           link.classList.add("aktif");
//       });
//   });
// });

// scroll navbar
document.addEventListener("DOMContentLoaded", function() {
  var navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function() {
    if (window.scrollY > 70) {
      navbar.classList.add("scroler"); // Tambahkan kelas bg-white saat di-scroll
    } else {
      navbar.classList.remove("scroler"); // Hapus kelas bg-white saat tidak di-scroll
    }
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

// function wa
function sendWhatsAppMessage() {
  let phoneNumber = "6281237273879";
  let defaultMessage = "Halo kak, kami tertarik dan ingin pesan pasir di Sampurna Abadi Makmur. Bisa tolong dibantu?";
  let whatsappLink ="https://wa.me/" +phoneNumber +"?text=" +encodeURIComponent(defaultMessage);
  window.open(whatsappLink,"_blank");
}



