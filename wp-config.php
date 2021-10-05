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
define( 'DB_NAME', 'toursandtravel' );

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
define( 'AUTH_KEY',         '*0Az1!uvr7uKxjl+:byK q0U0m_Ze4OdMTAgWW#MDeHl *]%8P^fQ }F|T+g3xic' );
define( 'SECURE_AUTH_KEY',  '@m@QyeCb8Q ]MQ#EoT*rfDFtqa1Px_j8IkA*8r4[CQ|w[~9 x1jM%pkH=SWEg[sQ' );
define( 'LOGGED_IN_KEY',    '}7MAf4vqhYJUEpqAPuXB<Rvd#rjbPNN9T,8qK{8H&]_O5$v9+0u-9?q&j<>~889=' );
define( 'NONCE_KEY',        'TSiIAr>XJs?RQtNm762#0POjn8L)ZD_}eN0oz5L`*gGVm$ L,R/k6]K&c#8_88J!' );
define( 'AUTH_SALT',        'bno,MTO8dH:Vf`wRfYEB+JYlskEyO}a6i<LN !Ew5{j,^1OLG]NqBy?K#_g# +n+' );
define( 'SECURE_AUTH_SALT', '<M%+tHq1ScI4KLx)::^f.17usxJr=b,wXiV,!>:7d1c83p=mxdcMewMsOLd/7]O1' );
define( 'LOGGED_IN_SALT',   'HQhcFyV-MKk247`G_?=_y4B]=gg=4tvEZtFUx{I*X4B^]wP)]C;0sVTw^<-a<w^F' );
define( 'NONCE_SALT',       'x;F_onA+Dp_MWGe;EY@X;R=v-g64VKg%5Y_jf,+o#QE6MRbm7I?5AMdk8&fz@Ef5' );

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
