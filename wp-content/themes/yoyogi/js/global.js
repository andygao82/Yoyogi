
document.addEventListener( 'DOMContentLoaded', function () {
  var menuIcon = document.getElementById('menu-icon');
  var menu = document.getElementById('menu');
  var body = document.getElementById('body');
  menuIcon.addEventListener('click', function () {
    menuIcon.classList.toggle('active');
    menu.classList.toggle('active');
    body.classList.toggle('active');
  });
  var menuItems = document.getElementsByClassName('menu-item');
  for (var i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('click', function () {
      menuIcon.classList.remove('active');
      menu.classList.remove('active');
      body.classList.remove('active');
    });
  }
  new Splide( '#main-slider', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
    pagination: false,
    fixedWidth : '315px',
    gap: 45,
    breakpoints: {
      1600: {
        fixedWidth: '275px',
      }
    }
  }).mount();

  var aboutUsLink = document.getElementById('menu-item-53');
  var aboutUsLink1 = document.getElementById('about-us-link');
  var sushiTrainLink = document.getElementById('menu-item-54');
  var handrollBarLink = document.getElementById('menu-item-55');
  var menuLink = document.getElementById('menu-item-56');
  var beverageLink = document.getElementById('menu-item-57');
  var contactLink = document.getElementById('menu-item-58');
  scrollToElement(aboutUsLink, 'about-us');
  scrollToElement(aboutUsLink1, 'about-us');
  scrollToElement(sushiTrainLink, 'sushi-train');
  scrollToElement(handrollBarLink, 'hand-roll');
  scrollToElement(beverageLink, 'beverage');
  scrollToElement(contactLink, 'footer');

  var viewMapLink = document.getElementById('view-map');
  var map = document.getElementById('map');
  viewMapLink.addEventListener('click', function (e) {
    e.preventDefault();
    map.classList.toggle('active');
  });

  inView('.fadeUp').on('enter', function (element) {
    element.classList.add('fadeUp--anime');
  });

  inView('.fadeUp-10').on('enter', function (element) {
    element.classList.add('fadeUp--anime');
  });
});


function scrollToElement(link, elementId) {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    var targetElement = document.getElementById(elementId)
    if (targetElement) {
        const yOffset = -50; // Optional: Adjust the vertical offset if needed
        window.scrollTo({
            top: targetElement.offsetTop + yOffset,
            behavior: 'smooth'
        });
    }
  })
}