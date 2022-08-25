// (function() {
//   "use strict"; // Start of use strict

//   // Show the navbar when the page is scrolled up
//   var MQL = 992;
//   var vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
//   var mainNav = document.querySelector('#mainNav');

//   //primary navigation slide-in effect
//   if (mainNav && vw > MQL) {
//     var headerHeight = mainNav.offsetHeight;
//     var previousTop = window.pageYOffset;
    
//     window.addEventListener('scroll', function() {
//       var currentTop = window.pageYOffset;
//       //check if user is scrolling up
//       if (currentTop < previousTop) {
//         //if scrolling up...
//         if (currentTop > 0 && mainNav.classList.contains('is-fixed')) {
//           mainNav.classList.add('is-visible');
//         } else {
//           mainNav.classList.remove('is-visible', 'is-fixed');
//         }
//       } else if (currentTop > previousTop) {
//         //if scrolling down...
//         mainNav.classList.remove('is-visible');

//         if (currentTop > headerHeight && !mainNav.classList.contains('is-fixed')) {
//           mainNav.classList.add('is-fixed');
//         }
//       }
//       previousTop = currentTop;
//     });
//   }

// })(); // End of use strict
window.addEventListener('DOMContentLoaded', () => {
  let scrollPos = 50;
  const mainNav = document.getElementById('mainNav');
  const headerHeight = mainNav.clientHeight;
  window.addEventListener('scroll', function() {
      const currentTop = document.body.getBoundingClientRect().top * -1;
      if ( currentTop < scrollPos) {
          // Scrolling Up
          if (currentTop > 0 && mainNav.classList.contains('is-fixed')) {
              mainNav.classList.add('is-visible');
          } else {
              mainNav.classList.remove('is-visible', 'is-fixed');
          }
      } else {
          // Scrolling Down
          mainNav.classList.remove(['is-visible']);
          if (currentTop > headerHeight && !mainNav.classList.contains('is-fixed')) {
              mainNav.classList.add('is-fixed');
          }
      }
      scrollPos = currentTop;
  });
})
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end