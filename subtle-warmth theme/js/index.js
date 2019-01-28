jQuery(document).ready(function($) {
  $(window).scroll(function(){
      $(".title").css("opacity", 1 - $(window).scrollTop() / 750);
  });
});

// hamburger menu

let nav = document.querySelector('nav');
let menu = document.getElementById('menu');

function toggleMenu() {
  menu.classList.toggle('open');
  nav.classList.toggle('show');
}

menu.onclick = toggleMenu;
