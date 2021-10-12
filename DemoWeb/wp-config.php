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
define( 'DB_NAME', 'Demoweb' );

/** MySQL database username */
define( 'DB_USER', 'Demoweb' );

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
define( 'AUTH_KEY',         'O[&0I(?gn!=LKJ}Cg5WwW?r Vs6V9JQ}|2 yiiM(8I-_)(N4(g nG#|C7mPf*?WX' );
define( 'SECURE_AUTH_KEY',  ' ?vsH6H^9lG{@zhzWPj*Cd>{QcJFk#DfcUU`i<$n6C]T5i(GlB]-.f#~21pG3bWU' );
define( 'LOGGED_IN_KEY',    'yo;GkX X%-Enbun]I73,+Gy@.].!j2n#$`vH3_->iSH!6(U;R-CPS~Aqs%i8;UC8' );
define( 'NONCE_KEY',        'y[wU;$(B0~cHAFBI.Mza(2gYKxFyR9l9tU;Zjzqz{~<fnvW1tsYoR2f]N)O|5f*;' );
define( 'AUTH_SALT',        'h8{GXQg%HpYX9f@wVgaYc/ySsZ[Q,|@YimxVRnuU:NVW~.^^Bfxt)rh7acU~t^8h' );
define( 'SECURE_AUTH_SALT', '@{_0DY*lj?x>:(<;*01h?{@6su6pq@JnscNgR(xgn@){!:D/Z$9KuO/Tj,SEJDKP' );
define( 'LOGGED_IN_SALT',   '$OtEcEvtk>)KvW_5Lf?}& #Qdl ad1)_RWV)TP_G)(cFNCgZ|]SGj#LPN@BuiTim' );
define( 'NONCE_SALT',       'F:r?(dn%vNPeL?_Yb]>Wr;mMMf?.1d#w HE@AB&<R<ZkKy)<Xd7yV2NcOK_?<M]o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
