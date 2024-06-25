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
define( 'DB_NAME', 'wordpress-6.5.4' );

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
define( 'AUTH_KEY',         'm3?AGVkCUs17DEg6pfsDzCG3FhN=kTPRsYtU!$Bf>}$Qh$n.ryyb3ze}d^5T^COZ' );
define( 'SECURE_AUTH_KEY',  'A8GJ[{4>m1y?k+leF`8Bt^YRTb.b|:Rj=Agb:v^+*y}uk*)YvMP_^xugX,hd.oT}' );
define( 'LOGGED_IN_KEY',    'yq0I^<b2XDriM&.ezDT>T,hKXB=8ND(XA<u<#20[mW[3<^=[rr1x%rd4Ba~|0wi?' );
define( 'NONCE_KEY',        '#b@H2zym &yQ_6[Rlf|6CGdXj(Wc&BB$=x0l9ADrr$Yj_k.bd.[_=R!Y6j.Gyb~y' );
define( 'AUTH_SALT',        '_L?}&$2(@E|wd_+aPDAV-p!!xJ+2gy8F:L_DiVlf3W*_5]hTk43)w0C(3}&||/}(' );
define( 'SECURE_AUTH_SALT', 'OPwA4Wn8>=*owMCGX5sn/xvlv++RgXtdBJ` SI#POp74bCSuoo*A]xB#*bmWg-r,' );
define( 'LOGGED_IN_SALT',   ')ww[QN-o,0J~ve6CLPaqp_`;LkV[33J8Hok:KnY|n}YI?R25m(-{>J.Pfaw[2p?M' );
define( 'NONCE_SALT',       'ps{P(pV.+<Ea;DitzmQBZHm$DMSY59(uCD*lt@Uf!%Ty*P3#QYP2#43de$)PBpzx' );
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
