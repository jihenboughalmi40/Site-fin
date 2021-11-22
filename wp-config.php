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
define( 'DB_NAME', 'Site-fin' );

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
define( 'AUTH_KEY',         '/~zXDec> ,)%Lv>W@DL%9.;N:v05XG8@w$+bW9b}O4C:i%O_d 0twPy`@$&a8Y72' );
define( 'SECURE_AUTH_KEY',  'b goYgz3(WAQ#l9-]K?YE*< Dtm?^+d4jDN7,M-!yM -F$20tArhSKbWfvB@BbIE' );
define( 'LOGGED_IN_KEY',    'W>JeyGf2ku<!q1R]LF C|rx.Qm?%@K=y+SEYzbax4/{%&u*?im9e0x++M@)owEV5' );
define( 'NONCE_KEY',        'Mw1z?=c>AfCU:$U,,CE1kyMk{itA_O1$~hMPgg}Ke>`sRGCv4bDW%@4n(96clLzI' );
define( 'AUTH_SALT',        '!:Reki JUck{N}ZwW[Kz^7I;4:O!zoOi28&@OeQ>t~w+HJ0a)`udX=t(51TM1pm[' );
define( 'SECURE_AUTH_SALT', 'GB?1ad[Rz6J%w:^[O9`f>|n#Cy)f!$T?Xct2{LsN|8gj@>F=*Xdz([W%UYMEtiV$' );
define( 'LOGGED_IN_SALT',   'D>LNt4^^3M6v05>!L@HD$jO|Y .]sH0$T]fsPA~~:4v,EWySrsSSW[Q/>s;-uIAT' );
define( 'NONCE_SALT',       'b7`OI+J;c%nTA(o=4lp&q|a6o0;_w_-A3u:u%gEVBa4^|)m0 %1h}i*xp?X^Ezr(' );

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