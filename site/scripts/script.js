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

// Add rel="noreferrer noopener"
window.onload = function(){
  var anchors = document.getElementsByTagName('a');
  for (var i=0; i<anchors.length; i++){
    if (anchors[i].hostname != window.location.hostname) {
      anchors[i].setAttribute('rel', 'noreferrer noopener');
    }
  }
}


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
    $('.site-header').stop().toggleClass('js-menu-opened');
    $('.site-header-navigation').stop().toggleClass('js-show');
  });
});
