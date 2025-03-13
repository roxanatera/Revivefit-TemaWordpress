function fitWordpress() {
    if (document.querySelector('.swiper')) {
        const opciones = {
            loop: true,
            autoplay: {
                delay: 3000, // Tiempo en milisegundos (3 segundos)
                disableOnInteraction: false, // Permite que el autoplay continúe después de interacción del usuario
            },
        };
        new Swiper('.swiper', opciones);
    }
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  const hamburguer = document.querySelector('.hamburguer-menu svg');
  hamburguer.addEventListener('click', () => {
    const menuPrincipal = document.querySelector('.contenedor-menu');
    menuPrincipal.classList.toggle('mostrar');
  });
 
}
document.addEventListener('DOMContentLoaded', fitWordpress);

window.onscroll = function() {
  const scroll = window.scrollY;

  const barraNav = document.querySelector('.barra-navegacion');
  if (scroll > 300) {
    barraNav.classList.add('fixed-top');
  } else {
   barraNav.classList.remove('fixed-top');
  }

  
};