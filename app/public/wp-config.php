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
define('AUTH_KEY',         'lSTrUyC6INeFsVPWN6xNevwBJChE+lwhesgZRpPa+7GBB8TL+zcO2h6kAEypnp9JvKyxbdiJMUyMdXc20WW6lg==');
define('SECURE_AUTH_KEY',  'i78c04PBmvdTCfZ+wRspCE19VLn8CEId5J9K0XWzmfPSfdf9IK5/7kMJ34p7OHTsblA4/O8weZmORHE7b1bUpw==');
define('LOGGED_IN_KEY',    '+Uzgn/pjk/Ek+u2GEvCg31X5NeVBabvh9Z4imhfT2WJwz0xkOFRqAuTK93awk2NsvZxkifMwhhRfyp/SMPZcjw==');
define('NONCE_KEY',        'DTia2lXdfHsJZwpOrZx/Vwjrypw+MaliJbrTc7HaVj6kdtNvAe7QDfYexIfhfSJ674Uolzy1Rd9a6pBWMosf9A==');
define('AUTH_SALT',        '40C788r2RUSswKPI8mkhN9ognno034+zGSoAzr81U2INFmRQdez5BM9l2mSCPPsGcR8n2yi3qbpyh/gv3Ysfww==');
define('SECURE_AUTH_SALT', 'bKa2U4vAggZJS6Sx4ruKAXp2UsltqGXF3gkMMJF+f3+w6ySvRom/2b1K+unLrCemCpXkIJbqr/npRCnF64dKeA==');
define('LOGGED_IN_SALT',   'cmbwsgomlef410gWaNfIJPX43Miwa1bQDZ8tAGZdknJkky5GE+lQqUIymT5YsoB84bO/OSN50owTrGCsEacniA==');
define('NONCE_SALT',       'Tsk0gsMSjgonZNVCAhQmopoMK8WK1VLgF0DecNQuIWDfpbtpRzXIn4z2IpIC0EebnJrr1+vHfHWL8vW3cevDrg==');

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
