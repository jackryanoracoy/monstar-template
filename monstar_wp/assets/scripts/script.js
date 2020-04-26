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

// Immersive
$(document).ready(function($) {
  var lastScroll = 0;
    $(window).scroll(function() {
    setTimeout(function() {
      var scroll = $(window).scrollTop();
      if (scroll > lastScroll + 10) {
        $(".site-header").removeClass("js-show");
      } else if (scroll < lastScroll - 10) {
        $(".site-header").addClass("js-show");
      }

      if (scroll >= 100) {
        $(".site-header").addClass("js-active");
      } else {
        $(".site-header").removeClass("js-active");
      } lastScroll = scroll;
    }, 300);
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
