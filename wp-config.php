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
define('DB_NAME', 'wp_brigadesecurity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ourdesignz');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-_S<;Ry9$N?[f;PK$@-,1}Kbadu>XCgo _Qw?`Q@r~$YQ]F/wI(1|pR2:l8FemjO');
define('SECURE_AUTH_KEY',  '<`Ta:`o{x MA4.g&:?9&)tou av&Hfx5I<,FZLD]6p6Jm_pTBo|F=:1{G$DRj}$>');
define('LOGGED_IN_KEY',    'R<DKg@-F/*`WUcz6rCSvH5dqR#79l/Ii<5X3.THPfcvQ_c``z2>5h(vFm W,Q6%}');
define('NONCE_KEY',        '[|<i16=P,E#;%?1I!E#PS1M)*[8iEHms4cSSZ$X=JG)$aY~lYm:A4Hh8uMkQ$}^G');
define('AUTH_SALT',        '8pH;BTtN0|M6IRqrx6e3*x-A:;6%Hn0pd!Qtg/ViiYDWZchbbKk5Mc[^HG+jTmK&');
define('SECURE_AUTH_SALT', 'Qj$riYp=Vel38[X6C`(?hkdR=x4TKj8wU5tcW(p<Fs|SA-4vWwDZvmQiDD*EV@YH');
define('LOGGED_IN_SALT',   'LoG$x9R~l~-6^@|lmk_Qk[/HPAdaby/W<>(3X%ua:&<Kf2PLyHR*c7#QWEbJl17<');
define('NONCE_SALT',       'AM`X;qTVtvvAv@x-L:#@LW r~Z_fPv5|wMVq-ojAw5x>E:e=fqv$%T~1Y:V5JwHx');

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
