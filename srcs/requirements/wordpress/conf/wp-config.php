<?php

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mdb42');

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'lnaidu' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'passwd' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 */
define('AUTH_KEY',         '>`ArIo@rR| *`<Adq0E9rR0O9fyo3R+}c3oP<9>O }R0Gu)}&bqiJd2_6C*)5j-V');
define('SECURE_AUTH_KEY',  'mrTrSu*_EIZH@ld1dhX Kw2M7|J2[(dKe<Wky[Q/dKKU{BeL8OC-O/>SG-GY-p?D');
define('LOGGED_IN_KEY',    '|a{i0>1rCLzG}yCVQ[`-$(D3^^ZhYO*7eZ}h_xXRcxeX[P9]@6<In:OpQB>3l+=b');
define('NONCE_KEY',        '!+Uq*D6s8jA|L~+1+H.3(|jeo2t3pz3zt6vv+)FS#BT|@B0H_`B-s{~xMc&=6>gZ');
define('AUTH_SALT',        'IuIlb!4zuj Zra.]qCjzq(y[#epih)PEB)g(h9~?Kr[]$cys?!>3EV=>(3B%,b|=');
define('SECURE_AUTH_SALT', 'Vfh{lL:^9%*P^8LG+jSc7P2|j@A(/gvssh*,nHvLZSu~1Ig/2?[<,#MZyg?5[P*j');
define('LOGGED_IN_SALT',   '4a@MR+p+Gb>`/YVjZc|?VBhg5vXA(-8N%_44.f* -uNpm|2*+%{-^qZ1Z,Beg6ob');
define('NONCE_SALT',       'NNn$5}ahW P2$inKX>t(*5x/;M3|h{5+OQN5TS8b94SO|PFwBahTk]NzMyK{beq_');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', __DIR__ . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
