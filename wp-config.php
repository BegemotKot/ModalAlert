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
define( 'DB_NAME', 'modal_test' );

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
define( 'AUTH_KEY',         '/M8U=H9dB7b`z+`vS.CYcJT^`VJ?iV0W%jKJ}_SYMi;hFXqbdcgttv!+E8Z1Ei@;' );
define( 'SECURE_AUTH_KEY',  ',-rc3qJ 4%{V/)>m]AA#KZ!s0RA.@QV<pGtO,rWbp?m_e<B,EOL_ljLhh0k.[1`o' );
define( 'LOGGED_IN_KEY',    '!+vL4<))KxZI=i*e]}<:*GOh$44@UP)(Bx+8)pZt|II}:Q>eoEV1Rm9jBDVTkHV1' );
define( 'NONCE_KEY',        '*J5i9-5j;G4a1kK@&zrV7:ferI:Zv4V;0MeAWO,Db:sK:c:y(#Y3}1%m{r}qf}PY' );
define( 'AUTH_SALT',        'TW;*S9-.%7MegU<PX,CUgE8l+1jh/mnNj`8eU,3[vHuGRj{6Q_>qo|$DTGR>83wr' );
define( 'SECURE_AUTH_SALT', '2>r,v6r@u=P3P`=Tzt$q%$Ej4$WrE%Y>)f1TbdH^_a0TLGL$KtplLt1sNIVpxnZ^' );
define( 'LOGGED_IN_SALT',   'NgHU@6E%@b%tvIu`>;S-l@?7F~2}e9?:;c;+Z;L9nSg:AR9]u/~17H1s!RMQsDKx' );
define( 'NONCE_SALT',       '8}/mU&D0}%M FGAm.{Wjbr8d}TH=S#U?G8ptNx&AOV{fG_DU[CJ{lUi/4=ea5!],' );

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
