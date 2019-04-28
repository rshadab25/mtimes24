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
define('DB_NAME', 'mtimes24_in');

/** MySQL database username */
define('DB_USER', 'mmaudbadmin');

/** MySQL database password */
define('DB_PASSWORD', 'XXIwyT[nN0Q#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',3cikBf+*i4I=O2x&-&+I,rK1eV[ed3A2m3KM!`hd$El}bn]0/qr(pm>c)..7[^}');
define('SECURE_AUTH_KEY',  ',6`GRE,3v/qgX!^bi[FHd3jmKKJaLo|=661{G0Ju4L Z&zX/~}-bcsgK/7$wq=17');
define('LOGGED_IN_KEY',    'VlAIs*C^Yz#fC_NwLEGe~MDkh8BEfZk+o=y.d.SU=}*;7hq>Ph+F0Txf-BhF;P+f');
define('NONCE_KEY',        '7qafrXb3CYG[L4/x4lm/Dxr&1vZSA[n^8t4oV4D0xH~>o+.ZXklBrh:n%1>*,Rh8');
define('AUTH_SALT',        'Zip_Tqw+2LKBdc#*_|+;mxrJXYp/M J@zfztR[=CLwBQBH;;yGIs2&AB~)jS5,Y7');
define('SECURE_AUTH_SALT', ' >cNHH14V#c5Pe*^L!%.c2rcc?XJLhj;fgR>8>1LIN5dKEoUc@dTw}XP$?k7eHe6');
define('LOGGED_IN_SALT',   'SQt6KaGv$j)K.<[qJRN<JGk&6)}U%%20ZU#*4dqm%Onz}Ul{HKZ!}uKyK?jrdVC&');
define('NONCE_SALT',       '-9K<Q6n~4h+~dicSeoWv$rDP#ba&b(X9sT@9q:98~DPe:N_3qYto=X{sSI?7r{~t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
