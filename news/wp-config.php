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
define('DB_NAME', 'fitqik_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'PuRsmYvFcYBB');

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
define('AUTH_KEY',         '7MbJe%QMPZ.!:hF2t`66}c$=*1o9CHSPJgv7z-3+;8D 1CA_s^kEwsm+Z.-Y?U-i');
define('SECURE_AUTH_KEY',  'ed8!^Ael`MG?B~JpWx}{NgjSowkCwf+--#LL71l-qEc_3`Ff&e5n3>X&Pi8f{O76');
define('LOGGED_IN_KEY',    '(C9J&H$)yJ7!Ftuj7P@)Au/>!{o(Rdz.fB=(GMVbA> ?0Gt(<WFSJ,|:{CW?DRyp');
define('NONCE_KEY',        '`||vge.b3X+IE68O/hs*+}5uMhhl!Z+M<^Cp?- |/kFJz%y}w5jQ{Tc43%IyG|f/');
define('AUTH_SALT',        'uK!#-}fi C^Qw5{+0.C9ReE3>J+TP<acXZ#=WDJNj4rw.!-Sz-tmLT2q|BbI:Hq*');
define('SECURE_AUTH_SALT', '@j$>3JCO9{2xls4?Zw3`{d=#}How#nC-Y~]+KUCL`5 %,?L6Yz5C(XcdMfTw.<Z+');
define('LOGGED_IN_SALT',   'DN>Z+%4~b,~-d2E)9|Qvqvxsq<1T-pjOqjbf%Fg?|d{Z-+;mT.89PFBa]N.nAsrH');
define('NONCE_SALT',       '.>C/d&Z!}Cp,QOxoLv.6i<w;w4NmN$/hN,}wM}vGC0+eM^,?vtQGfgVhG=9C[|{Y');

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
