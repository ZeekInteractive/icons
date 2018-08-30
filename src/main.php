<?php

namespace Zeek\Icons;

function get_svg_path( $svg, $pack = 'feather' ) {

	return sprintf( ICONS_PATH . 'assets/img/svg/%s/%s.svg',
		$pack,
		$svg
	);
}
