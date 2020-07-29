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
define( 'DB_NAME', 'xevietnam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'fHM%~GYu(}:5H{=}(mhI7%`S$}9Xocy8b;& #SRluI9O5&k8c:8fCdm[qqPAahew' );
define( 'SECURE_AUTH_KEY',  'omyKnrZ|W,4N%C6kF|Pb;+SD[<PddEyvgUOHKJ7$Ab+LGWjwOvJ9eS%~5P@V$nSa' );
define( 'LOGGED_IN_KEY',    '>pYnqNLbXHMWYcQXne=8s#Y!1uENfcXM_.41t8Ep;^/57jWa1+%_A*0_vb^>Nw~n' );
define( 'NONCE_KEY',        '{L3p8m3]l<hiM2RUy97iGz:%H.VX(]4V#1/iQ6!S772_rFr0M;iz#3enko$.g<EE' );
define( 'AUTH_SALT',        '~ 9;iOK)k}ABL/W|(fi7Q~~!b_zW:q8%@rIxzNbP%x;7rlHwRJ4S:*%|`1PS`j,4' );
define( 'SECURE_AUTH_SALT', ';tMy/8*6zo6SzIpB!O6/)63C#[Lt,vPD&n19)R+E:$UUxkxE~LU6W)Z[87%[KNDa' );
define( 'LOGGED_IN_SALT',   'oqZ)TebQ]q;c!zruWp>#:+kNWPO=w?b.YkI4zNwA0EutXw^>V@Ns5/U=Mmz}J/c]' );
define( 'NONCE_SALT',       'o<DPmaK3 0kv4v&=%*jb_&Gel bF:_[+uNCHl3(4nF-r-Hw<eG[  @l*3(kCVAPl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
