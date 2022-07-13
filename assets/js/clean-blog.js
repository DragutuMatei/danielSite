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
  let scrollPos = 0;
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
//https://stackoverflow.com/questions/44467377/bootstrap-4-multilevel-dropdown-inside-navigation
$('.dropdown-submenu > a').on("click", function(e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
});

$('.dropdown').on("hidden.bs.dropdown", function() {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
});