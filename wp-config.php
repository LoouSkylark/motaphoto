<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'motaphoto' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '5vngAJY@Z`1a5D^gw=Ge+y%RL?GA=j00:pSU0s=+fye}.[mnnQ6z]yz?`JorvZ+j' );
define( 'SECURE_AUTH_KEY',  ' #;XdS,BjFThh(,4[NsF)<u_!` JD2|K&x;910}bD}J7mKjc 4N@;eq7pyEu}-d3' );
define( 'LOGGED_IN_KEY',    '2N[usxA^NBYJi(![tS@MIQEhD%]Ba1mLWMTs{hPM,S Go5 RHAHIcQHXkjN(VvOp' );
define( 'NONCE_KEY',        'S`>Az@cZdVg~IcI4%7KXSMWqKRM9dHD)c42XA~j]|7IO1Uc&e36.1)_xh6;(0gs|' );
define( 'AUTH_SALT',        'qlyGXqI+J>-GfP6^B#?KwQ z+D;)~@423*, m6jkuMK`FCta~!)Re/NhLhYFq=t}' );
define( 'SECURE_AUTH_SALT', '!9t:Rq.WhSra;^AOra&=2e#llnj|%2}!L ;*5>%Ww9;;*K6i?qY$~/1p*CiUK+P2' );
define( 'LOGGED_IN_SALT',   '5 Y$ZYe|wOq-Y4GIdv`+kMD}E51GvI5`Ei$B-a)tk[m7DS;,~.qqoCUTpGn{rv|C' );
define( 'NONCE_SALT',       'br#U5XFLTTTOFn1VkfOcKJ1X;D=6j#v!#IhVpg ^P|U?>D0;N#MBd|,@Lu/v_<G+' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
