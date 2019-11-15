// jQuery(document).ready(function(){
//     "use strict";
//     $('#slider-carousel').caroufredsel({
//         responsive:true,
//         width:'100%',
//         circular:true,
//         scroll: {
//             items:1,
//             duration:500,
//             pauseOnHover:true
//         },
//         auto:true,
//         items:
//         {
//             visible:{
//                 min:1,
//                 max:1
//             },
//             height:'variable'
//         },
//         pagination:{
//             container:'.sliderpager',
//             pageAnchorBuilder:false
//         }
//     });
// });


const navigationSlide = () => {
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