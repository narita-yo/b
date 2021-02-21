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
define( 'DB_NAME', 'huxofyww_wp5' );

/** MySQL database username */
define( 'DB_USER', 'huxofyww_wp5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A.otfUaegVZeikQzKQo96' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'YPggpSwC7MGAsbW5Y5LarEnZlD9LgvFLqkfyBmhnuET1jUP4PmNiyaqKb2SivzPR');
define('SECURE_AUTH_KEY',  'wlRpMeOcQZCAfIFcrFJ4fxpQqrENculuEWFYjYyoAvPkVqVYQASaIYx8RmZyyZ6r');
define('LOGGED_IN_KEY',    'Qzg23P2OCbCN3Q4NFRNeVfOomAPN4TYrOehTt0kbyZ4ROzieTdzZUGYvF034Y3cs');
define('NONCE_KEY',        '2wGiVAzDGiqE15BAJXYiV3CNkOKnRTB262CYhIoycPevqHGpwE647fkoKoQZE1mQ');
define('AUTH_SALT',        'MYpldxnmmQlDHA09mJQnIeAqBvmIhNnQuEhqEvn3I2034gaCATTF2qgmUYV8NLIR');
define('SECURE_AUTH_SALT', 'E3kXhvHQ9o5jycDo5WA53mfXFzZTpG6hlM4CZNJLzyF3ahD1CbSlOlK3QrNIMI1G');
define('LOGGED_IN_SALT',   'mpKfPwfh9s625rXeZByEiQLbJDSMFqkurlNb5RLK4vd2aaLUi5aZSZdLw5fyxTU8');
define('NONCE_SALT',       'qTfozCrp9Knfwdf173m8HQGWZAiH9ZpUhwywW9BCngabAu1XjKmcKPyoexk9uFGq');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
