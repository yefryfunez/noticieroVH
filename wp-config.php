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
define( 'DB_NAME', 'vanguardiahonduras' );

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
define( 'AUTH_KEY',         '&<.^~:fw+38kf&9AKNPqtc5JboV$Jc;4ldJ1|%ur(zi7,UHg+TtBS$tLFzK@cfmK' );
define( 'SECURE_AUTH_KEY',  '5UVOH6/}gZN/j}x1Bk.3Mkw^aqgiNe86RDzrszLv:G@R(!i7[#JdNb)VOYP#v~Cj' );
define( 'LOGGED_IN_KEY',    '_#x,RnHl,r$%i`HCUE|sfotC.;Dqk|ar8;f^n)x6?e7P1gLqJ%q;`,1,*^.<2>OA' );
define( 'NONCE_KEY',        ',G+SAO;o-._O1gmPgt:sz;AYg,#E^Vg8]gMT<cqJJ;do:C,CX!5evhd4A(ykT*Oh' );
define( 'AUTH_SALT',        'Pukf>h.xFUq3bwGNYde ;cL<ia_J5#DcEwv_#ZZ(CFG-IE~}WgU``}2Yim,zj}Bf' );
define( 'SECURE_AUTH_SALT', 'u^*xG9>2zELW}zW8dJLE3k#DrQ:15z]l3}UR6?&x1),!;SRfAllua}xv>FaO4Ay}' );
define( 'LOGGED_IN_SALT',   'V+#H+n[oOw-yeC{5Jd^/LjIS6.pMr8M<7I,8C J;=}2G2|6s.8HlHF@<CZk_#tm`' );
define( 'NONCE_SALT',       'IBd:^#ftth*CAI%?=1,XwIQIhoo^44o-;,4_%Egz]S6^8m>/5gbroNLb`xg/)#m_' );

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
