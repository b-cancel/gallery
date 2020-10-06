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
define( 'DB_NAME', 'gallery_db' );

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
define( 'AUTH_KEY',         'DwX-zD@.H(FjUO.}batpF<yESNXSH0C:#g-az]D`$.o1GIa_w8kKcv{iGhE>K(jv' );
define( 'SECURE_AUTH_KEY',  'ay:>XGC>%ScKqb_3,JWvy/j]amohrl:KL5e(*V44|U/E30Z=MKDEwC*XeO1v7!^+' );
define( 'LOGGED_IN_KEY',    'S?K#L9/]z}pRVtZ&sEx^?f_-6?*BNHlKP|l,i}<<6GLrVb):1W7pe:+9EKLiy*p&' );
define( 'NONCE_KEY',        'f<5 LQkL-kZa`cOrwXe7`#]7-;v12#gVoqrYMnFB?M08<M;+}egO.^_SP?229EE0' );
define( 'AUTH_SALT',        '3;JvSMXIGsR 61C~MG?$sn<_%}v&vaB4tT2EtV^&TXKtb=vk2lSc@nS`.PrqHiRI' );
define( 'SECURE_AUTH_SALT', 'K2N0)ndWzjWz1o3$e&;sT2pAQy}*WRH]BlQB[5mU3aj%tBFMgyGS49rmrn:m5;dH' );
define( 'LOGGED_IN_SALT',   '^)qEHu8Bt9n*V(YSn(G_/!:d<|-Qb[T])sc1s4ghgj~^4kAfq_PNEWP_jZ3P!>xr' );
define( 'NONCE_SALT',       's+oC.y>nFAz<JI-j3>=0UJy5q3f$/ZwS3LmRO#b$N9np*Ekg-N,_u`OCem*i3)E&' );

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
