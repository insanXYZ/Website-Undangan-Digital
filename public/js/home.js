document.addEventListener('DOMContentLoaded' , function(){
  AOS.init();

  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const wrapperList = document.querySelector('.wrapperListMenu');
  const listMenu = document.querySelectorAll('.listMenu');

  hamburgerMenu.addEventListener('click', function(){
    hamburgerMenu.classList.toggle('opened')
    wrapperList.classList.toggle('open')
  })

  listMenu.forEach((a) => {
    a.addEventListener('click',function(){
      hamburgerMenu.classList.toggle('opened');
      wrapperList.classList.toggle('open')
    })
  });

})