<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'cauty');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sbhY}YY9c?nf/FI2PLt*R>I(kzq7%|tMB!|9ovlKDEQ6[@W.=y].j/-D;V^{89+y');
define('SECURE_AUTH_KEY',  'rY,++iqe~`5*vch(&{ (ImNy9IBez|_IRT#xV.jG?hG=qsspN1s;1!E>r7?FwWKE');
define('LOGGED_IN_KEY',    'cD>JR98($3_PiF(t}_MDg;r7o*#Dr^XjDH|<-k+~)hz9^4H&6V$!{8>1dU]>hHoP');
define('NONCE_KEY',        'rc1;eeC r;!km:|mfS;JT|NtJ%|rFn!SxN-=#u%NWjSgz3]~Fu`ietV5l*ZtLh/g');
define('AUTH_SALT',        '^4[h,wI0n_@_Jp@.Zoyrl<c-7RagQ|5E|c`:Nym|/0B>Hmq }/JQO&g!-c}26&ZM');
define('SECURE_AUTH_SALT', 'WOabD4#{`>}gQy3OB<5oFBW_)H1JZ+kk=pW,-2t>+T8@VXJMxg%Ile5xp9G(G_bR');
define('LOGGED_IN_SALT',   'C/|+TPy?F+Wh_U{<:K_I%G*%k~(^)XrsgW$O+[M!BaA9S]S((=3?dJaPXwa^5j)E');
define('NONCE_SALT',       '<j(&KHT0iI<<{TrR&qWPl]+G{]KpmB99vRrN1iIUl(]WayB3s#$|SwPLlG4?|<oo');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');