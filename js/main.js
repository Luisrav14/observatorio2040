// Cambio de color scroll

window.addEventListener("scroll", function () {
  let header = document.querySelector("nav");
  let windowPosition = window.scrollY > 0;
  header.classList.toggle("scrolling-active", windowPosition);
});


// Carrusel Publicaciones

$(document).ready(function () {
  $("#news-slider").owlCarousel({
    items: 3,
    navigation: true,
    navigationText: ["", ""],
    autoPlay: true,
  });
});
