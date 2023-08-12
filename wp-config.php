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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myassesment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^oU/l]V1tr()uU_j$|#J{/1}fdSy!uhlG8b&7p~2L]6@A8Iaot~MgV~v?+K^E,le' );
define( 'SECURE_AUTH_KEY',  'n-b/dTA<H7x<ZC{O@A{~]&T?~K_pssC[z;AM]=c`8{J%hSWM`PF_4Vg:_QiqY+r<' );
define( 'LOGGED_IN_KEY',    '{C*!?6UKHXo^3ZvQN@q,e0cyEZ.q&.6lwu:SQ mj.RJ`KszJ(B/B`z{@(j}2E xS' );
define( 'NONCE_KEY',        'S* |+yjxx `B!4mg73&UQqD4pC{;pF*m#@]/fp@>O!!a+V[X2n9|o|6;3t>X$ENr' );
define( 'AUTH_SALT',        '/jQ#?+UhSoC``itZ$yMHp:d^HrFT{Dzo,tbz%??7W=RCbA([F`kCLR|jB4hpS!hg' );
define( 'SECURE_AUTH_SALT', '_*?7sKvr>ryzP4 yu_L3m^13EuhWLtf3-C={UZE^I9L({bDZ6%v*#LhDo=:]3^mJ' );
define( 'LOGGED_IN_SALT',   ' V7Rh:@[+}{UGCW7_xkk*sJ$%*o4&Tnl9Zzw2e#gr*x NWwjPVz(]^InID[Km>]>' );
define( 'NONCE_SALT',       '2kSBw&3Bh1r846{>7Mi@l<(i{t.Cz_w2[`De0B*><*lDWIjkRn~j)J6Ovv`x,KnJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
