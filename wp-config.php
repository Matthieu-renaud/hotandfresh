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
define( 'DB_NAME', 'hotandfresh' );

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
define( 'AUTH_KEY',         ':s# pyAY)RFSxq*bNdxwlb|_x0)Z(uf-}l7?28@n1e5}f-1^Co ,1Y]=1^JLsgpY' );
define( 'SECURE_AUTH_KEY',  'S/8lDNd);vE).dJ39cou3E6?1G}2)O@p@R%B:K7gbK/naoA9(F5v#bbcM3DrtM?!' );
define( 'LOGGED_IN_KEY',    'gr}Kjf@2@r#Dor=:DS!PWde(*!s:HWgUe4p3w-;7~gR2ya((~Cm+,Te6]THCja;&' );
define( 'NONCE_KEY',        'J2f(~d~xK?BizfnV|dt?K!%(Ydb;2?S+o.|0|3iJuM`$3sCK^3vXPVB&3J/y}z?d' );
define( 'AUTH_SALT',        '|S{izU,P(*uN^=U(1YSc&*6vL}d]DTpzBjEoIjso<SNb>D8HLh>T=VU-$r&O,T87' );
define( 'SECURE_AUTH_SALT', '?gQpQX0_@4Tp/x@b$0P|SzHRkoxLdKs@9dg&cxK.}kWaI+5CZ5&48^|B6@M<_rJo' );
define( 'LOGGED_IN_SALT',   'vud)tA> f(0W+x0tUSWx4U<c4K[@OGH<4fBzmHEDl*,M{~)bTzmU@Jof$zAkLi(R' );
define( 'NONCE_SALT',       '<@$y<_6T71]2,2i82(2ID|3+)N3W2~cBkn@;td>DZY.Ttx_N66GN|#mPP_e>DGI,' );
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
