<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'yT3e>=SZr=S[yOCbZ}q;/W/:1p!bg-K,NTW_^WT@a+KO(@+,++lV@%5<:e2,m75S');
define('SECURE_AUTH_KEY',  'k}>fa=^=sjDE9<-eES/XR-?~b4^%V`CN9WR^*C?}pYT-bK>>_bpc),OZH^+PK42(');
define('LOGGED_IN_KEY',    'MDb1P-hl|xUb0?Z1xVB&[Gv^2JYa[5{|&WT=MW))eXv^/2ZABk?B?<Z_:_qb(XAv');
define('NONCE_KEY',        'k bVcA>7*A-|1|yL1;26DX.zs]nAP&pDyB)--p&G(2=W+w^hEV|+ZF(u=d+cx Bo');
define('AUTH_SALT',        'EegUY{|?W-FAe=c9cg[Zn^D$7Z+VpE)Nib(,;2=Hm?<kvwn/1yNe)+gFh=I2-S?g');
define('SECURE_AUTH_SALT', '+^6NvWIIo7m-,k9[{~U>U0Au|2x7Es,u`41<^^2z-%PLp:yS>}GI |IxNX3xYtch');
define('LOGGED_IN_SALT',   '{qt*`b7&!-2)p[0-P2B QGh4y?JI-e[5={=%?Sj:NB2yF[7|Q~jffk+~/%4&rma1');
define('NONCE_SALT',       '-*9=~i xL$x6W0;?JM~wE,~542Uppo;5q4V&?0.K/1&S9he]T-E0p&r_PkeAG$R=');

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
