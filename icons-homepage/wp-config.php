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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'icons_homepage' );

/** MySQL database username */
define( 'DB_USER', 'it_vienna' );

/** MySQL database password */
define( 'DB_PASSWORD', 'it_vienna' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Fix FTP Crendentials Error for uploading themes/plugins **/
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Iq?0&`CXGApCN?5<>Dx/Qy+CFNV;PY%StBRv!Oj[y;T#:P,?bm:Ws)LA!gLG%bJ>' );
define( 'SECURE_AUTH_KEY',  ',n{5~B ;RMU`D+{t.N.Q; 1y%MHHG}c;~3u,AbP`of7;z:CO/~ylze`.(|fACVE/' );
define( 'LOGGED_IN_KEY',    'HwScQ+H.(jCU92*6p|cd#?`I1]3XwWz3RWekg+Y}<2pRJw2PkK$fSqz{ah8M<TX9' );
define( 'NONCE_KEY',        'AQ~P8McGH?k?hyA63/1yFf.1fl@.DNs_~{B~m!O0j<%q:P.B~{4:nKNK$170^&>*' );
define( 'AUTH_SALT',        '8T}-Alhy[Y55.}8^qNMN#qlC%1qCAFVpf4B4g@.WT/6Kb@af{ FKjS@>0u7^#G|0' );
define( 'SECURE_AUTH_SALT', 'Sl9@:;1DwwbC*s;pxK|LBGBG:2LF*:[3<*c{v[$5/rA)hrQ0.AJ.uGbIX[k%`41!' );
define( 'LOGGED_IN_SALT',   'kjl6Y<,aGfF8aHJ)Zk~f/:X-L&7T$sS(zlFUPvm$rD;Puy fY 8e[&K$Y7tRMKK)' );
define( 'NONCE_SALT',       'Sbs6VvN-Moe2c!.W0jk[l[Ddk{ICb>2;cHpwJIS=5u~>b(D#DE]]Qhd!,awFn+vJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
