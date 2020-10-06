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
define( 'DB_NAME', 'dbwebsites' );

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
define( 'AUTH_KEY',         'U6T|v`,4pEco=evC*/ s&m1(:WV-z(A$-2b*s}JMY^g$e0.1VF{+JQH{PJ08`HH3' );
define( 'SECURE_AUTH_KEY',  ',c`<$*LX)9W+W3)Jv!ZXk%J-E<XkNi<<h!zNRx&j]G?/f=Pj=A(=LvH*Np@o!lN>' );
define( 'LOGGED_IN_KEY',    '^oaq-ZgB:m+J]jh4XJ&~@0Ix3{!x5sQ[AF$;(2C<<tVp9vuag> $Z,,orhb.sA+.' );
define( 'NONCE_KEY',        ',+E!;yZ]dM#]Go-UZf*9dyZesS,(U*bmC@/x1+=rF`|Bd@o]~Dyby-!sX>CyDFQ.' );
define( 'AUTH_SALT',        '9xb}/N&QNBD4mCPf2XG=2[gdnmA1OA*SL{b(;Ce^YcZO&+?jxTQP/V<k|[PK${X}' );
define( 'SECURE_AUTH_SALT', 'ut~ey[N%zr*<+1h}OY3p9tw 3kk@95}?1j5aB9A_Eg6/a8acT6IK^7F>H*VyNU5S' );
define( 'LOGGED_IN_SALT',   'U}Z_Tbvq4CIrvr)M|bjsPGKr?FtCTBQvcudzkC@~` |6P{.j_z=h6PbnE(8e0h^m' );
define( 'NONCE_SALT',       'r$L{7X[gf~Fa.&rD]6NG/[c:5M0T$)2l:G?_<sTFcuBl7%W_(l~y$87-,xGo0%&E' );

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
