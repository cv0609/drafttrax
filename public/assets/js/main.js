// Navbar menu

const navbar = document.querySelector(".header_navbar");
const humburger = document.querySelector(".humburger");
const close = document.querySelector(".close_menu");

humburger.addEventListener("click", function () {
  navbar.classList.add("active");
});
close.addEventListener("click", function () {
  navbar.classList.remove("active");
});

// AOS JS Start
AOS.init();
// AOS JS Start

// Newsletter Validations JS Start
function validateNews() {
  const emailInput =
    document.getElementsByClassName("email-signup-input").value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailInput) {
    alert("E-Mail darf nicht leer sein");
  } else if (!emailRegex.test(emailInput)) {
    alert(
      "Ungültige E-Mail-Adresse! Bitte geben Sie eine gültige Adresse ein."
    );
  } else {
    alert("Registrierung erfolgreich! DANKE.");
  }
}
// Newsletter Validations JS End

// League Pages Tabs JS Start
$(".tab").on("click", function (evt) {
  evt.preventDefault();
  $(".tab").removeClass("active");
  $(this).addClass("active");
  var sel = $(this).attr("data-toggle-target");
  $(".tab-content").removeClass("active");
  $(sel).addClass("active");
});
$(".profile").click(function () {
  $(this).find(".dropdown").slideToggle();
});
// League Pages Tabs JS Start

// Contact Form Validation Start
function validateContactForm() {
  const name = document.getElementsByClassName("contact-form").value.trim();
  const email = document.getElementsByClassName("contact-email").value.trim();
  const topic = document.getElementsByClassName("contact-topic").value;
  const message = document.getElementsByClassName("message").value.trim();

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (name.length < 2 || name.length > 100) {
    alert(
      "Le nom doit comporter au minimum 2 caractères et au maximum 100 caractères."
    );
    return false;
  }
  if (!emailRegex.test(email)) {
    alert(`'S'il vous plaît, mettez une adresse email valide.'`);
    return false;
  }
  if (!topic) {
    alert("Veuillez choisir un sujet.");
    return false;
  }
  if (message.length < 10 || message.length > 1000) {
    alert(
      "Le message doit comporter au minimum 10 et au maximum 1000 caractères."
    );
    return false;
  }
  alert(
    "Le formulaire a été envoyé avec succès ! Merci de nous avoir contacté."
  );
  return true;
}

// accordion
document.addEventListener("DOMContentLoaded", function () {
  const accHeaders = document.querySelectorAll(".accordion_head");
  accHeaders.forEach(function (header) {
    header.addEventListener("click", function () {
      const accContent = this.nextElementSibling;

      if (accContent) {
        if (accContent.style.maxHeight) {
          accContent.style.maxHeight = null;
        } else {
          document
            .querySelectorAll(".accordion_content")
            .forEach(function (openContent) {
              openContent.style.maxHeight = null;
            });
          accContent.style.maxHeight = accContent.scrollHeight + "px";
        }
      }
      accHeaders.forEach(function (otherHeader) {
        if (otherHeader === header) {
          otherHeader.classList.toggle("active");
        } else {
          otherHeader.classList.remove("active");
        }
      });
    });
  });
});


//testimonial section
$(document).ready(function() {
  $('.testimonialSlider').slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 3,
      dots: true,
      autoplay: true,
      autoplaySpeed: 1000,
      prevArrow: false,
      nextArrow: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2
          }
      },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          }
         
      ]
  });
});
// scroll header navigation

window.addEventListener('scroll', function() {
  const header = document.querySelector('.header');
  if (window.scrollY > 80) {
      header.classList.add('shadow');
  } else {
      header.classList.remove('shadow');
  }
});
