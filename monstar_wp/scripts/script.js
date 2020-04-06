// Monstar Template
// Scalable and Maintainable Architecture.
//
// Author:   Monstar Lab Cebu
// Website:  http://freemight.com/
// URL:      https://github.com/jackryanoracoy/monstar-template
// License:  https://github.com/jackryanoracoy/monstar-template/blob/master/LICENSE.txt


// IE support for "main"
document.createElement('main');

// Detect if user is using TAB to navigate
function handleFirstTab(e) {
  if (e.keyCode === 9) {
    document.body.classList.add('is-tab-used');
    window.removeEventListener('keydown', handleFirstTab);
  }
}
window.addEventListener('keydown', handleFirstTab);




(function($) { // jQuery Stealth Mode

// Smooth scroll
$(document).ready(function() {
  $('a[href^="#"]').on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({ scrollTop: $(hash).offset().top }, 300,
      function() { window.location.hash = hash; });
    }
  });
});

// Toggle class on click
$(document).ready(function($) {
  $('.site-menu').click(function() {
    $('.site-menu').stop().toggleClass('js-active');
    $('.site-header-navigation').stop().toggleClass('js-show');
  });
});

})( jQuery ); // End - jQuery Stealth Mode
