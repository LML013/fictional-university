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
define('AUTH_KEY',         'tCs8qe+rKfkGi1Rzb0CIHcG869Ouxt8Kldin9Puygr8ldvenw6/7DFAxE6cUvvMIX6ZbAN26F9TNGyY56LCZTg==');
define('SECURE_AUTH_KEY',  'sFJRkf1uwgS7g8BK0n5Gq5/n1/dpi1tp6H5jNCJb29l76r3hHCKaAppY93VTuKh7KFK01aH0YDlJPF7FH0NVOg==');
define('LOGGED_IN_KEY',    'SZhXhWmEFGhaNICCBFZK38D/2EAbs+mkvtZmhLZb0hIYMCXyHa4QJmQKMI7dfc85t0XxWB5kah5qzzy1MIJSdQ==');
define('NONCE_KEY',        'cSNKLufGJLiIHpXPddFAr7LFvgb/ulWjYd9RAlpryIcGN8dV6l+iYpi0iBKAjWKkuersUHW3JUtJ6WVpPTz36Q==');
define('AUTH_SALT',        '1UH/K8sXh+NbUZQKZqXNu4OEd3+95ZaKmsQEs9IdV1lK+dahc0KQk8AfY7m0iM/BoaV0fPMZmcd8CFyLl3me2Q==');
define('SECURE_AUTH_SALT', 'MaJoCc2XtBTVIhVAXvftwkiJbnN/QxxvaTWE4JWjQUa+HdZqL16oUqa0Js/jKUj+kJeNK8u6hEdVsbNHE7BJzg==');
define('LOGGED_IN_SALT',   'Fx4Xbat+p9vAw1+hT964v5WJxia5u56abAv3SuXYIok7LpPijeJgOTUl3cDFhB8nimc3oXf96334nT1q/5uDWg==');
define('NONCE_SALT',       '1ARD3DnZKURGEWb8WkQe/qeXzhlyof9i1WWL+UYiXYZaKmvJaA84f4POJd1KhWEYl3RWk2EAIUzCnLqNITCXTA==');

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
