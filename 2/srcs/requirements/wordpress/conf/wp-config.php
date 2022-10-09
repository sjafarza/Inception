<?php
define('WP_CACHE', true);
define( 'WP_MEMORY_LIMIT', '256M' );
/**
* La configuration de base de votre installation WordPress.
*
* Ce fichier est utilisé par le script de création de wp-config.php pendant
* le processus d’installation. Vous n’avez pas à utiliser le site web, vous
* pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
* valeurs.
*
* Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'env_MYSQL_DATABASE' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'env_WORDPRESS_DB_USER' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'env_WORDPRESS_DB_PASSWORD' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'env_WORDPRESS_DB_HOST' );

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
define( 'WP_CACHE_KEY_SALT', 'env_DOMAIN_NAME');
#=== for generate my unique security key===  https://www.wpbeginner.com/glossary/security-keys/
define('AUTH_KEY',         '}bMTfFWN u~+`h>or|Ym$q}qQp60 QK}Vatdd F3#ii?9~)r>+&9L$>mPknNv>V5');
define('SECURE_AUTH_KEY',  '+.+ap.u`7=_KGqSnyj+FfU$7ws.p/76 #dL:_QpR-4_W7G#d/O-UyRzLL9Aw;1`N');
define('LOGGED_IN_KEY',    '7rAj,ANGoIk`c;V>/q<f^X!gw m.^E-!Iv>/>SANi42IP5GT<]nMfq)@Oj8={ndo');
define('NONCE_KEY',        '1M|_0FDX#3=}@7|>:(|4n=|wo|S3OwE+(/HAwA%[(~>/<b?2$AqTjC%)}1LElwW3');
define('AUTH_SALT',        ' vSg+~p6Fq*C}p0ihU?e OFPP|IJP|(@#=x SGwto%e{Uw+CPav1^$HF)eo,i;oJ');
define('SECURE_AUTH_SALT', '|bW. &qX$0Mi9gAfZY~33iA|R=7y)em9s3.0-8+Lb_]^hTnhmv7$aj[Oc<l/z66X');
define('LOGGED_IN_SALT',   'Ij.MK`oE8k(B<,`Jh2}|r/@ee/&Y$^H.5>D=&O~{Vd42|kH K{+@xQCeY)D0yoHP');
define('NONCE_SALT',       'oDR)@q%IR{&^E/%%7K5v#WI-gbvSJrzYA. JEW_n%9-:1R!.Q{h*Jd7{6|sjw O$');
    

/**#@-*/

/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique.
* N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
//1  define( 'WP_DEBUG', false );
define("WP_DEBUG", true);
define( 'WP_REDIS_HOST', 'redis' );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
/*2 if ( ! defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );*/
if (!defined("ABSPATH"))
    define("ABSPATH", __DIR__ . "/");    

/** Réglage des variables de WordPress et de ses fichiers inclus. */
