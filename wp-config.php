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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ministro' );

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
define( 'AUTH_KEY',         '?1:gjF!i4WaOztr3f6AARYfjN6^B5hJk<aV-w[064Pl{%$5n]h[rW$9F=mqN3E@L' );
define( 'SECURE_AUTH_KEY',  'Y-r.fRy0U]8rYMJ8t_4odoY^9Wp:)&/1F3EL&(9OaAOd7_T]Zv%7B4hiaYPU!||U' );
define( 'LOGGED_IN_KEY',    'z3opZXP+$QJd s^$N`BLfiG)?4Sztn38QA|I!TEKJI?wDPh^ieRc0C913nWyFaHL' );
define( 'NONCE_KEY',        ')Uc-uz GQ!W9?v`004vF.}<VO_91=+/epvniJqZr*F`{=qX?rxV!kE)^!}!4SDL5' );
define( 'AUTH_SALT',        ',)_6fbNX2Lw4PCno|xG0sic|X7sz|cYzO94CeRcmGolVKn*O$9|#A>r%;OLT1-)e' );
define( 'SECURE_AUTH_SALT', 'KDT{0kbGCWzKk;TEOnQ9fqMzJ3ZZOiI!+1lbO.n&QmKDt9VOMFBjx-<ysd}CQ3]^' );
define( 'LOGGED_IN_SALT',   '.z!-8UZ(K5~z9 $cQ2YL][jq3d}wIPN5I0mqLTW|ed.}d&$B:uFF%n5SA&GaGKP:' );
define( 'NONCE_SALT',       'R;i-)DwZ!w16*C!Re%NF*%d$Roz`wAjLnd/,ZH<BR5g*iM_?e2v/Ln~64u7Zh`J+' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

@ini_set( 'upload_max_size' , '400M' );