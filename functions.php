<?php
/**
 * Kickoff theme setup and build
 */

namespace Beacon;

define( 'BEACON_VERSION', '2.0.3' );
define( 'BEACON_DIR', __DIR__ );
define( 'BEACON_URL', get_template_directory_uri() );

require_once __DIR__ . '/vendor/autoload.php';

\AaronHolbrook\Autoload\autoload( __DIR__ . '/includes' );