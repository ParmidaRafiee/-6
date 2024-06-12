<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'newproject' );

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
define( 'AUTH_KEY',         '{v7J(RM;4=Iq3d]R~EdrX.G:aymfS2h1%DT|+c5ljl[jvtdFQdRLcWqeseuoXtQQ' );
define( 'SECURE_AUTH_KEY',  'lFSoq$^8S|icjR0NSc~na,*iGiWL$3H!_be`).r!V?B}{].||[St:=a!h;]8}mJ$' );
define( 'LOGGED_IN_KEY',    ' #O{=a V6Rzum;5J0Cy-zZ/rDh6k`I2&A?CMI+{j1;igrx>-UIS2.&EM;4$0%Y9N' );
define( 'NONCE_KEY',        'B(*c5G^Z=}S-P:??D(o,<zZ]M:YE7!KM%Cd1CSU_s@FzE<a*bGB,yI]bwtd<+j~U' );
define( 'AUTH_SALT',        'iR?ssW=iURML-^6igDhnQ|EYSO69C8Fsy@-|OCaPRn}1%|w>4bpNEnGr+62Xjx;*' );
define( 'SECURE_AUTH_SALT', '6pZTKzD;Qo0S1QcX5$wP^oOnr5v]G=Rlk2HDQ!N`,[gJCi5g0.}k8B*BXTR3/?7G' );
define( 'LOGGED_IN_SALT',   '2gX`8g](uus0$[NhEHTxZu;+/2D<CaXwjR-[-8A7C8%D5Wsb%~A@kZ,u<n7R R3[' );
define( 'NONCE_SALT',       '`+Qy@6]AW2yJ[ShR7uY`>-b!Id&yP,YlCD4m+oVG84dUvjYO%ld}f+cc]`sx!ui(' );

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
