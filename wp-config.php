<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'a2_dw2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-!ADkWA%.PEG/kCtoO{DxT/XQdiCfD:$>@>p:LMb#?a`b9Y>,:l|Xkh$%$YYWDqO' );
define( 'SECURE_AUTH_KEY',  '{A3G`B]j--^C#19UOeeF#J]wnuge=L)uCScO_Z;s%:%$A>mK@yjV>gz.P&2%to)d' );
define( 'LOGGED_IN_KEY',    'GQ!{E,Q,E;[wd?w0BSyJa~2>*YYDoT*s/`DjSHR !W&d*L+e_$LlZlRi46N_~qi6' );
define( 'NONCE_KEY',        'eK)$ wpu7X*Lv,pL!B!l{nKmMvA`L8}C0]+wE+485hW;RFd^)df<RxmN_Ik~MqPe' );
define( 'AUTH_SALT',        'g#X&a<[7uy_Eg{{_5-JP7E***PPKeFRWB)iU*7Z;u09}J=VqtC7o?K_V|Nx$(G3>' );
define( 'SECURE_AUTH_SALT', ']J^k,-eq,UH&duN<z$-faK=s 0se`:},;#hzL$.F+N8_mZT[q!SIm#ipR ?59Gzl' );
define( 'LOGGED_IN_SALT',   'Xm^[jq,Mz{a^3dD3#54ZutIiC(Y6CmV+iA**bq~XA]:~Lq:I:FjiO<Ff&H8u?BR-' );
define( 'NONCE_SALT',       '_TYCjEBqiy}{@#&6rTE$)h5y@Nn5UM~5?0)HQd54.b+)Y_4&d9&ebMJh(<aeO9hc' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Faqx4K_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
