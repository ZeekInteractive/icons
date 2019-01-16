<?php

namespace Zeek\Icons;

function get_svg_path( $svg, $pack = 'feather' ) {

	return sprintf( ICONS_PATH . 'assets/img/svg/%s/%s.svg',
		$pack,
		$svg
	);
}

function get_svg_url( $svg, $pack = 'feather' ) {

	return sprintf( ICONS_URL . 'assets/img/svg/%s/%s.svg',
		$pack,
		$svg
	);
}
