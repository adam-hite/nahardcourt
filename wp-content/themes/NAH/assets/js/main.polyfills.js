/*!
 * nah-wp-theme v0.0.1
 * The official Wordpress theme for NAH
 * (c) 2019 Adam Hite
 * MIT License
 * https://github.com/adam-hite/nahardcourt.git
 */

/**
 * Element.matches() polyfill (simple version)
 * https://developer.mozilla.org/en-US/docs/Web/API/Element/matches#Polyfill
 */
if (!Element.prototype.matches) {
	Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
}
document.addEventListener('click', (function (event) {
	if (!event.target.matches('#click-me')) return;
	alert('You clicked me!');
}), false);