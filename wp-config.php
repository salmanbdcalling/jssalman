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
define( 'DB_NAME', 'salman_personal' );

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
define( 'AUTH_KEY',         'P~|x>YrvayyIO3$SD/RP2#*c=4o)@iJ:x^r!3gc^!A)W-oKZi@EH);kE|CxP:XQR' );
define( 'SECURE_AUTH_KEY',  'jb4rt>+LEOAa$pOOCjJ%X9~R+VOCD6Vz16`+*gU<?qSasK{d_0}{@|WCh?xL`J/.' );
define( 'LOGGED_IN_KEY',    '(CQC(GQ$w|cj._P3}8#Hdy#j8;;1*BxB!6SPpN/pT-U2DGA`R4?>LC+2Oc;pL;&)' );
define( 'NONCE_KEY',        'nbV?)#XE/$7eb,$CqW@xc054+UmzJyC5$DN12s9Fu&1BnZ_>} kFt(oQ75k)*S4d' );
define( 'AUTH_SALT',        'A!lk=lA6sb9`#lSvN2Ot- Wx^770*Omkt}zDhuS9@`l>BhK!Nqm)wX9+Ys%/NZ|!' );
define( 'SECURE_AUTH_SALT', 'Ov^JhkgUjG,-2v<kXFYSF9bOUETSre@eq4p5A3][l,B{goVKFUefD <{&>n@z:I^' );
define( 'LOGGED_IN_SALT',   '1!}Xl51,uge&I:dFR26,RDR+%^Akne6fiL+ie``Vb=(~~f{s?y@m=R.34+a%( pa' );
define( 'NONCE_SALT',       ',??sGDkQLT8C[2_#TW?ID4S_j61>4eJ5?>*nh*lP(<>c(I+eY8~Po;RW>p>boTTQ' );

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
