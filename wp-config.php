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
define( 'DB_NAME', 'master-muzik' );

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
define( 'AUTH_KEY',         'upImtQaQKmeBBjSNRNVMlgKUZSJsUQF4vUMOwAD6FRApYGngq1JD7FCma362loTE' );
define( 'SECURE_AUTH_KEY',  'AmY1PmJG7Grb3MbQhIgvLMWYmmaMQb0JC6iWeO6w9bDeP4lwjNyNY1c7LVgkwERx' );
define( 'LOGGED_IN_KEY',    'Ifre7X7bWGauxtGsZ4yhH7pFAIlKgH1xzP4BD75NMIycK0hy0NwP8VyRkUJZiTWg' );
define( 'NONCE_KEY',        'g7TGGtkqpQGWSc2UK4tIDLBb8Swevz0TFK8WDneacXKjvwmL89iUv7rALroQNRks' );
define( 'AUTH_SALT',        'UrmlrW6j2ZobwB5eRh5h14yg0s3s85hqZ9MPNsYUEhu9wb5kT23qCnnmWhU6mZSy' );
define( 'SECURE_AUTH_SALT', 'wWuVPL1YAtHOpMSVw67setVt2TL7gmKeU3fdAAww6eJo76UMI58sPhDMSFNweo42' );
define( 'LOGGED_IN_SALT',   'sK3db4lKGwWqZ02RHXFlUCbgzHjxXGThXMKKj91lyLbmREvqVBHf0OMKfoTSY36L' );
define( 'NONCE_SALT',       'qoWAWZxJQeyClJopjfMBKD2TgDDy6cH4q2rNrBGi1E9T3XZc6ZUvoIC5SyB1oou9' );

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
