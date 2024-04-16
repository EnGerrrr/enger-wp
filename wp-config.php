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
define( 'DB_NAME', 'enger-wp' );

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
define( 'AUTH_KEY',         'M,a}/QG[41Wi/w`ACyzcaAptOeQ{=:Ehn##{ZI8:~+%i=83mB].{a-o!m2)$ck?4' );
define( 'SECURE_AUTH_KEY',  'A|a`Wr^Z7w~MQ7M<`$m>P}ENeL+!,8(x1e3K( SMV8Nq!99B%V9zcisupIhBTq@5' );
define( 'LOGGED_IN_KEY',    '}]2R`9(1JZa{l?6Z$dqwmv~ON b 5AH5;7nMwGi,l!s(<0,/FEIp`?vf>o!/Rj>;' );
define( 'NONCE_KEY',        'S/cT`vrS.%q::M1.`m7ap&|gLxxfdL$H1lnVI{k,_m+<Q$tfqV{JgQ5P]oSmE~[7' );
define( 'AUTH_SALT',        ';O~6h+vF7~c0zu<&|@hjO.e=D+:pYH>g/*7/q2%{x2lCW*zpDoUq)8w:ttufJTeh' );
define( 'SECURE_AUTH_SALT', 'yn.NXl*)W/YSy{vMxKPFe(=u^^z^9/GSYbm,{I@QJ@HKE-ybYKXs0{Fqso%;- :z' );
define( 'LOGGED_IN_SALT',   '?iUz0VB[o;bh?P3U`+U)0rONPw!]/=z(yAwLKepHivN0N(el&u.*WdfF#h2>R1e^' );
define( 'NONCE_SALT',       '1I3hXS|:`G}y/|qhbR0DM#s;}7jG^kue>y7jbvB>28%6N%_R*K@L1/y9!!_;ANma' );

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
