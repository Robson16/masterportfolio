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
define( 'DB_NAME', 'wp_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`q.^0kqx85R{w cf0[1,oLE|u~+m?|FOg1cQer-w5L908qfHK54|>6ZX2`NALKu4' );
define( 'SECURE_AUTH_KEY',  'oKQKQU]JO-wd+),RC}}Rs9L7M_20+7bipZC{h*5`AE<8D*GQ%U,Y.1g-r>ED#9^2' );
define( 'LOGGED_IN_KEY',    '*FxmZVg:nCqMJ]p*{zrNGGO=,)=Md4Tg]%LRkjQ}j#@h6NYa9Ki]awc*0cQ/^L:N' );
define( 'NONCE_KEY',        'N2B0-S+DV3Scg*ZpSk8A#_&9-k[ (ON|16# wZaKQ&*YOS9BA&CAMsr-+iF?a0Mb' );
define( 'AUTH_SALT',        '`vmL9^Lua]I[>R%cGAI<S64;?Oj(zc;{{5ZJ[K<b[djcgO(;dTo]Z@Ol>2x}-~Iv' );
define( 'SECURE_AUTH_SALT', 'liOd@rFJa[m&xL@2-NjV<N@.D[qxds|&KBJQIrm4xIr[zO@m.3r=~nM68E)=_)0/' );
define( 'LOGGED_IN_SALT',   '(7O;L7:AG?d$%?!-xG3L]j-WOeMw6i=[|u&pC2K/Rco|@.<zvz-+U(#*1W:DEmn)' );
define( 'NONCE_SALT',       '9VzrvZS[#+nfGAKt?+S~FO|ysubZ.`s{SzZ-^N(#zm}Pc}!Bvfyfa 6KPfEfe5?^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

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
