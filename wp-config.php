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
define( 'DB_NAME', 'pulse-creative' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6gSFzo9ELA0NtEnfvDl7iNkQLrnL3lx0Z5iVNpEMRy8NLXJvkVWrKaH1nkp1IJib' );
define( 'SECURE_AUTH_KEY',  '0oNewgRg5gXN9TsGt98szrW4YN3vwtl7GLCw8HU6kwE4czPDiR79I0BoJMYwcgSr' );
define( 'LOGGED_IN_KEY',    'Tei8uF0LQnQO7WcSWzn8nlFHvMTtuzuNgBTXtBebMUYAsxaySiM5zvCeEUm8OzAp' );
define( 'NONCE_KEY',        'JxPcE2XUNsTDnEEVLehTDS0Uya7aOhCG5UMX2j9DemQQXN0QgipqaXH9ikA7u3sg' );
define( 'AUTH_SALT',        'QkqUpcmWdruOAkcBDya1chWP6Nj6dOL6BzvA8uMbI3qfdW1d7VR4XFYd0Eobl1OM' );
define( 'SECURE_AUTH_SALT', '6qoUKX0PQ4EmRTFMiugAla6aiXFjr0AoMb4hOpbdc95V09m4HXVBoP1JZGGrWSHO' );
define( 'LOGGED_IN_SALT',   'sRIbHiiyGhojej6sM5zD6xAWaG9Qtj5BBIo367mJHFOTJodo2nz3uqNENsrQiD0m' );
define( 'NONCE_SALT',       'XBpKeeO7K0HDGCrC4g7bpqr8IWJHjheH6dzSVxkJcDC91IAc8dOnduk1BYGqni9p' );

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