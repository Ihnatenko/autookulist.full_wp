<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'autookulist' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mysql-8.4' );

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
define( 'AUTH_KEY',         '(q{dMOSJNKUF4fmjQ7jK1bmdcw;v9v6=#g88&+8?Pl5~.iIkkxUy!xUS9S(8C4j-' );
define( 'SECURE_AUTH_KEY',  '|`U~[kseFBgs+bl+,|P_+z6?F_#)aq#PDva9gbKfjJ.}SCrs1iGU6R*Ygf)`K@?`' );
define( 'LOGGED_IN_KEY',    'Qy7*o9@SNu^BT#SW`%0Yc8@mwEgJ`^,t#rjxy&T60Ljp8XtOlUq9#qo:xu|AUqG`' );
define( 'NONCE_KEY',        'i(Spi3shMyJ}TE[DlFJ:.7|Tx7i*JglEpa)mtnq6$7Zk:3s/3pK.&?8X,2Klbc8D' );
define( 'AUTH_SALT',        '1&Dk-tmmT:.nima-IB0I+JLO95IzJDcC>U|,6t?A5qYs?4H.}5LMV!<n7Jvo60r3' );
define( 'SECURE_AUTH_SALT', '#x%8Y[QbTaAZCOGrqgH4>PPl/3.m`:Gb~kHN9Z{wp>KM11_(Qplhapl vpP8%Rr|' );
define( 'LOGGED_IN_SALT',   'e>!9]5k.N;KqYw,EylR-F^V?G;KJsza7O51$PV#rg2QvfvhmgL9%,,T4QSd @^<A' );
define( 'NONCE_SALT',       'JY_%~NU-A].t%Vzkg;D#nIDM]DXW!OVJ@eG0~H[7z$oJ5@Zm1fh kd7Uh.VUyN<!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'oo_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false ); // Записувати помилки в wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
