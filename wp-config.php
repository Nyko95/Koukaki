<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '03wzXWd*Q63S`-v7qrfv<R>S#_|=xA1c~<u{/uDO}TiqeAkE9Jx2_+rkX[OVCc3V' );
define( 'SECURE_AUTH_KEY',   ',pZ*zqEo.LqXMcCdR]-a+rAKk8QUWeUFr~#L3#W&u1TqY2b~JTf|Jjw$C_ROk]+|' );
define( 'LOGGED_IN_KEY',     'KQ1:VK$FM.o5*}Xli)H9jPTw=YhN<;vM.R+8EGK%f)WLeKawwtz_9/VQB1mFTh1d' );
define( 'NONCE_KEY',         '!~L}guO;:F]U9PWeYo[EbP.nDGkoM#verB29T*N^sgs.p(I8D?~Dr5OAO+gIs!VF' );
define( 'AUTH_SALT',         'E)M!80Xvr~Z{Kb`Ii+P:lwcI>t6 SLMu;|}Y^>k0gk5}#%nQ4JCGOrQgE]=gx=>^' );
define( 'SECURE_AUTH_SALT',  'Efdrh M3($WXtV!]Tl`J|7>=3>28DCfd+<e]oe%=2#}4Mn4,y)i@$~|Qri%W4g!;' );
define( 'LOGGED_IN_SALT',    'F9(!]I?Yr[2>^m7 0>8Z^#eg/UhU_pT1V/;iQ_z!=UJcp <>v29OZ{zoiQ) UioR' );
define( 'NONCE_SALT',        'h)%[u$}*Z,O<@(/E.6J=]<lWW|K=*nEO`=ZwewO)O;U=s1)=5R,eNfg5br5Oq`~i' );
define( 'WP_CACHE_KEY_SALT', 'l+RO7-yo]Z[~-c@Kg{XoOy=qR~.4Red(+}XtXy:!g*&o}bWTZVi3Wl[qT($`{ce1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
