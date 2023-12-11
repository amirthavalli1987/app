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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'app_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'opNTFm..@;!W>eNC>/>N[S#tf,}tZoZ3[q3!?;]`EE72RWk!}Vwkl:4X(qUZxMZ-' );
define( 'SECURE_AUTH_KEY',  'RL8qZpM;[n65!fW=jS1OgRjdfBn!!mRCFgmZVmo#}Xj7=iS}go?z[oi=0phKlgiy' );
define( 'LOGGED_IN_KEY',    '!*3B14qnIP7x,3J4X3^;e!,H(dJD^[,k0T$B[ap4ooE98NxPu:i&:d%4$}[bl!p=' );
define( 'NONCE_KEY',        'q{^3Z4,Ov=IuprUE lJ~zy=p9?Z/})N?mx<-xP+:Z.8#Qgt)xKe(L//aRFq`R5,D' );
define( 'AUTH_SALT',        '$$g[bE4n?iT[,_BYor(`meq_5xz~`-S0Q%m3s,=5;%S8$+FN`JCrL|BX =W{b4`]' );
define( 'SECURE_AUTH_SALT', 'Dg$J/. K F_hq`}srV4dd47}*?)wp=Eqwm/_Ypl=uQzf%qT  +TBUCx)vjm?b_t ' );
define( 'LOGGED_IN_SALT',   'd[(D~*mra6^?gPhIM@w%S/t}p[_U^l-{OActW{E-n im_`<=+}{h%T$WPb<# Zka' );
define( 'NONCE_SALT',       '@w!DyK}uCb_ft1ANuN|PihoxJ.6cDF61Pk(Fn1EfG2Sw=;AL?hDUS/b I.vul7MA' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
