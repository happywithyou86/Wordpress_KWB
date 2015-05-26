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
define('DB_NAME', 'kwb_be_db');

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
define('AUTH_KEY',         'ItgmB3<&}Sf136F}Q9.}n1b0{WVU|d6OFmI-mR~pNvQ/+P:^R!I!]Jkd|gI=cK8h');
define('SECURE_AUTH_KEY',  'Ze5XV:NDQ3WtM^E0=K~kg$]6T%~EulEra)|AM*{P|FR4/YnrU4zB0qhs(@{R!l?C');
define('LOGGED_IN_KEY',    'J<;z9 A[ovlCYToK3LfLFDOHNLBS* (Sv.hc0oR}<//2(]GM#+`!3BvXn_j&:E.v');
define('NONCE_KEY',        'RCH<uQeoL45T.^1Ts:Rz}[Y|+10[<gc2V|-EoF`m&kIe(a hwr<yJhOhV`Wngl#m');
define('AUTH_SALT',        'v&$N?e{)<~d5OS7WR&RQ!4]7p$o>Gy;#CGeMR;PLdyT!u+&:0RF70vO44.WlW;z>');
define('SECURE_AUTH_SALT', '%)[@|*XSwvEN VIZ/-e<E5m.k}-z:&VxMt|jH4BIjr#QX.q_^t$aLg)jI3l5ylP)');
define('LOGGED_IN_SALT',   'Hg-q)10*6[l#|e%/u-e!M)AvPx&HE.+2?fiq{AV`8:j0Nhu7ynX2!9r.%!sv=*5n');
define('NONCE_SALT',       'tO?:_`XI}@O6l+cX9fb{2x.K>-cK.Kv2M}Zw3wsj(!J:9|#65d1 VRZ1&/_%bh*Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
