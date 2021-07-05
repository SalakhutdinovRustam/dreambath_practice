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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         's6IlEiqz467lMnBXsEXEdChNY/Ztt2NkpsxSd6N7NlPQFyrvQRNQ0+wxwjzKutxPPJVzAbqHPjGXebJOWlbhXA==');
define('SECURE_AUTH_KEY',  'wwf7nICLeLs55NIi5gzbAP7wEHXWKaHiheDR66EVebCgIEQYuS6bYCB7I5JrjUMry6gDodcVvIHm1/Kx59CefA==');
define('LOGGED_IN_KEY',    '4SLRUMD8HweYR8erkk2a2H4H7O3YfdGUiGRepJ3JJ8N26nViP2F/+qTDUAy8m1SkKpmn9Kdu2Hj38FF7PbxcFw==');
define('NONCE_KEY',        'Ap89Ri6OqdS4seeWHXrcywoBYpDSf0LyJhnebbsmRK4cg98OOIf46jpSbOY73w/clmIcvYNcHFCHYYBSrVssDQ==');
define('AUTH_SALT',        'ujktOCn4HS6/BOHIKbnDy/2GXjGNIExK3q1oRSJJ+8isEvcMJi5Yqh7XahgGZXElbtV4oRzRBpmAGEiwNf6vnA==');
define('SECURE_AUTH_SALT', 'vMHf37zzcmb1txNe0k19akZGF6sjHKLh7wwcBUEdAQSn2PYHlaEz8ieSnqCaBCWxxo6jBaA3my0j60s/UlkF0w==');
define('LOGGED_IN_SALT',   'KAbGUYV4HucS1ut0ghOmTk/2b/RY1ythcH3/1FwaF5DBHsGcqbjK01dULUcXQG9o6wjauik5+9NfCX7ReN68/A==');
define('NONCE_SALT',       '389W82ECtfmtnDoZvgPh236RJPi5lw7r25W0IVt0ZBRtgyT8KHixSVPK58KIxEAZehly+Cxan6A3Rd0TRZwDww==');

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
