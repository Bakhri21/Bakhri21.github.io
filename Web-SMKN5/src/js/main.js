// FUNGSI TOOGLE MENU
function toggleMenu() {
  var submenu = document.querySelector(".sub-menu");
  submenu.classList.toggle("show-sub-menu");
}

// FUNGSI HIDE MENU LAYAR > 768 PX
function checkWindowSize() {
  var submenu = document.querySelector(".sub-menu");
  if (window.innerWidth > 768) {
    submenu.classList.remove("show-sub-menu");
  }
}

// FUNGSI HIDE MENU KLIK LUAR MENU
function handleClickOutside(event) {
  var submenu = document.querySelector(".sub-menu");
  var hamburgerMenu = document.querySelector(".hamburger-menu");

  if (
    !submenu.contains(event.target) &&
    !hamburgerMenu.contains(event.target)
  ) {
    submenu.classList.remove("show-sub-menu");
  }
}

// FUNGSI BUTTON HEADER SUB MENU
// BERANDA
function beranda() {
  window.location.href = "index.html";
}
document.getElementById('beranda').addEventListener("click", beranda);
// BERITA

// FUNGSI JUMBOTRON
function initBackgroundChanger() {
  const backgrounds = [
    'url("./src/img/jumbotron-1.jpg")',
    'url("./src/img/jumbotron-2.jpg")',
    'url("./src/img/jumbotron-3.jpg")',
  ];
  let currentBackgroundIndex = 0;
  const jumbotron = document.getElementById("jumbotron");

  function changeBackground() {
    currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
    jumbotron.style.backgroundImage = backgrounds[currentBackgroundIndex];
  }

  setInterval(changeBackground, 5000);
  changeBackground();
}

// FUNGSI MENGUBAH BACKGROUND KE LOADING LAZY
function lazyLoadBackgrounds() {
  const lazyBackgrounds = document.querySelectorAll(".lazy-bg");
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const bg = entry.target;
        initBackgroundChanger(bg);
        observer.unobserve(bg);
      }
    });
  });

  lazyBackgrounds.forEach((bg) => {
    observer.observe(bg);
  });
}

// FUNGSI ANIMASI MENGETIK
function startTypingAnimation(
  words,
  elementSelector,
  typingSpeed,
  erasingSpeed,
  newWordDelay
) {
  let wordIndex = 0;
  let letterIndex = 0;
  const typingAnimationElement = document.querySelector(elementSelector);

  function type() {
    if (letterIndex < words[wordIndex].length) {
      typingAnimationElement.textContent +=
        words[wordIndex].charAt(letterIndex);
      letterIndex++;
      setTimeout(type, typingSpeed);
    } else {
      setTimeout(erase, newWordDelay);
    }
  }

  function erase() {
    if (letterIndex > 0) {
      typingAnimationElement.textContent = words[wordIndex].substring(
        0,
        letterIndex - 1
      );
      letterIndex--;
      setTimeout(erase, erasingSpeed);
    } else {
      wordIndex = (wordIndex + 1) % words.length;
      setTimeout(type, typingSpeed);
    }
  }

  if (words.length) setTimeout(type, newWordDelay);
}

document.addEventListener("DOMContentLoaded", function () {
  const words = ["Unggul", "Kompeten", "Berkarakter"];
  const typingSpeed = 100; // Speed of typing
  const erasingSpeed = 50; // Speed of erasing
  const newWordDelay = 2000; // Delay before starting to type next word

  startTypingAnimation(
    words,
    ".typing-animation",
    typingSpeed,
    erasingSpeed,
    newWordDelay
  );
});

// FUNGSI ANIMASI PERKECIL KATA PADA JUMBOTRON
function scaleTextOnScroll() {
  const jumbotron = document.querySelector(".jumbotron");
  const h1 = jumbotron.querySelector(".main-title");
  const p = jumbotron.querySelector(".typing-animation");

  window.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;
    const jumbotronHeight = jumbotron.offsetHeight;
    const scaleValue = 1 - scrollPos / jumbotronHeight;
    const opacityValue = 1 - scrollPos / (jumbotronHeight / 2);

    h1.style.transform = `scale(${Math.max(scaleValue, 0.1)})`;
    p.style.transform = `scale(${Math.max(scaleValue, 0.1)})`;
    h1.style.opacity = `${Math.max(opacityValue, 0)}`;
    p.style.opacity = `${Math.max(opacityValue, 0)}`;
  });
}

function toggleContent(buttonId, showContentId, hideContentId) {
  var showElement = document.getElementById(showContentId);
  var hideElement = document.getElementById(hideContentId);

  hideElement.classList.remove("show");
  setTimeout(function () {
    hideElement.style.display = "none";
    showElement.style.display = "flex";
    setTimeout(function () {
      showElement.classList.add("show");
    }, 20); // Delay kecil untuk memastikan transisi berlaku
  }, 500); // Sesuaikan dengan durasi transisi

  // Mengelola status tombol aktif dan fokus
  var button = document.getElementById(buttonId);
  button.classList.add("active");
  button.focus();

  if (buttonId === "btn-reguler") {
    document.getElementById("btn-industri").classList.remove("active");
  } else {
    document.getElementById("btn-reguler").classList.remove("active");
  }
}

document.getElementById("btn-reguler").addEventListener("click", function () {
  toggleContent("btn-reguler", "reguler-content", "industri-content");
});

document.getElementById("btn-industri").addEventListener("click", function () {
  toggleContent("btn-industri", "industri-content", "reguler-content");
});

// Set default content and focus
document.getElementById("reguler-content").style.display = "flex";
setTimeout(function () {
  document.getElementById("reguler-content").classList.add("show");
}, 20);
document.getElementById("btn-reguler").classList.add("active");


// MEMANGGIL FUNGSI
document.querySelector(".hamburger-menu").addEventListener("click", toggleMenu);
window.addEventListener("resize", checkWindowSize);
document.addEventListener("click", handleClickOutside);
document.addEventListener("DOMContentLoaded", initBackgroundChanger);
document.addEventListener("DOMContentLoaded", lazyLoadBackgrounds);
document.addEventListener("DOMContentLoaded", scaleTextOnScroll);
checkWindowSize();
