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
define('DB_NAME', 'icicisalesforce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':n-~*V]HxQZBBU2Xw^C}DXE.J4P7YTHF*/j{-O}J&[uKc4DMe926o{!u|t{&`sc*');
define('SECURE_AUTH_KEY',  ']&W[5Xy5qm4*LxOE|x~nFht15wd6: kb5h>vpGZ[J{^LYe_i0o%l!O^KEWeuI[`s');
define('LOGGED_IN_KEY',    ']=+&q#ZPjn#JZ[Jde^3p4j9!56=kkx2`|eBn4|N*%_;pOGNL>.QQ{BoJsVf*rt{Q');
define('NONCE_KEY',        '=[8tNXgy#}yF}a)Pw#pB:$*6.caw](&QC7FFm{$rUT%HIcPGYcZ r7Hs$&h~Mcw:');
define('AUTH_SALT',        'kP#~_AtM3bxDqQp-t:_,ti.0+{Oa8cxV*}u84f{$H%LBRrDk}3[vmjX<;/H!Yq_W');
define('SECURE_AUTH_SALT', 'mIF?(xD Gi=ISIgD{gs{2|RGR~P:MIRk,-raMF N.jkMH$?l@TeTJ;!~xUCwAxyl');
define('LOGGED_IN_SALT',   '[9T/4n-lL1`Gq0_5@ny97G2rj} 7trvri:n5*GNLN!%e?>E&-kE(Lh.qR&2ciy,G');
define('NONCE_SALT',       'u5R0};=D26*8.{i6=t<E*_RCcRI!]X*:i0cP$hB*c[66_d8,o+nc;RKHEr47^oCa');

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
define( 'AS3CF_AWS_ACCESS_KEY_ID', 'AKIAJNY3FTHCZNBYNHSA' );
define( 'AS3CF_AWS_SECRET_ACCESS_KEY', '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' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
