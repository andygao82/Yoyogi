<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'cvnzB50L5l3wQifFgk1m09OGf5IRPLmk+NQ1Ocjn+oPK2Yshjb3BrQyUwVCF76XfRXS0oAX8zUg4VVW3+/milQ==');
define('SECURE_AUTH_KEY',  '2mRah9vvVxy/D6pMEVUuquOcJbunRILulbBLv6Idy5mY9IrRTyeJPB4xJdtW1dVA9dCdNXWuvAyTXA/81Ht6TQ==');
define('LOGGED_IN_KEY',    'Vz2V2YFuemIBlkQUmuu5lEspfSqFCrYZgi5KxCasTTr0xwjFwUMtQcRvi01NYQyfWpGRCgyLLwOCiBzt1BkX1g==');
define('NONCE_KEY',        'JKe20X4CtH4WXPTsihh1oHV+7rD4c4FTQzWvt/QGCeMiHI5AVyM6J55LRC2GxVkZtUyNitz1ojDYu1aeWTEyww==');
define('AUTH_SALT',        'CQh0aRy5nHnMXExjvdor0IuEW//RpRaznX1Hm8ilMDlE6TixjkJz+QTPTfvSZrK9XlTuC5Ogog6Sz4wnxuzV9A==');
define('SECURE_AUTH_SALT', 'em5RAwMvrzbtltoBevynxewfdWaMSk6nSrtg3nYYLdv1MRwHhsWd4up3LmU09KdfB3skZ0BkhZ4RkAHJueyeMg==');
define('LOGGED_IN_SALT',   'pnVn6CcQ8jJ7mzOFj9ljyNQm3yOOSh+nqiLYUEjou9/ixjnUzLvzfF9PIpFhzUT1FOgFPaUkVp+oxgV6letUUA==');
define('NONCE_SALT',       'Us7/CcpfDzCWTo/gEhGBmkaa2zu/15urcmokQMXqqN4750EDLORzrVlLYjIsPGQIwMuDFNgt/BQk5kakOAQMQQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
