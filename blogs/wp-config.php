<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multispeciality_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         'g-g&g=g^g%g$g#g@g!g~g`g+g-g_g=g_dental_clinic_auth_key' );
define( 'SECURE_AUTH_KEY',  'a-a&a=a^a%a$a#a@a!a~a`a+a-a_a=a_dental_clinic_secure_auth_key' );
define( 'LOGGED_IN_KEY',    't-t&t=t^t%t$t#t@t!t~t`t+t-t_t=t_dental_clinic_logged_in_key' );
define( 'NONCE_KEY',        'h-h&h=h^h%h$h#h@h!h~h`h+h-h_h=h_dental_clinic_nonce_key' );
define( 'AUTH_SALT',        'e-e&e=e^e%e$e#e@e!e~e`e+e-e_e=e_dental_clinic_auth_salt' );
define( 'SECURE_AUTH_SALT', 'c-c&c=c^c%c$c#c@c!c~c`c+c-c_c=c_dental_clinic_secure_auth_salt' );
define( 'LOGGED_IN_SALT',   'o-o&o=o^o%o$o#o@o!o~o`o+o-o_o=o_dental_clinic_logged_in_salt' );
define( 'NONCE_SALT',       'd-d&d=d^d%d$d#d@d!d~d`d+d-d_d=d_dental_clinic_nonce_salt' );

/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
