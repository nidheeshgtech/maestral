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
define( 'DB_NAME',     getenv('DB_NAME')     ?: 'defence_central' );
define( 'DB_USER',     getenv('DB_USER')     ?: 'root' );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') ?: 'root' );
define( 'DB_HOST',     getenv('DB_HOST')     ?: '127.0.0.1:8889' );

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
define( 'AUTH_KEY',          'g1Kte%-7W2hNuBjf.|VSMe.jaaTOFuMeJ|H}k0 cJ;Zu@_>nu!bKXm~?n_8IqSHW' );
define( 'SECURE_AUTH_KEY',   '.!6yb0=JT;H[0JNa&}9=fO4,G;a/r5.qUc[fq/gqC]J+%ori6h$H@5{=3s)X7ejQ' );
define( 'LOGGED_IN_KEY',     '5@5dtGqHFU(DR#~/rMFTkC n-BuFGj%WR :2bBNy:AcBoNk*cAJ/r/$_ErS [spL' );
define( 'NONCE_KEY',         'i9y_.Dl]O92B<Ic_Mwve-H0;yx9E%;kd4SaYYI{hk)3r60:~`#JnDTWp/vOHetZr' );
define( 'AUTH_SALT',         'Zi]s>788Y^NL#J{-OcgG1,!3aggd}:u*hMnz76m^7C1UX]@Z]2[H=g6Y7?5J=[P`' );
define( 'SECURE_AUTH_SALT',  'yJWBED379d[.@4uJIsE+0c`,)(_8t&W?SXczCG;H07T%m@%1$TgK  `uR6}w2tO<' );
define( 'LOGGED_IN_SALT',    'oDkdy8#k%t[xGU[B8N/L/d3q1M41<gR<(X2oxgl7zgvebGWo7[KyDAaYrAwp)HAl' );
define( 'NONCE_SALT',        '%F(qHuD)W 4X5{a9%fs{Y 6)a[6jc(rw9*t>fFYOY+P89hoamin^O9B >MMvagm1' );
define( 'WP_CACHE_KEY_SALT', 'BVCaUFE{CO4pO178V`IJ_hfv>SYl*Zi8yD%+#8hp.{GC*v}2)20Xw>w]a3(H-:%Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

if ( getenv('VERCEL_URL') ) {
    $vercel_url = 'https://' . getenv('VERCEL_URL');
    define( 'WP_HOME',    getenv('WP_HOME')    ?: $vercel_url );
    define( 'WP_SITEURL', getenv('WP_SITEURL') ?: $vercel_url );
}



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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
