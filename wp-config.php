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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'ff5($3M;f+!pUNf@p|DbB!o[g}xo[<zde.tU_J[t.?z9Ow*A8=iCEw}}$@Tr[kC?' );
define( 'SECURE_AUTH_KEY',  'aq$vBz1%G|#,4`1I_Ry[?}.m2s`,!c:bW6oNKV79@a|bg>>8<)&pd#$0#<*H$r-d' );
define( 'LOGGED_IN_KEY',    '>CWs>sq=J(N_1iuS,;n&!VdW+[UDer3]hF(ksS(3])({+Fst@!<$ex!HN pjLVwS' );
define( 'NONCE_KEY',        '~1Q2`+4(f[bl5$Lau]Rhk~LBzyWvjDhjlOt XG{6!`{z7MM]yg_.]JlXDF#}^Kf2' );
define( 'AUTH_SALT',        'Z*!N=0$jVE0sl7d A.M>wb#yXzj&s*3@Dk25dX2MeF7(0NtiSU!bs@2D_,-p&h_8' );
define( 'SECURE_AUTH_SALT', 'st>s-I3`eYc#omI+X+#t}Jw3*l)8fUP}x.up !y%,k,#{tU8M*3fq#bv6*7TqX^-' );
define( 'LOGGED_IN_SALT',   'x=zGdl;YpuT*;zK<facoq0.|$s3]PUT]Igh|zYR^/eC#3v~&+i%RJT6D!~)^b=2#' );
define( 'NONCE_SALT',       '0}&V82|/`%0AIZJ%_a&?KXPIf&[xY->o{J4a~|_dF=pY6VffxRTp34=v]#Vym`Gh' );

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
