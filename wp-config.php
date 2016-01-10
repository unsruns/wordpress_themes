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
define('DB_NAME', 'wp_genesis');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'lT5 RKQy-XqQrI6g9G^$tsjx`d~Urc`ZQb]WUNl]gXwY*sR8&Wt..#<=s/?_lQ`O');
define('SECURE_AUTH_KEY',  '{kk:M*0-Hab#N4U8fin{vP73K%XeD{/:t-^oJz-k$*-L)wU1#+N46JyE_&AZ^6x_');
define('LOGGED_IN_KEY',    '-Kqp<>7a!qx/GK.9]iuWUY:/}#s$J;:xxUH5+g!/~Zr1}?jI/0lc]Gin}8`UcGiT');
define('NONCE_KEY',        'IW.%YW;>YP~$b.RhByE_Og7oT8s2%~D850}`cgo9-=y[?i=Mh&(:1nkLin+SDTTf');
define('AUTH_SALT',        '(glz]oboEkRc-U?f#2M;$&WHI^Y9R.V!dEj|Rl&;b  C:S(D8G6Xa/>-K`u5sJRE');
define('SECURE_AUTH_SALT', '^ht{ ]0R}Sp,&WaFqnPfvEoId~ps<GgW@j>8[-^NkH e7(H*hR3 qOgw45o!pU4#');
define('LOGGED_IN_SALT',   '~Ivak+JxKfp+DdhB+eRz._;%-w>|!;&X._#DfCIrT028+T7~)B&PtU:7%9`o?C,e');
define('NONCE_SALT',       'W05RPSGhV/A++{yYqUvV{],YjgKVPx=[|.0giVa;SN>F4H)Jd;_l 54%clOaZb!l');
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