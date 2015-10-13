<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '3`tfu)g`$Nep%faUrU{-y(#EZXa)BkSYFB0y)V~I/O-Kbb[WwgVvd+``cFZR+Xu9');
define('SECURE_AUTH_KEY',  '4#:eYGUdW%]-RkFJe/]W2l?O`d^b):]P.#.[o[RSwCv!mxsB7ktD| W3AUy[BM-L');
define('LOGGED_IN_KEY',    'e6g&lUi -<W}[#h>&}}X$2y/[$ckXe~9$9HeU&C()X#<yy{FN2&y9gpv3ZzPCFEw');
define('NONCE_KEY',        ';g,M%Yv-$y8R0n00Q@2:an;7Gefe$E9T^d#<0V>fQ+whFHY8;S`a_Zv_!_QDl?.(');
define('AUTH_SALT',        'e3B<aW^{,Ex_QN65R`>B u0YY|)4~_N-^SS~V~Q|#nI-_|g45#OIreY:V(+?>*.y');
define('SECURE_AUTH_SALT', 'LgX[4f:Q]tELDb1<K5[&q[6+B*r<~f~U]l?$t!OVtZ;Y|y2?{%=I[8^D+d8ZPhI%');
define('LOGGED_IN_SALT',   'v)h3BPGp(5CcV?,sn[fS8(4+0BMT{zK~w8U.{D,Tl~rI]8GXtFZw Uc~@q7+[QB7');
define('NONCE_SALT',       '6I?Hg>-2gHn%]+[#ZN`IVK||]SwXb_Vrfa&J;#*rub -S>5nUA-Qp-z`5?/a4@c[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'inn2k15_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour obtenir plus d'information sur les constantes
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
