$(document).ready(function() {
    var swiper = new Swiper('.review-slider', {
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
  document.getElementById('location-link').addEventListener('click', function(e) {
    e.preventDefault();
  

    var iframe = document.createElement('iframe');
    iframe.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4427.904171680673!2d38.75742777548034!3d9.020308989124002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85930b17ec2f%3A0x8a433f2230326db!2sSheraton%20Addis%2C%20a%20Luxury%20Collection%20Hotel%2C%20Addis%20Ababa!5e1!3m2!1sen!2set!4v1714905442181!5m2!1sen!2set';
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.style.border = '0';
  
    // Create a new window/tab and append the iframe to it
    var newWindow = window.open();
    newWindow.document.body.appendChild(iframe);
  });
  document.getElementById('location-link1').addEventListener('click', function(e) {
    e.preventDefault();
  
    // Create the iframe element
    var iframe = document.createElement('iframe');
    iframe.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4469.032707389564!2d38.7602404!3d9.013690900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85bf02f0f01f%3A0x139feaf0e87089eb!2sGhion%20Hotel%20%7C%20Stadium!5e1!3m2!1sen!2set!4v1714914924013!5m2!1sen!2set';
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.style.border = '0';
  
    // Create a new window/tab and append the iframe to it
    var newWindow = window.open();
    newWindow.document.body.appendChild(iframe);
  });
  document.getElementById('location-link2').addEventListener('click', function(e) {
    e.preventDefault();
  
    // Create the iframe element
    var iframe = document.createElement('iframe');
    iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4481.662530122903!2d38.72048469999999!3d7.928028600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17b49c8bf9ed789f%3A0xae950c7efbc7bf40!2sHaile%20Resort%20Ziway%20Batu!5e1!3m2!1sen!2set!4v1714915982360!5m2!1sen!2set" 
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.style.border = '0';
  
    // Create a new window/tab and append the iframe to it
    var newWindow = window.open();
    newWindow.document.body.appendChild(iframe);
  });

  document.getElementById('location-link3').addEventListener('click', function(e) {
    e.preventDefault();
  
    // Create the iframe element
    var iframe = document.createElement('iframe');
    iframe.src =  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4490.704874117879!2d38.4585013!3d7.0495179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17b14509681e815d%3A0x55390209c54028ed!2z4YiM4YuKIOGIquGLnuGIreGJtSAvIExld2kgUmVzb3J0!5e1!3m2!1sen!2set!4v1714916218355!5m2!1sen!2set" 
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.style.border = '0';
  
    // Create a new window/tab and append the iframe to it
    var newWindow = window.open();
    newWindow.document.body.appendChild(iframe);
  });

  document.getElementById('location-link4').addEventListener('click', function(e) {
    e.preventDefault();
  
    // Create the iframe element
    var iframe = document.createElement('iframe');
    iframe.src =  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1147642.2266303226!2d38.8624532!3d7.80638795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b2109db10e38f%3A0x2be7652223e5f280!2sHaile%20Resort%20-%20Adama!5e1!3m2!1sen!2set!4v1714916580061!5m2!1sen!2set"
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.style.border = '0';
  
    // Create a new window/tab and append the iframe to it
    var newWindow = window.open();
    newWindow.document.body.appendChild(iframe);
  });

  document.getElementById('location-link5').addEventListener('click', function(e) {
    e.preventDefault();
  
    // Create the iframe element
    var iframe = document.createElement('iframe');
    iframe.src =  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4471.792248162032!2d38.9976025!3d8.787855099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b0ca86f7a72e3%3A0x3a5763ec649be02e!2z4YiK4Yiz4YmFIOGIquGLnuGIreGJtSB8IExpZXNhayBSZXNvcnQ!5e1!3m2!1sen!2set!4v1714916784661!5m2!1sen!2set"
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.style.border = '0';
  
    // Create a new window/tab and append the iframe to it
    var newWindow = window.open();
    newWindow.document.body.appendChild(iframe);
  });
  