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
define( 'DB_NAME', 'kirpich' );

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
define( 'AUTH_KEY',         '99;`h*KD8;ks2>FF/>JmkWC:k!b#FZCf {cI$9WPk2+Ibe$ZmUehc=C%;A~i>_Xu' );
define( 'SECURE_AUTH_KEY',  'kK[`QtCITW%hqDw^pMW`~gPkLz_^k6ylw,(EAKc`>@CK,,C@vx=d%!.~SBs24vUj' );
define( 'LOGGED_IN_KEY',    ',Y~gN=gksk(4tst^l(>M%-+ffp(GF%ly26JJ#((yRdjkGmE/6s+vY2H+*x:uMr9)' );
define( 'NONCE_KEY',        '[Z/&LfX,4+]!aw]F:Y()i<gy=>DA$,?p]YMn6w3*w:T7>Efupu0>[cn:+>?kM0EK' );
define( 'AUTH_SALT',        'k_(#CPnaf[6}Vn43$P!1~5ie/kXtc :!@ .pkDDKCr sIeP+4CY`$7cL0=+]g,$]' );
define( 'SECURE_AUTH_SALT', 'kOj!vZ#8S#GQwG!@0co4 Th$EjvpuiBr !U7lEt(-F_v:G3:zl?wq!zEhl{?SeG*' );
define( 'LOGGED_IN_SALT',   'T.M9*TARTnxcb^]df2?[E>rXk1Dz-!w$fS#`=]^X7y~Q)LIyJ+kW1g>cZ!o2O+7C' );
define( 'NONCE_SALT',       'dt( uH&Dx$|uO?qaNVseFt.am|^:.):tlB;XrwjC6FUn7}s]}z39<Az=-G>$+OT@' );

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
