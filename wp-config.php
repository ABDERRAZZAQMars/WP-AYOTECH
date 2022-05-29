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
define( 'DB_NAME', 'db_shop' );

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
define( 'AUTH_KEY',         '$V=5*5idD^gcL9Q<h{GK]/5A3ZMyHJlh&;7eX+U[Gydi,vo*FdBA*yqoAiA8u@$T' );
define( 'SECURE_AUTH_KEY',  '8*ejJmj^3>Mb#U-T%g>9t-o+Ug<gC|uFUlZTOxH-.zH[*lc-ViSG}gkB7_@i?+&A' );
define( 'LOGGED_IN_KEY',    'f6B.OTK #}-f|$5o[@?f7p+j;H3VO>#NFNa#c7IwNIL0,uH85EGy|S*o;shZD)ZI' );
define( 'NONCE_KEY',        'Z_a:7?C1)0EZfD!82%6]OmU2<oJA/k`xu$q.~4rzKkq$WFB-z?dc90xI3,3lUY9v' );
define( 'AUTH_SALT',        'Yy[|x@;F+-VoEgij>rcOHgC64-c$M@8OYq5yb4%+lX8}}|,GMfp!$gIS6;}Cwa90' );
define( 'SECURE_AUTH_SALT', '5E#)nb6g(stF!9?2kIO_JU?1#3KnN&f+`0e!dSQ*h[%xgF..MuX /iYB*@-I1KlP' );
define( 'LOGGED_IN_SALT',   '%FI RUuEh>X+y41d0*qYfdAE1.vA@;,bymvEgOO`:.4EqwQwt4>0)3Np+;OmG52a' );
define( 'NONCE_SALT',       '+q^lfw66eoq7p+E!$9{tU=7AWPM,bT,L-B[; [aNJPSupK@I2HZZH!}j6%H;/cXj' );
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
