'use strict';

document.addEventListener('DOMContentLoaded', function () {
  console.log('Hello Bulma!');

  // Menu
  var menuMobile = document.querySelector('.navbar-menu');
  var openMenuButton = document.querySelector('.navbar-burger.open');
  var closeMenuButton = document.querySelector('.navbar-burger.close');

  openMenuButton.addEventListener('click', openMenu);
  closeMenuButton.addEventListener('click', openMenu);

  function openMenu() {
    menuMobile.classList.toggle('open');
  }

  // Hide/show nav
  var nav = document.querySelector('nav');
  var navHeight = nav.offsetHeight;
  var prevScrollPos = window.scrollY;

  var addClassOnScroll = function addClassOnScroll() {
    nav.classList.add('nav-up');
    nav.classList.remove('nav-down');
  };
  var removeClassOnScroll = function removeClassOnScroll() {
    nav.classList.remove('nav-up');
    nav.classList.add('nav-down');
  };

  window.addEventListener('scroll', HideShowNavOnScroll);

  function HideShowNavOnScroll() {
    var scrollPos = window.scrollY;

    if (scrollPos >= navHeight) {
      addClassOnScroll();
    } else {
      removeClassOnScroll();
    }

    if (prevScrollPos > scrollPos) {
      removeClassOnScroll();
    }

    if (prevScrollPos < navHeight) {
      nav.classList.remove('nav-down');
    }

    prevScrollPos = scrollPos;
  }

  // Initialize Swiper
  var swiper = new Swiper('.swiperHeader', {
    slidesPerView: 1,
    effect: 'fade',
    autoplay: {
      delay: 5500
    }
  });

  var swiperClientes = new Swiper('.swiper.clientes', {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      375: {
        spaceBetween: 10,
        slidesPerView: 3
      },
      768: {
        spaceBetween: 20,
        slidesPerView: 4
      },
      1024: {
        spaceBetween: 40,
        slidesPerView: 6
      }
    }
  });
  var swiperCase = new Swiper('.swiper.case', {
    autoplay: {
      delay: 10000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    }
  });
  // const swiperPortfolio = new Swiper('.swiper.portfolio', {
  //   slidesPerView: 'auto',
  //   spaceBetween: 30,
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  //   },
  // });

  // Formulário
  var inputs = document.querySelectorAll('.form-control *:required');
  var submitButton = document.querySelector('button[type="submit"]');

  var formData = {
    nome: '',
    email: '',
    telefone: ''
    // linkedin: '',
    // portfolio: '',
  };

  var events = ['input', 'focus', 'blur'];

  events.forEach(function (event) {
    inputs.forEach(function (input) {
      input.addEventListener(event, function () {
        checkInputValidity(input);
      });
    });
  });

  function checkInputValidity(input) {
    if (input.checkValidity()) {
      input.classList.add('is-success');
      input.classList.remove('is-danger');
      formData[input.name] = true;
      input.parentElement.classList.remove('not-valid');
      input.parentElement.classList.add('valid');
    } else {
      input.classList.add('is-danger');
      input.classList.remove('is-succes');
      formData[input.name] = false;
      input.parentElement.classList.add('not-valid');
      input.parentElement.classList.remove('valid');
    }
    if (input.name !== 'nome') {
      input.value = input.value.trim();
    }
    if (input.name == 'telefone') {
      input.value = input.value.replace(/\D/g, '');
    }
    console.log(formData);
    sendData(formData);
  }

  function sendData(data) {
    if (Object.values(data).every(Boolean)) {
      submitButton.removeAttribute('disabled');
    }
  }
});