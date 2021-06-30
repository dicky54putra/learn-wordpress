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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6xrJBbHYk4YzIDp2xh9cxNJpsLAMnlA2qrEjRqUZkKNfAkjQeoZG95JSt00uPHdW' );
define( 'SECURE_AUTH_KEY',  'e0nwK1XdOHXlGxbkR1AFg47bawAhe6o0mBzsmxKENMTdge3k1S7MQ9HkAUznnpX6' );
define( 'LOGGED_IN_KEY',    '99AKIEsMR7NlvG7DztAbNlM7xbl9tcStZRStH92mgWOCB2LQgy27fj0VIb3VqjBd' );
define( 'NONCE_KEY',        'SX6CG4KhDcFnsJQP3UQQBfvK5ac6qi1bzH0U52lsIk90RZ7MR1I37FaMDjpx3Cjb' );
define( 'AUTH_SALT',        'MWiQEHfQGBwnhSK9LnQm0waGrPXWFpuvcYrWoCDaav4ycMPj9GDlwPCnLBT66xXi' );
define( 'SECURE_AUTH_SALT', 'RTyuZeOG3VIXIl5bbib7z3mJOkohCKXbj0Y47R6AEP7n30Ny2trvpbd8nu5ofNVb' );
define( 'LOGGED_IN_SALT',   'mDf4xake7N2iaEpmsuIDTVdVmAZ9sI8iND9SXi3A0MVDjtam8iGQ9eKsaZjXlrUf' );
define( 'NONCE_SALT',       'ZHjTFGeDnhT1HPH2xjrEOiqxzoHj8uWiW58LovL5FbPaeQ4EXww5wK4eXe3GbZrO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
