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
define( 'DB_NAME', 'bitnami_wordpress' );
/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );
/** MySQL database password */
define( 'DB_PASSWORD', '8acb9c7bde' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define('AUTH_KEY', '9a1100df806651033921475f472c1cfa5e5aafdde0515ee027633732ae22039c');
define('SECURE_AUTH_KEY', '85ef1a9fcc21d440a9dbc97fa0783eeb25699e450948ba8a13cbfdcd7bf6f6e7');
define('LOGGED_IN_KEY', '19c8431e9a9c0806fce39f2eaae8698f3e204ede32082df59e6514faa7869901');
define('NONCE_KEY', '767ce1c77e586e0d20350e31765a31e6a13d005fa43c5828d05d2f048c1b60e1');
define('AUTH_SALT', '85bc0d340d1fa31b9810e77142b42a31c202fad09fb2668d05566d8b3b5f3edd');
define('SECURE_AUTH_SALT', 'c41aa6b64569f51104e791871cc0961c9aebd40bc988ca1be86a539bf8eaf749');
define('LOGGED_IN_SALT', '32e47cd6778f6b602fca97579723869bc218c46f7b96b5843a53c4f7a4ca6af7');
define('NONCE_SALT', '519a0987a59c5c3b836847a469f03b8a068454ddd8ef5af773fb0102c4111407');
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
define('FS_METHOD', 'direct');
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','https://example.com');
 *  define('WP_SITEURL','https://example.com');
 *
*/
if ( defined( 'WP_CLI' ) ) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}
define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');
//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
            unset( $methods['pingback.ping'] );
            return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
