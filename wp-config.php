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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_mijo' );

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
define( 'AUTH_KEY',         'WaIeB+{^0fg*$ -6[lBmVDbGEx@FEUs/Klu0V4,#hOo-`85T0nF7CZ]03D-:+/[:' );
define( 'SECURE_AUTH_KEY',  '-J7|h1,5]lh00MZyY$*WSCWz{QN}E>;(McZdcZ52Xq?4fJ8@7=9D)2o|#$nGGE0*' );
define( 'LOGGED_IN_KEY',    'JI$ (.f)nNoum0%(jG.D@7_n6Kd&r:/cFi/?Y|Kllga4/{g:`[Zr8Q>`8 yO62]L' );
define( 'NONCE_KEY',        'T9GrKdap7Aj}JX0r@(&lMNpmE6V0f{)V=u0!=j3ZCJV1_w^8&Z%({t)Xe7cC#s6e' );
define( 'AUTH_SALT',        '-q9r+WNrflAW<!XVXK a|~yx|9gv75N-eH%:RT<L:VbENAk<+#&d)ei+8?gI:7{B' );
define( 'SECURE_AUTH_SALT', 'F5vl>!}R_>N|<etcRkt+{nV[0l&F(3fs>bq]$id+~ZH2L?IhLos~U8^)(x}{fhg+' );
define( 'LOGGED_IN_SALT',   '~LLBLUnAbd]{D Zxf9jW.;VNWl]fH3YocElLqg ejV|Q,C1I.<%:BSx))OXvJ:rs' );
define( 'NONCE_SALT',       'IJ:PZ6bd$?%::1.Y`T~CY1lIb{63GTHiGq*;n`&kicjR-W*C=KY(8+CIguAS2E8H' );

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
