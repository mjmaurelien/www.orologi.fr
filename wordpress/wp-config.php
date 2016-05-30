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
 $host = php_uname('n');
 if ($host == "192")
 {
 	define("ENVIRONMENT", "develop");
 }
 else
 {
 	define("ENVIRONMENT", "production");
 }
 if (ENVIRONMENT == "develop")
 {
 	define('DB_NAME', 'orologi');
 	define('DB_USER', 'root');
 	define('DB_PASSWORD', '');
 	define('DB_HOST', 'localhost');
 }
 else
 {
 	define('DB_NAME', 'orologi');
 	define('DB_USER', 'root');
 	define('DB_PASSWORD', '');
 	define('DB_HOST', 'localhost');
 }


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>kj/,~?{ }L92 -epd7,M.A|q7i_:-Vzv6(tt`sHt:*I!R{OW`T#7aCLQ#<g=F_E');
define('SECURE_AUTH_KEY',  '2{X9A 7uXz1]t`ezH_oeo|:6bqLTq{i1.}Y8inh$<@pr;?,e!?:4X77ToiGvSWiu');
define('LOGGED_IN_KEY',    '=pQ7L)]~R|vHbE(-]#fH[$JkUpX4h%k5^N64YM90CrWjq7RN=nVkVpK hXC~#=P3');
define('NONCE_KEY',        'X82<:cJ_Up0l_3>#I#AYkk[6}>yif|SANA3)&:ceQ<GEWdR[l|>kS(G3v6b7X[B$');
define('AUTH_SALT',        'PP4V~!<:;_e^eA&qD+9I61Q>9y]z5Jf0[zfBaYy{To|VGx)a7Mm&B[`Wh0I?J@z.');
define('SECURE_AUTH_SALT', '`W6BMgQe6(+X (g=q),PVbNb-WcGiv4tQsL :<g~z<IkqPi]$IMTA6/kDjjWol!O');
define('LOGGED_IN_SALT',   'rd=Q*5drCvW&?HDe&~]6d6aXZ(ZKt^]>{XJ&!PO6PA-(NlublHj$OmATCPrsh2/4');
define('NONCE_SALT',       '!5&[bh*h?589f,dsIg@S%>=j;@=:^GQ.9WE}]WHs+*5}3;1)pJh^O:pUL45i50ks');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
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
