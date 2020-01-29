<?php
/**
 *
 * Advanced Polls [Deutsch]
 *
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'AP_TITLE_ACP'					=> 'Advanced Polls',
	'AP_SETTINGS_ACP'				=> 'Einstellungen',

	'AP_TITLE'						=> 'Advanced Polls',
	'AP_TITLE_EXPLAIN'				=> 'Erweitert das Umfragen-System von phpBB mit neuen Funktionen, wie das Verbergen der Abstimmungen bis zum Ende der Umfrage, dem Anzeigen der Benutzer, die abgestimmt haben, dem Beschränken des Abstimmens und mehr.',
	'AP_COPYRIGHT'					=> '© 2015 Wolfsblvt (www.pinkes-forum.de) [<a href="http://pinkes-forum.de/dev/find.php">Mehr Erweiterungen von Wolfsblvt</a>]',

	'AP_SETTINGS'					=> 'Advanced Polls Einstellungen',
	'AP_GLOBAL_SETTINGS'			=> 'Advanced Polls globale Einstellungen (gültig für alle Umfragen)',
	'AP_PER_POLL_SETTINGS'			=> 'Advanced Polls individuelle Einstellungen (gültig für einzelne Umfragen, die Standardwerte werden hier festgelegt)',


	'AP_ACT_VOTES_HIDE'				=> 'Verbergen der Abstimmungsergebnisse',
	'AP_ACT_VOTES_HIDE_EXPLAIN'		=> 'Aktiviert die Option, dass Abstimmungsergebnisse bis zum Ende der Umfrage verborgen werden.',
	'AP_ACT_VOTERS_SHOW'			=> 'Anzeigen von Benutzern, die abgestimmt haben',
	'AP_ACT_VOTERS_SHOW_EXPLAIN'	=> 'Aktiviert die Option, dass für jede Abstimmoption die Benutzer, die abgestimmt haben, angezeigt werden.',
	'AP_ACT_VOTERS_LIMIT'			=> 'Abstimmung einschränken',
	'AP_ACT_VOTERS_LIMIT_EXPLAIN'	=> 'Aktiviert die Option, dass nur Benutzer abstimmen können, die bereits in diesem Thema geantwortet haben.',
	'AP_ACT_POLL_NO_VOTE'			=> 'Nicht Abstimmen',
	'AP_ACT_POLL_NO_VOTE_EXPLAIN'	=> 'Ersetzt den Standardlink "Ergebnisse Anzeigen” durch den Link “Nicht abstimmen, Ergebnis anzeigen", wodurch nach dem Anzeigen der Ergbnisse nicht mehr gewählt werden kann, es sein denn, "Ändern der Abstimmung erlauben" ist aktiviert.',
	'AP_ACT_POLL_SCORING'			=> 'Gewichtete Umfrage',
	'AP_ACT_POLL_SCORING_EXPLAIN'	=> 'Aktiviert die Möglichkeit, einzelnen Wahlmöglichkeiten eine unterschiedliche Stimmenanzahl zuzuweisen.',
	'AP_ACT_INCREMENTAL_VOTES'		=> 'Inkementelle Umfrage',
	'AP_ACT_INCREMENTAL_VOTES_EXPLAIN'	=> 'Aktiviert die Möglichkeit mehrmals abzustimmen, solange noch nicht alle verfügbaren Stimmen abgegeben sind.',
	'AP_ACT_CLOSED_VOTING'			=> 'Umfrage in geschlossenen Themen',
	'AP_ACT_CLOSED_VOTING_EXPLAIN'	=> 'Aktiviert die Möglichkeit, an einer offenen Umfrage teilzunehmen, auch wenn das übergeordnete Thema geschlossen sein sollte.',
	'AP_ACT_POLL_END'				=> 'Umfrageende zu einem Zeitpunkt',
	'AP_ACT_POLL_END_EXPLAIN'		=> 'Aktiviert die Möglichkeit, eine Umfrgae zu einem Zeitpunkt zu beenden (Datum/ Uhrzeit), anstatt eine Umfragedauer festzulegen.',
	'AP_ACT_POLL_NOTIFICATIONS'				=> 'Aktiviere Umfrage Benachrichtigungen',
	'AP_ACT_POLL_NOTIFICATIONS_EXPLAIN'		=> 'Aktiviert das Versenden von Benachrichtigungen an alle Umfrageteilnehmer, sobald eine verborgene Umfrage beendet ist und die Ergebnisse sichtbar sind.',


	'AP_DEFAULT_SHOW_ORDERED'			=> 'Sortierte Anzeige',
	'AP_DEFAULT_SHOW_ORDERED_EXPLAIN'	=> 'Aktiviert die Option, die Ergebnisse absteigend nach der Anzahl der erhaltenen Stimmen anzuzeigen (am meisten Gewähltes zuerst).',
	'AP_DEFAULT_VOTES_CHANGE'			=> 'Standard für "Ändern der Abstimmung erlauben"',
	'AP_DEFAULT_VOTES_HIDE'				=> 'Standard für "Verbergen der Abstimmungsergebnisse"',
	'AP_DEFAULT_VOTERS_SHOW'			=> 'Standard für "Anzeigen von Benutzern, die abgestimmt haben"',
	'AP_DEFAULT_VOTERS_LIMIT'			=> 'Standard für "Einschränkung der Abstimmung"',
));
