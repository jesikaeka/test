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
define( 'DB_NAME', 'undangandigital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'uZoNd7Zu4HhsWL9rIRL7LiI3vHtqzH9VvnOUjXvrhZClVEBtPkYLSk3T6r2E8Mg6' );
define( 'SECURE_AUTH_KEY',  '2yrq0GmfadZn0iIertQ1e406d7QSRRXLolbgylEyNjXaBJQoR1RAwLgA9nS1T0DL' );
define( 'LOGGED_IN_KEY',    'QSXvk3ao7i3bq10ig9KMuzEifu3zcz7DdE5f74y2fLQq8ZOGgZuW7cluMO8YzDvD' );
define( 'NONCE_KEY',        'I2PET3PK72uBtVPYxccVSYJms22QYuUfrqaK3IEBHAff32F7APLMB17KFFXKVOL8' );
define( 'AUTH_SALT',        'sRkwRr8gS9mCrZzaZDsAGTs1Z1SOVA4W1grcoCYH0YzNiZ12ahrIsm8AANlmx8t6' );
define( 'SECURE_AUTH_SALT', 'k1cGqrMCRSO3tUfRgHUJ6ix5cxR6IvRye3xHlh4hCMYCd1Qqv8IxXaTQtEb8UjJA' );
define( 'LOGGED_IN_SALT',   'gOKYMJ9oYV4D5hoNqztCLrMRJlowoOZBhN3e5Ox75jpAYyr6IEikhH3ORmhtEXLk' );
define( 'NONCE_SALT',       'lL1C9fHdkffdvJIQQuOlbXZV8PQQl0thoYylM3ZwyDspPWqkCq7ua4CysftLOcJd' );

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
