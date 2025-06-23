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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'T2|3/}f9x^Sr/RR;>j5}e`dH=n|CFO}X7YY:5z)qg8<dtk6r:jCpt`fx;)y1SijY' );
define( 'SECURE_AUTH_KEY',  'IVgn(.SST~{7 oAQ$jubEuI1@tc}$ pQI*=TlVD$Uh58x,UT|Kt^PqSTWF.`$R(B' );
define( 'LOGGED_IN_KEY',    'fWVs-~7xki(*6D$LFHI]xlW1F[~p#U#K@G|@8 j[R$,K $#`L;4oE+HDi!GK`Jx&' );
define( 'NONCE_KEY',        '+uH*=b+ED)ge9T$P$w<}HYd#>Gh@x_.tr*R0n~qo9HJU6zcK8)kX.A/r~v78S!1s' );
define( 'AUTH_SALT',        'u{BD[UE{@0DzM);kE4N-Rau-gwl>kJVA*YwcXONLRt=25.Rero=Fl}8}C=J?7zkI' );
define( 'SECURE_AUTH_SALT', 'r9n@.%o_D6=uU%mdZFKje[+gj/H<T)zQeL,)iL>bFWdi^lq(qEJHI>,;p!rB6va^' );
define( 'LOGGED_IN_SALT',   '$*&XQI$yGhq=nxdJJ70QtdnKcZ5:q)1Ccp&0V?lG?u(<gL,es0[bn;KEp+.X]|KS' );
define( 'NONCE_SALT',       'J@T<>>Yl@kD:._ydyNmSQQ]4-ph` v8.He<+)UcWJeHp]K{(mCAm~O0__*PaNiqG' );

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
