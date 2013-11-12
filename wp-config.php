<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'grav');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '[ND4c%E2k>3#GZ^rR:|{Zl( {nt7bis4Yo@~mg(B,D2;EP6yp3F*4oV16Ov27qe]');
define('SECURE_AUTH_KEY',  '#Y)8mIg.1OcKW/TDczJs drQ[eDpsvNRkY=avFU}QoV4^mR2{V~6Mq(!0=te8<-`');
define('LOGGED_IN_KEY',    'YFt81f(m^RuJL4-%GKyj77*CDssb.@V91-Cu&1;4*wxjVI5 :NlU|`<#XA$vAf=h');
define('NONCE_KEY',        'w^,r[>v_/Ouw[>AJAtpa+r>[ihU3M;udy[6>cOt&Q/)3uM[h,;@)2,&l[pm|Kr?u');
define('AUTH_SALT',        'd27,2_i~-hjE}B:/OZJDUsA&M;q;5fqYq.;EGbpjd:qV_j>lm^0TtG:C&J=PU4d(');
define('SECURE_AUTH_SALT', '-4M%Ple5W_LRxJ#n=`eyr@~&@wh5O+^^s(y}HAV`==*K/!c:5i[@[3o!5kx#/_lm');
define('LOGGED_IN_SALT',   ' `p&X&`WUECjIYO]{$!345-bEGmn__iG{q+TdB*)uwO.1+soF9*l^6U[+Y9`U>5i');
define('NONCE_SALT',       '-AQ@5(.U]))?^vG_oC7I|HcM]l/Gjna.m?BP2JZ+ ~lfX5Cz?wWIqOtf#s8*>m$;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
