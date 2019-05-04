/*!
 * nah-wp-theme v0.0.1
 * The official Wordpress theme for NAH
 * (c) 2019 Adam Hite
 * MIT License
 * https://github.com/adam-hite/nahardcourt.git
 */

document.addEventListener('click', (function (event) {
	if (!event.target.matches('#click-me')) return;
	alert('You clicked me!');
}), false);