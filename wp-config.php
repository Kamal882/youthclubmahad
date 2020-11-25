<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if (strstr($_SERVER['SERVER_NAME'],'local')) {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}else {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'insideco_youthClubMahad' );

	/** MySQL database username */
	define( 'DB_USER', 'insideco_youthClubMahad' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'youthclub@1234' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BtAaAOHT7N+0gbCxb2M7sBJdVQy/aR6jyvwCXvtDBpKVR/2NnWOoBOxhHyl14GXtTKzcGSNzSb5ArW1CEan7mA==');
define('SECURE_AUTH_KEY',  '8/eOxqHMmABb++wlGv/Ff186v8oq09eyEjkwcVlCEoVEh92Mv698PilFlHt611K17Z6MT+Zkb3uvJafPsGLHpw==');
define('LOGGED_IN_KEY',    'NSUu0NGIXLruRyQMqi9pol3fjFc2tb+LzrrQfKllBbQyNAse6M0tPLt35xbrJmaAXpGByWfl5l4J+8YCkOOWzw==');
define('NONCE_KEY',        'lT2SUJXX6qTykrBBk1vu8et+k5ZmkHQtiFr7uOPDLZMlW/R5A6ExG3twYW5Ws2uqNVA7/z9gk9sFEjtWwJ5E1g==');
define('AUTH_SALT',        'LCfd7ROLeC2bsVwNxCSMELQE2iGbeMUl4Ry6/xC4t7LBF34TD+aUBeuP4wCW65CylEwB+pGkoc79XYIYAg1iaQ==');
define('SECURE_AUTH_SALT', 'K4p3Knmqcq6+Z151nKKTE0k/N55Wf4rUW4yPxdy02+J2jEsjcL7FaaW4zi9mX+Q8ilyoje+tLDjt8GTs2AHRKA==');
define('LOGGED_IN_SALT',   'jySK0//wooRAGKMN7EGvoUA/QwZDqPTxPeljfDEfTzC6W0SecUZHQfXkPSpl1xLjeGTaM63PlMEGNmUtqcU7OQ==');
define('NONCE_SALT',       'KoqELkBLXu1bD35eRqHiKDgMTPyg8O3lzoJX9WyXB02/KuLcWaATzGoJSWnYkgbeA8llHzd8vVzFUWDzNY9/UQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
