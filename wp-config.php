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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4 S-?FhA9-L*=oh~%@6KKW (JFRmY@,|.mY9$=ApntP+*ir46Oh{<9~1WC>fT{4.' );
define( 'SECURE_AUTH_KEY',  '-`VxWKA^z1>D(!7V)Sn/bu]^II~Vr4>s<#Ot/6pGO,WA3F*,1yM^/ g{aalbfMir' );
define( 'LOGGED_IN_KEY',    'y^T8rP-;YY1Xw?_RT;}f6K-CQ6RU[yNUDAWxD>1z<-?Gkb,Z?O,fWsOo2a9y0=Ju' );
define( 'NONCE_KEY',        'vJ4.v~9!5H5;Y_M2KW8nSjzoU.-3B&SHj3h>_Sn).q89g{Tkp.V=#2jnJ_t0$SVy' );
define( 'AUTH_SALT',        'OK3q+pp0O0<4d!k2UoG5aKH2~dEWJ`!KEyMQG*;lo<r!d B=d51dIDJv^pRsT%)>' );
define( 'SECURE_AUTH_SALT', 'lg(a:r qvSKc ;Z`E@3e Kc#rj%Kpo}=FU^xV(WP8d<4[}: J:B^,-b{*w4-j@it' );
define( 'LOGGED_IN_SALT',   'Qrl:&M%c-Ps$JGVR^X:WRHa(6#/Xa*H_S [L[Qe=nis@@lB*annQ/j(usF{bLX+|' );
define( 'NONCE_SALT',       'AZ!=w`` F}!2]QNdsy;IPv(J`gfYynx8EEE2SVWAIS~-kB=9a<WHXZRQvvTYWlk}' );
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