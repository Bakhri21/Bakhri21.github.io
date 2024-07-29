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


// animasi alasan

// Dapatkan elemen yang akan ditampilkan ketika user melakukan scroll
const elem = document.getElementById('animate');

// Tambahkan event listener untuk mendeteksi ketika user melakukan scroll
window.addEventListener('scroll', function() {

  // Periksa apakah elemen sudah terlihat pada layar
  if (isElementInViewport(elem)) {
    // Jika sudah terlihat, tambahkan class 'fade-in'
    document.getElementById("animate").style.animation = 'slide-in 1.5s ease-in-out';
    document.getElementById("animate").style.opacity = '100%';
    
    

  } else{
    // Jika belum terlihat, hilangkan class 'fade-in'
    // document.getElementById("animate").style.opacity = '0%';
    
    
    
    
  }
});

// Fungsi untuk mengecek apakah elemen sudah terlihat pada layar
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
