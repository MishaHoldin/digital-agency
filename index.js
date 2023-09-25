document.addEventListener('DOMContentLoaded', function() {
  var accordionHeaders = document.getElementsByClassName('accordion-header');

  Array.from(accordionHeaders).forEach(function(header) {
    header.addEventListener('click', function() {
      var content = this.nextElementSibling;
      content.classList.toggle('show');
    });
  });
});

var imageContainers = document.querySelectorAll('.img-hover');

imageContainers.forEach(function(container) {
  container.addEventListener('mouseenter', function() {
    this.querySelector('.overlay').style.opacity = '1';
    this.querySelector('.overlay a').style.opacity = '1';
  });

  container.addEventListener('mouseleave', function() {
    this.querySelector('.overlay').style.opacity = '0';
    this.querySelector('.overlay a').style.opacity = '0';
  });
});

document.addEventListener('DOMContentLoaded', function() {
  var headerBurger = document.querySelector('.header__burger');
  var headerMenu = document.querySelector('.header__menu');
  var body = document.querySelector('body');
  
  headerBurger.addEventListener('click', function(event) {
    headerBurger.classList.toggle('active');
    headerMenu.classList.toggle('active');
    body.classList.toggle('lock');
  });
});

// -----------------------------------------------popup modal 
        // Функція для відкриття модального вікна
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Функція для закриття модального вікна
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }



