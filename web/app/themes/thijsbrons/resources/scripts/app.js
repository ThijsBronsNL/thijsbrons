import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';

/**
 * Application entrypoint
 */
domReady(async () => {
	var cursor = $(".cursor");

	$(window).mousemove(function(e) {
		cursor.css({
			top: e.clientY - cursor.height() / 2,
			left: e.clientX - cursor.width() / 2
		});
	});

	$(window)
		.mouseleave(function() {
			cursor.css({
				opacity: "0"
			});
		})
		.mouseenter(function() {
			cursor.css({
				opacity: "1"
			});
		});

	$("a")
		.mouseenter(function() {
			cursor.css({
				transform: "scale(3.2)"
			});
		})
		.mouseleave(function() {
			cursor.css({
				transform: "scale(1)"
			});
		});

	$(window)
		.mousedown(function() {
			cursor.css({
				transform: "scale(.2)"
			});
		})
		.mouseup(function() {
			cursor.css({
				transform: "scale(1)"
			});
		});
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
