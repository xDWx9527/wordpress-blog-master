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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/www/wwwroot/www.codingv1sion.com/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_blog' );

/** MySQL database username */
define( 'DB_USER', 'wp_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LCkmamjyfmGM77Se' );

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
define( 'AUTH_KEY',         'lb1x/<?>r6ct}e>Q|O#H;mQwW^!J`nu=~~OnJ7aCRM-,p9DZh2 *$=!{Sg`OWGeI' );
define( 'SECURE_AUTH_KEY',  '3rKXwcm@1y8)cF&>Y%*PlQAT@Hj/:`am!UJVDjR4Ln=jQ?b[3M;.A;> Mt-,2Cg]' );
define( 'LOGGED_IN_KEY',    'b<DGL^#mFw5sN+0l?&%1+3:U$qh188B}y$bS~s1A>+;9Q4:SX5&0ZiuBiSsn9He^' );
define( 'NONCE_KEY',        '_X8G..I0@Z-I2gSb&Ot=>p(zNrxsNYe~%/y3gr3-LRR[&Dd2tN~=qE,)%VL|z1jz' );
define( 'AUTH_SALT',        'RM[Wn-ta6`]=+^)vCf_S~6(R)}9V<H,AIov$d4#Ah:lkkRn&VHUP]VWcEwXo^[fp' );
define( 'SECURE_AUTH_SALT', '{*1ygMhOt1JM?G>Ppf<p~~7yS{{}n}MLKAs1D.w!YM<*gR-mw02me/-(e,+UQ=$w' );
define( 'LOGGED_IN_SALT',   '7*QbNZO>lDd<)_78ePKF+*K(*4mguq!u,<NVXRX+0STB6ncBHs<`JZp= 1Jm/n&M' );
define( 'NONCE_SALT',       '(|{lIZaNm*vt&4S&]4zo%konwv:I@nR0y:T:x6Ir<ipHE5!L?4h5$MiD&Hz3DP6_' );

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
