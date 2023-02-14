const form = document.getElementById('reservation-form');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const dateInput = document.getElementById('date');
        const timeInput = document.getElementById('time');
        const partySizeInput = document.getElementById('party-size');
        
        form.addEventListener('submit', (event) => {
          event.preventDefault();
          
          const name = nameInput.value;
          const email = emailInput.value;
          const phone = phoneInput.value;
          const date = dateInput.value;
          const time = timeInput.value;
          const partySize = partySizeInput.value;
          
          let hasErrors = false;
          
          if (!name) {
            document.getElementById('name-error').textContent = 'Please enter your name';
            hasErrors = true;
          } else {
            document.getElementById('name-error').textContent = '';
          }
          
          if (!email) {
            document.getElementById('email-error').textContent = 'Please enter your email';
            hasErrors = true;
          } else {
            document.getElementById('email-error').textContent = '';
          }
          
          if (!phone) {
            document.getElementById('phone-error').textContent = 'Please enter your phone';
            hasErrors = true;
          } else {
            document.getElementById('phone-error')}
          });


          /*const menuIcon = document.getElementById('menu-icon');
          const navbar = document.querySelector('.navbar');
  
          menuIcon.addEventListener('click', () => {
              navMenu.classList.toggle('navbar-active');
          });
         

          var swiper = new Swiper(".slide-content",{
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swipper-button-next",
              prevEl: ".swipper-button-prev",
            },
          }); */
         