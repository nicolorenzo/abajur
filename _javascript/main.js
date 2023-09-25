document.addEventListener('DOMContentLoaded', () => {
  console.log('Hello Bulma!');

  // Menu
  let menuMobile = document.querySelector('.navbar-menu');
  let openMenuButton = document.querySelector('.navbar-burger.open');
  let closeMenuButton = document.querySelector('.navbar-burger.close');

  openMenuButton.addEventListener('click', openMenu);
  closeMenuButton.addEventListener('click', openMenu);

  function openMenu() {
    menuMobile.classList.toggle('open');
  }

  // Hide/show nav
  const nav = document.querySelector('nav');
  const navHeight = nav.offsetHeight;
  let prevScrollPos = window.scrollY;

  const addClassOnScroll = () => nav.classList.add('nav-up');
  const removeClassOnScroll = () => nav.classList.remove('nav-up');

  window.addEventListener('scroll', HideShowNavOnScroll);

  function HideShowNavOnScroll() {
    let scrollPos = window.scrollY;

    if (scrollPos >= navHeight) {
      addClassOnScroll();
    } else {
      removeClassOnScroll();
    }

    if (prevScrollPos > scrollPos) {
      removeClassOnScroll();
    }

    prevScrollPos = scrollPos;
  }

  // Initialize Swiper
  const swiperClientes = new Swiper('.swiper.clientes', {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      375: {
        spaceBetween: 10,
        slidesPerView: 3,
      },
      768: {
        spaceBetween: 20,
        slidesPerView: 4,
      },
      1024: {
        spaceBetween: 40,
        slidesPerView: 6,
      },
    },
  });
  const swiperCase = new Swiper('.swiper.case', {
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  const swiperSobre = new Swiper('.swiper.sobre', {
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  // Formulário
  let inputs = document.querySelectorAll('.form-control *:required');
  let submitButton = document.querySelector('button[type="submit"]');

  let formData = {
    nome: '',
    email: '',
    telefone: '',
    // linkedin: '',
    // portfolio: '',
  };

  let events = ['input', 'focus', 'blur'];

  events.forEach((event) => {
    inputs.forEach((input) => {
      input.addEventListener(event, () => {
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
