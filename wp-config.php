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
define('DB_NAME', 'chngk556_wp26');

/** MySQL database username */
define('DB_USER', 'chngk556_wp26');

/** MySQL database password */
define('DB_PASSWORD', '136]Sp2(eG');

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
define('AUTH_KEY',         'd50g0scjksftqx656lktzwt92q9j1pi37h9lq9astapj1ljkjurdwis9boturvai');
define('SECURE_AUTH_KEY',  '6zwdjqzdsaymyejyeqi4jmf0ykpfrojef5urttwr82yv81b5z4mqcgxpbke3aclf');
define('LOGGED_IN_KEY',    'q9q9pupatmdokswwgrriajcjy4rwncadas5qnlrd7qcmqzetcze6mfp78khzsz8g');
define('NONCE_KEY',        'lcri19udjanxie6dr25bid3sbbwltjz7yy48asfbrxsksqz0vmcdv2xbcfgxs4ca');
define('AUTH_SALT',        'hcbtx5uaachelim2zsjpdyvgjxwig0de3c3my6bpmx082xwcftfgo8ch9tcvqlyg');
define('SECURE_AUTH_SALT', 'kj003rv8gd9hkr4vm07p7dcsgwuxumtrqdclfsl5iilixlsci4pgvgsml6xlcabo');
define('LOGGED_IN_SALT',   '1mziklg1d70zvnjamll40jtyl8mqrshmtztrcipa3bv2memhhb5zn45bc0osplwl');
define('NONCE_SALT',       'owg2fhuxqfac8hwpg1upjfrulj1ihdhpgqqgergf2ijs073lhwqq01o7jbuhfcvd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpum_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
