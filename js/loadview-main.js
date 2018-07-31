document.addEventListener("DOMContentLoaded", function() {
    var title1 = document.querySelector('.main-title1'),
        title2 = document.querySelector('.main-title2'),
        title3 = document.querySelector('.main-title3');
    var time = setTimeout(function() {
        title1.classList.remove('hides');
        title1.classList.add('float-up');
        title2.classList.remove('hides');
        title2.classList.add('float-up');
        title3.classList.remove('hides');
        title3.classList.add('float-up');
  
    }, 2000);


});