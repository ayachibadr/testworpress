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
define( 'DB_NAME', 'testworpress_db' );

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
define( 'AUTH_KEY',         'f?0Iqc-xffqPTHO0D~&Sm%J38f7YNH}zV{`Wi)i1,Vh(;@4zk_kGD ^SKF|E.xSE' );
define( 'SECURE_AUTH_KEY',  'pm -Y.j.W8||(+PoKtK=tlN}:|C ?cIGOGn>R??Amk+2HvR)J=X%/k^t5n(XK) _' );
define( 'LOGGED_IN_KEY',    '!gUQ/hr.gILe6ewK&Z*D12Em%~9A[=#Ymlaf(K@7g4}UZN1QgRM)o,YS[+rZ38`j' );
define( 'NONCE_KEY',        'fl]~a.L_=R~}xpba/,3,QZNEmT[[NH/V  X+QV7S=+egZ1M<:n+);`&j%vC_Mc|)' );
define( 'AUTH_SALT',        'yP)b7oyCb!HO/iRFK%#D4{LD9pFfb*>z->THDQ7ag;Sj|t:n?Fa&8}xnoy-dse:&' );
define( 'SECURE_AUTH_SALT', 'ZJJ-.Uf!mweo]T$[1u?_rt>pF*whu0OmUEF+sh$,Q:6fmP8}7$tfCqFHvG:B+=t$' );
define( 'LOGGED_IN_SALT',   '8(IAxi8/O8HVCBa=eDSC()9[v7I3/9=%_1|O${y7REM:ZbL??$Htkuek#)B`1`jj' );
define( 'NONCE_SALT',       'M:L]$qhvbN`R05n7fMOVk*aLtJee8C:@N]M x):gdl`=o]ih5puP;uBiY[ljvUVP' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
