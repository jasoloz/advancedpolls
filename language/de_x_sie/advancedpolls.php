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
//6
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
	'ADVANCEDPOLLS_EXT_NAME'				=> 'Advanced Polls',

	'AP_VOTES_HIDDEN'						=> 'Abstimmungen verborgen',
	'AP_POLL_RUN_TILL_APPEND'				=> ' Bis zu diesem Zeitpunkt werden alle Abstimmungen verborgen.',
	'AP_VOTERS'								=> 'Benutzer, die abgestimmt haben',
	'AP_NONE'								=> 'Keine',

	'AP_POLL_CANT_VOTE'						=> 'Sie können bei dieser Umfrage nicht abstimmen. Grund',
	'AP_POLL_REASON_NOT_POSTED'				=> 'Sie haben noch keinen Beitrag in diesem Thema geschrieben.',
	'AP_POLL_VOTES_ARE_VISIBLE'				=> 'Bitte beachten Sie, falls Sie abstimmen, wird Ihre Stimme sichtbar sein.',
	'AP_POLL_DONT_VOTE_SHOW_RESULTS'		=> 'Nicht abstimmen, Ergebnis anzeigen',
	'AP_POLL_RESULTS_ARE_ORDERED'			=> 'Bitte beachten Sie, dass die Ergebnisse nach Anzahl der abgegebenen Stimmen absteigend sortiert sind.',
	'AP_POLL_TYPE_MISMATCH'					=> 'Interner Fehler. Inkonsistente Abstimmungsdaten.',
	'AP_VOTE_CHANGED'						=> 'Sie haben nicht die Berechtigung, Ihre abgegbenen Stimmen nachträglich zu ändern.',
	'AP_TOO_MANY_VOTES'						=> 'Sie haben versucht, zuviele Stimmen abzugeben.',

	'AP_MAX_VOTES_SELECT'					=> array(
		1	=> 'Sie können bis zu <strong>%2$d</strong> Stimmen <strong>%1$d</strong>er Wahlmöglichkeit geben',
		2	=> 'Sie können bis zu <strong>%2$d</strong> Stimmen auf <strong>%1$d</strong> Wahlmöglichkeiten verteilen',
	),
	'AP_GUEST_VOTES'						=> array(
		1	=> '%d Stimme von Gästen',
		2	=> '%d Stimmen von Gästen',
	),

// Posting
	'AP_POLL_VOTES_HIDE'					=> 'Abstimmungsergebnisse verbergen',
	'AP_POLL_VOTES_HIDE_EXPLAIN'			=> 'Wenn diese Option aktiviert ist, werden die Abstimmungsergebnisse verborgen, bis die Umfrage beendet ist.<br />Diese Option funktioniert nur, wenn ein Endedatum für diese Umfrage gesetzt ist.',
	'AP_POLL_VOTERS_SHOW'					=> 'Benutzer, die abgestimmt haben, anzeigen',
	'AP_POLL_VOTERS_SHOW_EXPLAIN'			=> 'Wenn diese Option aktiviert ist, werden Benutzer, die abgestimmt haben, für alle mit entsprechenden Berechtigungen sichtbar sein.<br />Beachten Sie, dass diese Benutzer verborgen bleiben, falls die Abstimmungen geheim sein sollten.',
	'AP_POLL_VOTERS_LIMIT'					=> 'Umfrage einschränken',
	'AP_POLL_VOTERS_LIMIT_EXPLAIN'			=> 'Wenn diese Option aktiviert ist, werden Benutzer nur abstimmen können, wenn sie in diesem Thema bereits etwas geschrieben haben.',
	'AP_POLL_SHOW_ORDERED'					=> 'Ergebnisse sortiert anzeigen',
	'AP_POLL_SHOW_ORDERED_EXPLAIN'			=> 'Wenn die Ergebnisse angezeigt werden, werden sie absteigend nach der Anzahl der erhaltenen Stimmen angezeigt (am meisten Gewähltes zuerst). Ansonsten wird die Sortierung gemäss Umfrageoption verwendet.',
	'AP_RUN_POLL'							=> 'Umfrage starten',
	'AP_RUN_POLL_FOR'						=> 'für',
	'AP_RUN_POLL_UNTIL'						=> 'bis',
	'AP_RUN_POLL_INDEFINITELY'				=> 'unendlich',
	'AP_POLL_END'							=> 'Umfrageende',
	'AP_POLL_END_EXPLAIN'					=> 'Geben Sie das Datum und die Uhrzeit an, zu denen die Umfrage beendet sein soll. Falls eines dieser Felder ausgefüllt ist, überschreibt es die Umfragedauer. Bei leerem Datumsfeld wird das aktuelle Umfrage-Endedatum verwendet; ein leeres Zeitfeld bedeutet 00:00 Uhr. Möchten Sie wieder die Umfragedauer nutzen, müssen Sie diese Felder leeren.',

	'AP_YYYY_MM_DD'							=> 'YYYY-MM-DD',
	'AP_HH_MM'								=> 'HH:MM',
	'AP_POLL_END_INVALID'					=> 'Ungültiges Datum/ ungültige Uhrzeit angegeben',
	'AP_POLL_TOTAL_LOWER_MAX_VOTES'			=> 'Die maximale Anzahl Stimmen für eine Ausahlmöglichkeit kann nicht grösser sein als die Gesamtzahl aller Stimmen für alle Wahlmöglichkeiten',
	'AP_POLL_TOTAL_LOWER_MAX_OPTS'			=> 'Die maximale Anzahl aller Ausahlmöglichkeiten kann nicht größer sein als die maximale Anzahl Stimmen, die auf diese Wahlmöglichkeiten verteilt werden können',

	'AP_POLL_MAX_VALUE'						=> 'Maximale Anzahl Stimmen pro Auswahlmöglichkeit',
	'AP_POLL_MAX_VALUE_EXPLAIN'				=> 'Dies ist die maximale Anzahl Stimmen, die ein Benutzer einer Auswahlmöglichkeit geben kann.',
	'AP_POLL_TOTAL_VALUE'					=> 'Gesamtanzahl Stimmen',
	'AP_POLL_TOTAL_VALUE_EXPLAIN'			=> 'Dies ist die gesamte Anzahl von Stimmen, die ein Benutzer auf alle Auswahlmöglichkeiten verteilen kann.',

	'AP_VOTE_GREATER_THAN_MAXVALUE'			=> 'Sie können nicht mehr Stimmen vergeben, als maximal erlaubt sind.',
));

