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
define('AUTH_KEY',         'S964V1enr0ZRbq7xGxEsk5iTbrKIfeej4EyO2dlnE2e6FCLyKM4G/qGOv5oSfMKJgGV/tlD7Q8KKAL395V3o3Q==');
define('SECURE_AUTH_KEY',  'ReKuWga4DtCGeE5PBv502L/edYTxkjIwbvkhUny9lvSAg245UM2DuuPfon/4DJurnyBnTBdlN6GzdUzvl9GXRA==');
define('LOGGED_IN_KEY',    'QnKou9sJAZejCjXUfakbhBcWe/1Lap9AUqzmw7JYEQatsl7ZuS0UUTFmas2giupTqW0+g5dOXWizrfqsnQRm4g==');
define('NONCE_KEY',        'hDrUiif8p6qfK7OH2j7Xu8yvpPnjC/3IPBjRj3LjQLZJF2LU1Tm/oOYr8qECoEI7rGI7hfsGoOLxLB3myJ1yxQ==');
define('AUTH_SALT',        'H0PrwuKdQOomkWNv9df8V/2b4ww6XW5ojTGogSs1jeaAWxMiy+TQ5H64I/2nE7s83s+ImCG1xdpnKVYjrIBvVg==');
define('SECURE_AUTH_SALT', 'wp0OcH5oFKY7ozcOVDjcDunHEwnNIOUccvBXFxkIMipYqgfwYtx/mKD5N8Defv72767hArhKah724GEqwdlulA==');
define('LOGGED_IN_SALT',   'tmU5tBis9pcL222D367IQp+v/Ml8xMCImB/y2ScyOvono2Mb9IahTYomKQ1IYk/lHYTy8uii2FJo+6v3zIcxBQ==');
define('NONCE_SALT',       'BW58NNalAESo7cb1u8UukqV8jl4InvCax10+Z+9RbssmHD/BBnXHRCVDRyXnL8lKNSrrkuDQ9YZoy6fMlCP70A==');

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
