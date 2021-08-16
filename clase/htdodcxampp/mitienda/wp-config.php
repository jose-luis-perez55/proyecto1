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
define( 'DB_NAME', 'mitienda' );

/** MySQL database username */
define( 'DB_USER', 'mitienda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jose' );

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
define( 'AUTH_KEY',         '~mn@Yk5x]Vd-1R2`o&R8RDPMU;k`EhMd^DJmrMq.K^8Zy^/&iKNithSf7rrDzxUf' );
define( 'SECURE_AUTH_KEY',  ':dmsx D+]bUBxlYnI,BJeF086] l^XeN:{@Cbs5v{.$HJWW.&s[qPY5?_B;?[)rj' );
define( 'LOGGED_IN_KEY',    'ddL?L<0XfeH*D 5d=MMn><gR;d>8k~!P;-4?_1[:R>oS0f=m|twVI_UXT%F?,p7&' );
define( 'NONCE_KEY',        '-o=zqc_a@Yfezu!kp.5rmd^`1dkbp|:$&v1~JuF@&dv>22Yl)%TM[P8k&zI<cRUE' );
define( 'AUTH_SALT',        '&rgAal&fJQXOGs+Bmljs9FzNj k?=GHi[YFFqP<`/O8>.{;r,0v.&Mw:0Oa12v-I' );
define( 'SECURE_AUTH_SALT', '1=CR:)bK_paKNZp*.T)1babdIN}e|gsb8y-ur8:8`SAXweIBgqdd0|47W:=%CTU@' );
define( 'LOGGED_IN_SALT',   'Y?dRDqUl#}F7fqnL`/XQ_Ia4VSz)R8ZS}W4top{BJfeJf:$w{0T`<T[bdJO2}kuA' );
define( 'NONCE_SALT',       'J,-*T<k<l<OIK*+RHRJ^~`G<0i} 1:pu@p}IIoDYDH^4z!>hS8imEf} a@;^:4*d' );

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
