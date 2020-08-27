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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ferreteriaconstrudesav1' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HbK3CJVIhe83urtDQ7x2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_Y-}&Ks)JnebX3K. YXP:+wEK32C}u1QU39B7OGvV4w 5[~1F:?g]h0;qB~ITs~e' );
define( 'SECURE_AUTH_KEY',  'fh~,64Bo48qfZYjK*vKY|Tq;qGNYBuSbMn&lhCJ^St4Gw<j&dwE[5w)k6Hw{N4(k' );
define( 'LOGGED_IN_KEY',    'LTZy}P4}8~a(a<5PNGv ,4gz6Q,X:=*#my2B[U1*0<eS[n/;-oybvg/0Ad{;B$#m' );
define( 'NONCE_KEY',        'aOyeUgXJw#(EBnQ#u9uDTrz9m)]hTe_HA4-)Fl1{B}i1a%CMS>JBy=_/C&Q~p>~N' );
define( 'AUTH_SALT',        '# 8NT=5|$<!X29.l/1+*Xn[OyKGx2#.p-Y+jD@aR)<BBa]YhlI<4%R{0o5X_Tqzf' );
define( 'SECURE_AUTH_SALT', '7xas|(F?*=;rANlVXw:#|+R(]`8S72%*4Zp#1hcmarkSXM.$>,Yd9u${&^-vGX<7' );
define( 'LOGGED_IN_SALT',   'dO`Ls7g4WQ/NpZ}x,e0s[j(2SU#/H|?hhtGV}HK]yYUs~S9JJ+Vuuv/;&HMkEf`F' );
define( 'NONCE_SALT',       '/^wX5f-5DC}V715(@tb!-f@XPoE/E|LluL/]MQkvb+Ydt%]7HFE@-%@GT TPc;q[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fc_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
