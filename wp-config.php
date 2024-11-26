<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_aKdVo' );

/** Database username */
define( 'DB_USER', 'u756016664_fa7pa' );

/** Database password */
define( 'DB_PASSWORD', 'QTHtjgO7B4' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '^b6eIin!.)Oc^7%s< pyHmhYg?PR~j^_<%ea+oCM^FKfA/ .A@dE[*R&{2;$49v0' );
define( 'SECURE_AUTH_KEY',   '>2[:JZ6`9|[E=O#m6(d~@[zL>5Qo}BI.Dk^w0i]RA}x!:9Le,L}@jfpe<kgPUDbg' );
define( 'LOGGED_IN_KEY',     'Fov@}.!eBGV][rmx:{ 6#4mwLUVSh:54lwj3A8uygh@{5ith!K.AQu=L`8gvvrp{' );
define( 'NONCE_KEY',         '^bElbC~=cN,B6;_1@NQV-{7p-*oq#94NfC_]R(_OVdP3b.uk8wQo_`<m7HuHR5wl' );
define( 'AUTH_SALT',         'P{H2u[}E2- P!SVX]DvegyVr<)0MfT`M#w8 j@(D7A{khH[Q1>gv{uN1*r`)iRha' );
define( 'SECURE_AUTH_SALT',  '5)Cd~!!t9(UlhTS-38=&GRrm0+XrIqr1jR(_WpOUN87,O;z^G=oU$sUx/#T0X/F[' );
define( 'LOGGED_IN_SALT',    '+sDf]dk!%/v-P(=$0If@&}_f)}{nSUlQr,{oSq2fe=7V1fv9/,DH@0]U}! BNN^$' );
define( 'NONCE_SALT',        '~d$.Kj[2nqbh>}&mqK7}2S]^xHM`)Mf>wZ30xZssRi$z=@GZH$vA--,!&m0-G1+%' );
define( 'WP_CACHE_KEY_SALT', 'X/AFG?5fGE}lC b uWXp~Fg7W0Y{a!(.LdrRat3MqDOM<R&x7L]iPk56im R)hfE' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
