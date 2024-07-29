// Menampilkan tombol saat pengguna menggulir ke bawah halaman
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementById("scroll-to-top-btn").style.display = "flex";
  } else {
    document.getElementById("scroll-to-top-btn").style.display = "none";
  }
}

// Menggulir ke atas halaman saat tombol diklik
document.getElementById("scroll-to-top-btn").onclick = function() {topFunction()};

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Feather Icon
feather.replace()

// Menu Hamburger
const menu = document.querySelector('.menu');

document.querySelector('#burger').onclick = () =>{

    menu.classList.toggle('active');
};


// loading awal
setTimeout( function loadpage() {
    
      const boxload = document.querySelector('.alert-box');

      boxload.classList.toggle('alert-box');
      boxload.style.display = 'none';
      
    
  },
3000);

