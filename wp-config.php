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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '#NG?SD72u!nUCpl76^.kmcY,(Q%~WlcHHnRn,^9n;&83h?d1F*hWU.FS_S8> :sQ' );
define( 'SECURE_AUTH_KEY',  'h={V?2>q^h:ieJC2e<{+H4-ikpw|$ky+2`Rc(pbcw,@mnz%kA;Jgp$ ~hr%+eini' );
define( 'LOGGED_IN_KEY',    'OlK;t/z3rn9!TQ3n@ad!Ma;c]It/+(T,L)Ah^+sQ_ H. +JRXVyo<o:zUe]QOc|Y' );
define( 'NONCE_KEY',        '5zJ5+x @/xgG~OCv!T|kpS+b|30V+Du5QP~4@W8Rywg:T?9#0gt1[p,h>IG*,{1M' );
define( 'AUTH_SALT',        'Rl}jCt}U3df$Be(KX,jN?7$C0Lb)dpu+~rR*bU. 7ECS}?Ez]JsMO?0b-+EZ~mGp' );
define( 'SECURE_AUTH_SALT', 'ITc+Ea*X9}GP$4e;M/V[OV=AW:5rW-wNil|my`B$;LTL&0GVSd:Ie|[:z>nB1{]/' );
define( 'LOGGED_IN_SALT',   'w)QV*.D(sV73W)$l!i8E(KFR^uih}eQ6m(gwdmk!>;RA=F80W(]?mFEZGwM?xDMt' );
define( 'NONCE_SALT',       '=3PzQM{i`WnCiAHmZ6r77/+]Q2ATJ<yDu@}~BQTxF(C8;_62&_/]K)$vi6YHW1Zx' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
