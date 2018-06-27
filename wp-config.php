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
define('DB_NAME', 'selafu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '}Ig VM#/=bc0[D;8]|yM7M0PXMQmth&Du41qdBAp*Sy|^DSn&9}m*nsb[0g3@}>2');
define('SECURE_AUTH_KEY',  'dW%U^=9w`(`>A9H&LBP_Z~SU#ZF# 9=A{fS:O11*{d-T1az$eBM1W/f)}Ih6;)vj');
define('LOGGED_IN_KEY',    '&!hB/p.0<YPl^17[o/)p5x UV]P@NuV&A*eJz3 @SQRVpwvp3`gzeW!2g]XBU%pL');
define('NONCE_KEY',        'ni`<S&C>2f+%DdRsVCdPfrj`!xPbV3,Vd|xykav=Y%#rBw|_e`tp+}XyC|+z$-%)');
define('AUTH_SALT',        's5bc=*OsBOlZn4D`Z%4}y*E~9C_p{?:KI;b{ziQ}OmHe%l3,(9&8}G$Cx36n/1hh');
define('SECURE_AUTH_SALT', '(B2G/LK;NLM7%9 NiV5K~2wrcAZhGLPXM5v+xT&rP}Kw@!(loikmie:`(Raf9[MI');
define('LOGGED_IN_SALT',   '!LjRc@aTg+Pyc9=/C%N=^?8Kw[.V:{[BPu}6CD)+vi66(g&>gSaG MfggS9)w~ j');
define('NONCE_SALT',       '|{ckX,Tfq;|8T-! ET,R^;<%2`~+-5-vmutT^i!=%NOtaPP1t|tDHJi-qzYn[rl!');

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
