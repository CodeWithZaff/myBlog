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
define( 'DB_NAME', 'totalgamming' );

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
define( 'AUTH_KEY',         '{)>S7|pa6+5Od3)Bd)zH31uCGuJl6Wd#^74:UJ#oQ||U96:>{QegnaR_GQ^^mOyg' );
define( 'SECURE_AUTH_KEY',  'm;|RmvL.A#p(x@j!/eg}m(2I$f21DCJJ^dt5kuZ<D.9JTd<imnBoRHpBQTM{,CM%' );
define( 'LOGGED_IN_KEY',    'f/}ry|.QGG&@1?a^*0|,1GJ.E>|W0nBe_1XSd6dk:cfjbFAD7bg!$~~cp<714&%w' );
define( 'NONCE_KEY',        'bt~|Jp=f+u@lcZ`sm` *gDi0;O@*T=i`l*p8S{Q.wp9ID&}Y(OaU>LeZ)n|CqpY/' );
define( 'AUTH_SALT',        '(E]2I<xaWtuw46A52vM+X@XQY9L6HHAwN^3h`+s4q|4;^P83=O2^OMwlu|C~; XI' );
define( 'SECURE_AUTH_SALT', '0^@c~lEYjP#4?Q_*cm]&+BU$fs?bNE,9tDgOj)c?4vH:FAO}s%X{,>s7=2|pZb/_' );
define( 'LOGGED_IN_SALT',   'MfwnPoA`zA6N:wi}ZR_0@rTxS>;%uC<|Is0eLT25_gnTi#EKDcX>oFWEEVi^;HXe' );
define( 'NONCE_SALT',       '  wT<_VxQjLtp!1$R<Bl-kCcG?k3##a:@%|a$oy%2?qy72vmc32&)l|661E4y#1[' );

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
