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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '^x&=YpUGeVclACb>`/|_ &u2i$ltL0<[Oa.P%(1z:_3gx77+pW^.sQWw3|{p$6g&' );
define( 'SECURE_AUTH_KEY',  'y#vYBzVj:!/|yBOk}.ajBOf&h$9`y+P&Fjk;~G 2#`QWa^Q[_ +d=GO^Oog7VN@y' );
define( 'LOGGED_IN_KEY',    '3+<=xF$C/TDskVHd:%4Gz.aPL66Mc W])q8=4]t:3@SK+OebobVdp>5$N[40+E3?' );
define( 'NONCE_KEY',        'XjQm~h3j:uc!8.e;]@bzB-ff1bn67ib8Nm/6L`#;j<|B*UN,EL@v{we~TlgeBK>[' );
define( 'AUTH_SALT',        '.wmOB%AdS7f2@ery1Ri`~Q9y<z% ;1=aBJs$4Em:a*MH.HLMY]yCMDd>BM@09wM<' );
define( 'SECURE_AUTH_SALT', '{8jcvz>HK]PqmPKOt7$rKj(.61m~#peh3%%^c:i>0,x4qk=R}7dS>Z5z&P/@_/^X' );
define( 'LOGGED_IN_SALT',   'jUH3D3OACo?.5T1Sr9A`0_2XvW<_LeJRR;ZIQ[hJgTUA,P1vH>8`<5sEF!?g|7sp' );
define( 'NONCE_SALT',       ';I)@!MZOKh:?hp<>uH=q^`1&cb#R%CF0#NOMpw)X67&bpUbAE<k*tpf}C4wv>;bq' );

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
