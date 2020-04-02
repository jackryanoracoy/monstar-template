// Moonshine
// Scalable and Maintainable Architecture.
//
// Author:   Jack Ryan Oracoy
// Website:  https://jackryanoracoy.github.io
// Email:    jackryanoracoy@gmail.com
// URL:      https://github.com/jackryanoracoy/moonshine
// License:  https://github.com/jackryanoracoy/moonshine/blob/master/LICENSE.txt


// IE support for "main"
document.createElement('main');

// Add target="_blank" rel="noreferrer noopener"
window.onload = function(){
  var anchors = document.getElementsByTagName('a');
  for (var i=0; i<anchors.length; i++){
    if (anchors[i].hostname != window.location.hostname) {
      anchors[i].setAttribute('rel', 'noreferrer noopener');
    }
  }
}

// Detect if user is using TAB to navigate
function handleFirstTab(e) {
  if (e.keyCode === 9) {
    document.body.classList.add('tab-used');
    window.removeEventListener('keydown', handleFirstTab);
  }
}
window.addEventListener('keydown', handleFirstTab);



// Object-Fit
$(function () { objectFitImages() });

// Immersive
$(document).ready(function($) {
  var lastScroll = 0;
    $(window).scroll(function() {
    setTimeout(function() {
      var scroll = $(window).scrollTop();
      if (scroll > lastScroll + 10) {
        $(".site-header").removeClass("show");
      } else if (scroll < lastScroll - 10) {
        $(".site-header").addClass("show");
      }

      if (scroll >= 100) {
        $(".site-header").addClass("active");
      } else {
        $(".site-header").removeClass("active");
      } lastScroll = scroll;
    }, 300);
  });
});

// Smooth scroll
$(document).ready(function() {
  $("a").on('click', function(event) {
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
    $('.site-menu').stop().toggleClass('active');
    $('.site-header').stop().toggleClass('menu-opened');
    $('.site-header-navigation').stop().toggleClass('show');
  });
});

// Parallax
$('.parallax-image').each(function() {
  var img = $(this);
  var imgParent = $(this).parent();
  function parallaxImg () {
    var speed = img.data('speed');
    var imgY = imgParent.offset().top;
    var winY = $(this).scrollTop();
    var winH = $(this).height();
    var parentH = imgParent.innerHeight();


    // The next pixel to show on screen
    var winBottom = winY + winH;

    // If block is shown on screen
    if (winBottom > imgY && winY < imgY + parentH) {
      // Number of pixels shown after block appear
      var imgBottom = ((winBottom - imgY) * speed);
      // Max number of pixels until block disappear
      var imgTop = winH + parentH;
      // Porcentage between start showing until disappearing
      var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
    }
    img.css({
      top: imgPercent + '%',
      transform: 'translate(-50%, -' + imgPercent + '%)'
    });
  }

  $(document).on({
    scroll: function () {
      parallaxImg();
    }, ready: function () {
      parallaxImg();
    }
  });
});

// Tabs
$(document).ready(function() {

	$('.tab-link li').click(function() {
		var tab_id = $(this).attr('data-tab');

		$('.tab-link li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});
