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
define( 'DB_NAME', 'akshara' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' pW:)Oh!:X&;4M4*u%L$-?(yko0l+P6&#f(7r#[ACwMy.wS*{rZ5.YEKRuZjI~sP' );
define( 'SECURE_AUTH_KEY',  '][*SGgRN)rV]Ts9E+aEMNp!m`W3f7IEnMv%qrI{p?}ux4nxG]n%uG.=)H2DcwMUz' );
define( 'LOGGED_IN_KEY',    'E|1eHSQ#jI>j~a}eEhxl,[,g:{e*di pJAC0+wnzyI{/>7?/lkAy<O+DwBy,%-k&' );
define( 'NONCE_KEY',        ']avW$8`|%WW[fH1{bG[%~w0zW(FH-4;,yO!+G;KT<P.kAwc4omGO*=&:AL[j;ia#' );
define( 'AUTH_SALT',        'CIc?n3mh}//G20BnQ--C#40d]sx57T?.XRQyQHXf_$8cVqEK}a~r{@06$],q-= (' );
define( 'SECURE_AUTH_SALT', 'W^zr93H,yoV5=d9Wq93j@:]U)kYW(6zXs/0BP>l#()bMbSr!c.#b;.)V~Y4_[1,9' );
define( 'LOGGED_IN_SALT',   '13fo5=C*[ 6n,mmyNBNo6]wmpe8n=Hn{`=YL9[(g;-UDbt=Jx[ebP0]_IHCto@Ep' );
define( 'NONCE_SALT',       '!Q$`w}Tje3_d!yGw_&O00z}U<`F8a>OW s~PAhq!yob;q!O]7LT<}si|FqtW/4XB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ak_';

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
