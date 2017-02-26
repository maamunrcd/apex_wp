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
define('DB_NAME', 'apex_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.BddT`U2Er!QsER>S1lN)Px-xN]KUF9<S`hgl6);jNV6Z}(K0#sX;g2.`,mqER)c');
define('SECURE_AUTH_KEY',  'RTPdO/X5P]7KVZ/JUh#IlCsHFQrzv:~GJ)LcV]%td>o2FQ-5ii6M%-4yuY8L(QR8');
define('LOGGED_IN_KEY',    '3mHMZqn2WxY{!:~p8b0fr{cnF9`cESfAC)y7x2<a9?MF~L7Ac3<*PNv#3YBlqewL');
define('NONCE_KEY',        'PWJ*v}mfn>iHv{/!#vF0odOCeJ37wPO<SsKJTf]v1A#0c54`{}(QCyqneOsTYX&v');
define('AUTH_SALT',        'RoXY<Nh#uslMe(`wq@FP)6REbH<OYT.@]ZPaZ 208=IJR&o4b: WAq#;}#nR.n/%');
define('SECURE_AUTH_SALT', '%)n[FwPSBs],R4Q4}Y{Yuct$1HNa4~a16$H<<L5(Y-A%GOP1H,y5!l$*Xpn3k-r7');
define('LOGGED_IN_SALT',   '~wRp=CgEF8&k-KwNN4X l?m`1zuQ_?k^;5<L3}/IKxSR]WIWke:iu&&@yg@fWv&|');
define('NONCE_SALT',       '/C@ZA=?/uD/y^9h)9qKEo2=5|v4b1NsL@E&zl]2c./iFhT/5=(9RrCNFA+!ao%31');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
