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
define( 'DB_NAME', 'WPtest' );

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
define( 'AUTH_KEY',         ':5Q6`Ep+FYF<*f^3zWS*UEwfDW|X#>|]]<BERSiNZO9W=hy>@]3yk}a!=9PP>Df&' );
define( 'SECURE_AUTH_KEY',  ']s7[|fl*Ma(qzzd9<sK.|g9Km-#oIw}FjNU]}I/(G476v1*3;E`OC62U9Ju},!#J' );
define( 'LOGGED_IN_KEY',    '1{rWf(CxnC:;iJ#:*(_q&N~jz>Y&xpB8imn-cSXQW7%=028OOw9T{_?fpcav$uIc' );
define( 'NONCE_KEY',        'Q~FL%vlj9+wW$aO=?|`HE/0f*?Fyu(=MxFtVE)nPfpG~-6pxw|[.I+tWTN-I=t0@' );
define( 'AUTH_SALT',        'fBD-ZRA_QG~!jAY6bxEx)SlzsZ[}Eb;MC;:&ssTAA{rT+2 E7WVE05u6Pv=PR:!.' );
define( 'SECURE_AUTH_SALT', 'cthC3*N,*C.)@[|fS>(PtP%iz$<Ab(Ph_:bPs[. O>P&Y2&*iE83m~x` &x}D#k^' );
define( 'LOGGED_IN_SALT',   'nFCz<S~Ad_fCw[#:d ,X{v/Fujfag_gjL?Y@kZ$!H<3}&bHx9LkYK9^Sa IS]&/O' );
define( 'NONCE_SALT',       'uge3bax2|d)=hu1eB?{*Qd=qd$C9aK9EeTzn^?3*A:CL&I|2~s//os{a}VQbChss' );

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
define("WP_ALLOW_MULTISITE", true);


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
