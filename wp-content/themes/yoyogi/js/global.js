
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
  new Splide( '#banner-slider', {
    type: 'fade',
    perPage: 1,
    rewind: true,
    arrows: false,
    autoplay: true
  }).mount();
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
      },
      1400: {
        fixedWidth: '225px',
      },
      1199: {
        fixedWidth: 'unset',
        perPage: 3,
        gap: 30
      }
    }
  }).mount();
  new Splide( '#food-top-slider', {
    type: 'fade',
    perPage: 1,
    rewind: true,
    arrows: false,
    autoplay: true
  }).mount();
  new Splide( '#food-bottom-slider', {
    type: 'fade',
    perPage: 1,
    rewind: true,
    arrows: false,
    autoplay: true
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
  //scrollToElement(beverageLink, 'beverage');
  scrollToElement(contactLink, 'footer');

  inView('.fadeUp').on('enter', function (element) {
    element.classList.add('fadeUp--anime');
  });

  inView('.fadeUp-10').on('enter', function (element) {
    element.classList.add('fadeUp--anime');
  });

  document.addEventListener('mousemove', function(event) {
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
    
    var mouseXpercentage = Math.round(event.clientX / windowWidth * 100);
    var mouseYpercentage = Math.round(event.clientY / windowHeight * 100);
    
    var radialGradientValue = 'radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '% , #ED3E8E, #231E5C), radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '%, #231E5C, #ED3E8E)';
    document.getElementById('wrapper').style.background = radialGradientValue;
  });
  
  inView('.type-1').once('enter', function (element) {
    typeWriter(element)
  });
  inView('.type-2').once('enter', function (element) {
    typeWriter(element)
  });
  inView('.type-3').once('enter', function (element) {
    typeWriter(element)
  });
  inView('.type-4').once('enter', function (element) {
    typeWriter(element)
  });

  var txt = 'SUSHI TRAIN · HAND-ROLL SUSHI BAR · OMAKASE'; 
  var speed = 200; 

  function typeWriter (element) {
    var index = 0;
    var d = document.getElementById(element.id);
    function type () { 
      if (index < txt.length) {
        d.innerHTML += txt.charAt(index);
        index++;
        setTimeout(type, speed);
      }
    }
    type ()
  }
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
