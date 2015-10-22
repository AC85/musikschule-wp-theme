<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen mit dem Namen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'havixbeck_db');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'root');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|YoF0v{0~RyWs2zNym1alrAOfh)e>[7Qs1E;q5W-{PCKUpk6ySG&/FBr^vPd?)T%');
define('SECURE_AUTH_KEY',  'P^B)+;+;+,}`-y?9@ISohi$!h8P|mi1/hZMG5wyH<{CNyvr-DQXlDO&+=/Fun.B,');
define('LOGGED_IN_KEY',    'Jo>{>~+:MGs%iC4GLSQS8Hy.fnlY$bvShOi?9dN~?T?m>{#W,#t|S8qcNL%YNw(@');
define('NONCE_KEY',        '>q:g^w9uF-8{Y:[_W4zJLKkcHSm_,>~?=vA/{P#9 e+u80m|UDSg_@YlV+?i}i>)');
define('AUTH_SALT',        'l$6-mYKXx$`%FsYRG[J+x=^SSL@W^G`PY)rq+x/X5{F#x:OMZ-|a8!os|U>OL&(w');
define('SECURE_AUTH_SALT', '67A[rs31$*@S<uv#14Zn|,_EW=/}s5/S;CPmP*o[g IoX]E=PmvIFewB6$L]1qHj');
define('LOGGED_IN_SALT',   'a/jk7B/(TQFm049~U8-4%d%}+KyEEUl2EJ=j$vOs:8*7~;Yn!h$8-yj&y/n#M/Mg');
define('NONCE_SALT',       'eQA%gFdu.#u*RX=or-nc!sh!<%~Jw/+mHN-g+_tl;oe${LC[U`ayJncM(C{.Ns[]');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
