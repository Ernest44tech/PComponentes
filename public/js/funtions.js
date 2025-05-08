function toggleFilter() {
  document.querySelector(".filter").classList.toggle("active");
}

function toggleNav() {
  document.querySelector(".content-nav").classList.toggle("active");
}

var input = document.querySelector("#telefono");
window.intlTelInput(input, {
    initialCountry: "mx",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});

var input = document.querySelector("#telefono");
window.intlTelInput(input, {
    initialCountry: "mx",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".faq-item").forEach(item => {
      item.addEventListener("click", function() {
          this.classList.toggle("active");
      });
  });
});
