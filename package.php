<?php

namespace Zeek\Icons;

use function A7\autoload;

define( 'ICONS_VERSION', '1.0.0' );
define( 'ICONS_URL', plugin_dir_url( __FILE__ ) );
define( 'ICONS_PATH', dirname( __FILE__ ) . '/' );
define( 'ICONS_TEMPLATES', FRONTEND_ACCOUNT_PATH . 'templates/' );

require_once __DIR__ . '/src/main.php';
