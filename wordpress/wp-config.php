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
define( 'DB_NAME', 'gamer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'm&|*9;aET-e=EN,TI]|dnx:}Mcb#8NiY1AWw9;VD%&A&gDT*5N+mG.@8d_4<h^)5' );
define( 'SECURE_AUTH_KEY',  'pB9-=<t!!s!Tk1tGl/fT3n]`~/]q-|Dm,[9X=o~AAU+Kjip?xCvspR8Nb2&o[/1B' );
define( 'LOGGED_IN_KEY',    '$G-=5./q$E1b3!{|DvJ/H%t{&E&`<Uu5~3&sl4:MuP/Y=|Z*z4CB7^QR(W/_IG/s' );
define( 'NONCE_KEY',        'r7_8dL|U1E 6fLPA)UiA<;[vf@mw43&RNOd4cuLjocVd,Eae<USlcX+jX*pz97CX' );
define( 'AUTH_SALT',        '>=I]F?,lw:?;Y4y>|tI03F)-3e:.al01yF?GCEhY/9Q?LkHWpUtUB4WF_}mp!%VY' );
define( 'SECURE_AUTH_SALT', 'D}E,5j,r)oz5x_fef;~J!miYZNmj*~ih|Z@Be#, ^w|[v]rmVsE5iCJN3Jb.b|DV' );
define( 'LOGGED_IN_SALT',   ',_SN-GK(yX1A7.svj;?v~IN)Lpy0qq3xs;OF$6W v&Uml3;b Pw3l?.~FeSc{z23' );
define( 'NONCE_SALT',       'hKj={3x.rpA`Y/^a@#}Qpv0J%g3+S(h67_p!pgpy`}e:z|lv(O51b7wWCABJ9^M!' );

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
define('FS_METHOD','direct');
