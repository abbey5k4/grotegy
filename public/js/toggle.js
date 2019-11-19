const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-link');
  const navLinks = document.querySelectorAll('.nav-link li');

  // toggle nav
  burger.addEventListener('click', ()=>{
      nav.classList.toggle('nav-active');
      // animate nav
      navLinks.forEach((link, index)=>{
          if(link.style.animation){
              link.style.animation = '';
          }
          else{
              link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
          }
      });
      // burger animate
      burger.classList.toggle('toggle');
  });

  
}
navSlide(); 



   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    // document.getElementById('moar').onclick = function() {
    //   var section = document.createElement('section');
    //   section.className = 'section--purple wow fadeInDown';
    //   this.parentNode.insertBefore(section, this);
    // };