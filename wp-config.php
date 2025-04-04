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
define( 'DB_NAME', 'cntt' );

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
define( 'AUTH_KEY',         'bq7$j@=o/<|E<jh]*PW<<C:-,7aOE:@S;@~`mK);T$0{k6]bmYJVL0IZt2Ck[mMM' );
define( 'SECURE_AUTH_KEY',  'vQ@,su/%%m0k  I,hb#8xK fGj1+bR=3}d6VLW?K=s07CFCXvII6H6+qSKTxu!|&' );
define( 'LOGGED_IN_KEY',    '!,Gi40UQ~]xJ3qvemU!l]i@{?V9SBG%0W]t|Fg<CJ92~k]uq3VBKPip!j?0{#Jpy' );
define( 'NONCE_KEY',        'R~l(m8>vzuY+PcT7c]6ufN3GSsF|(ia c{2LpfP.IwVC5;_ew8w7v8Rh}sRVN<?8' );
define( 'AUTH_SALT',        '9_RiDO$jk<.&AK!ZPlTci.:-:s?Be@5_tXc.?x{<@6GuY#Ia[,A~Ql/yw|cBZ%M7' );
define( 'SECURE_AUTH_SALT', '>%AOt1=M9(9vqlEHzk1u&}P>14.vm,jtLwYgwH5f},VsG128k@puEc+OU?.1Ts6x' );
define( 'LOGGED_IN_SALT',   'gQz |HO753An*jIPTdV)HFg[,HWWtq@jM 2KHbj2>h=hd(-,|6|kcB-P|KV;=@XC' );
define( 'NONCE_SALT',       'RG,6NtKe9<,y#M`tWlUN%W!3XjkL9r)kt|9y60S3gn9,!litrG ]5]S41i~,(#wB' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
