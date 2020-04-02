// Sunshine
// Scalable and Maintainable Architecture.
//
// Author:   Jack Ryan Oracoy
// Website:  https://jackryanoracoy.github.io
// Email:    jackryanoracoy@gmail.com
// URL:      https://github.com/jackryanoracoy/sunshine
// License:  https://github.com/jackryanoracoy/sunshine/blob/master/LICENSE.txt


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
