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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// L'url de la page d'accueil de mon site
define('WP_HOME','http://[l_url_de_mon_site]');
// l'url à laquel se trouve mon installation de WordPress
define('WP_SITEURL','http://[l_url_de_mon_site]/wp');

// J'indique à WordPress comment il doit télécharger des fichiers
// Ici: de manière direct (sans passer par un serveur etc.)
define('FS_METHOD', 'direct');

// Je vais indiquer à WordPress où se trouve le "vrai" dossier "wp-content"
// Ici je spécifie l'url de mon dossier
define( 'WP_CONTENT_URL', 'http://[l_url_de_mon_site]/content' );
// Ici le chemin physique vers le dossier
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );

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
// define( 'WP_DEBUG', false );

// define('ENVIRONEMENT', 'dev'); // Je suis en environement de DEVELOPEMENT
// define('ENVIRONEMENT', 'testing'); // Je suis en environement de TEST
define('ENVIRONEMENT', 'prod'); // Je suis en environement de PRODUCTION

if (ENVIRONEMENT == 'dev') {

  define('WP_DEBUG', true);
  define('WP_DEBUG_DISPLAY', true);
  define('WP_DEBUG_LOG', true);
  define('SCRIPT_DEBUG', true);

  // Je ne désactive PAS l'installation & la mise à jour des plugins/thèmes
  define('DISALLOW_FILE_MODS', false);

  // Je bloque les révisions en local (pas besoin)
  // Par défaut c'est illimité.
  // https://wordpress.org/support/article/editing-wp-config-php/#disable-post-revisions
  define('WP_POST_REVISIONS', false);

  // Je désactive l'utilisation de la corbeille
  // https://wordpress.org/support/article/editing-wp-config-php/#empty-trash
  define('EMPTY_TRASH_DAYS', 0);

} else if (ENVIRONEMENT == 'testing') {

  define('WP_DEBUG', true);
  define('WP_DEBUG_DISPLAY', false);
  define('WP_DEBUG_LOG', true);
  define('SCRIPT_DEBUG', true);

  // Je ne désactive PAS l'installation & la mise à jour des plugins/thèmes
  define( 'DISALLOW_FILE_MODS', false );

  // Je bloque le nombre de révision par contenu à 15
  // Par défaut c'est illimité.
  // https://wordpress.org/support/article/editing-wp-config-php/#specify-the-number-of-post-revisions
  define('WP_POST_REVISIONS', 15);

  // Je laisse les élèments dans la corbeille pendant 60 jours
  // Au dela, ils seront automatiquement supprimés
  // https://wordpress.org/support/article/editing-wp-config-php/#empty-trash
  define('EMPTY_TRASH_DAYS', 60);

} else {

  define('WP_DEBUG', false);
  define('WP_DEBUG_DISPLAY', false);
  define('WP_DEBUG_LOG', false);
  define('SCRIPT_DEBUG', false);

  // Désactive l'installation & la mise à jour des plugins/thèmes
  define( 'DISALLOW_FILE_MODS', true );

  // Je bloque le nombre de révision par contenu à 15
  // Par défaut c'est illimité.
  // https://wordpress.org/support/article/editing-wp-config-php/#specify-the-number-of-post-revisions
  define('WP_POST_REVISIONS', 15);

  // Je laisse les élèments dans la corbeille pendant 60 jours
  // Au dela, ils seront automatiquement supprimés
  // https://wordpress.org/support/article/editing-wp-config-php/#empty-trash
  define('EMPTY_TRASH_DAYS', 60);
}

// Bloquer l'éditeur embarqué
// https://wordpress.org/support/article/editing-wp-config-php/#disable-the-plugin-and-theme-editor
define( 'DISALLOW_FILE_EDIT', true );

// Désactivation des mises à jour automatique de WordPress
// https://wordpress.org/support/article/editing-wp-config-php/#disable-wordpress-auto-updates
define('AUTOMATIC_UPDATER_DISABLED', true);

// Désactivation de la mise à jour du coeur de WordPress
// https://wordpress.org/support/article/editing-wp-config-php/#disable-wordpress-core-updates
define('WP_AUTO_UPDATE_CORE', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
