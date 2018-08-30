<?php

namespace Zeek\Icons;

function get_svg_path( string $svg, $pack = 'feather' ) : string {

	return sprintf( ICONS_PATH . 'assets/img/svg/%s/%s.svg',
		$pack,
		$svg
	);
}