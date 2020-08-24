<?php
/**
 *
 * Advanced Polls [Polish]
 * Polish translation by Lech-u (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1616616)*
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
	'ADVANCEDPOLLS_EXT_NAME'				=> 'Zaawansowane głosowanie',

// Viewtopic
	'AP_VOTES_HIDDEN'						=> 'Ukryte głosy',
	'AP_POLL_RUN_TILL_APPEND'				=> ', do tej pory wszystkie głosy będą ukryte.',
	'AP_VOTERS'								=> 'Głosujący',
	'AP_NONE'								=> 'Brak',

	'AP_POLL_CANT_VOTE'						=> 'Nie możesz głosować w tej ankiecie. Powód',
	'AP_POLL_REASON_NOT_POSTED'				=> 'nie pisałeś w tym wątku.',
	'AP_POLL_VOTES_ARE_VISIBLE'				=> 'Jeśli głosujesz, Twój głos będzie widoczny.',
	'AP_POLL_DONT_VOTE_SHOW_RESULTS'		=> 'Nie głosuj, zobacz wyniki, ale stracisz prawo do głosowania',
	'AP_POLL_RESULTS_ARE_ORDERED'			=> 'Wyniki są ułożone według malejącej ilości otrzymanych głosów.',
	'AP_POLL_TYPE_MISMATCH'					=> 'Niespójne dane ankiety, błąd wewnętrzny.',
	'AP_VOTE_CHANGED'						=> 'Nie masz uprawnień do zmiany oddanych głosów.',
	'AP_TOO_MANY_VOTES'						=> 'Próbowałeś oddać zbyt wiele głosów.',

	'AP_MAX_VOTES_SELECT'					=> array(
		1	=> 'Możesz oddać maksymalnie do <strong>%2$d</strong> głos na <strong>%1$d</strong> opcję',
		2	=> 'Możesz oddać maksymalnie do <strong>%2$d</strong> głosów wśród <strong>%1$d</strong> opcji',
	),
	'AP_GUEST_VOTES'						=> array(
		1	=> '%d głos od Gościa',
		2	=> '%d głosy od Gości',
	),

// Posting
	'AP_POLL_VOTES_HIDE'					=> 'Ukryj głosy',
	'AP_POLL_VOTES_HIDE_EXPLAIN'			=> 'Jeśli włączone, głosy będą ukryte do końca głosowania. Ta opcja działa jeśli jest wyznaczony koniec ankiety.',
	'AP_POLL_VOTERS_SHOW'					=> 'Pokaż głosy głosujących',
	'AP_POLL_VOTERS_SHOW_EXPLAIN'			=> 'Jeśli włączone, głosujący będą pokazani tym użytkownikom, którzy mają uprawnienia. Głosujący pozostaną ukryci jeśli głosy są ukryte.',
	'AP_POLL_VOTERS_LIMIT'					=> 'Ograniczenie głosów',
	'AP_POLL_VOTERS_LIMIT_EXPLAIN'			=> 'Jeśli włączone, użytkownicy mogą głosować tylko wtedy gdy pisali w tym wątku.',
	'AP_POLL_SHOW_ORDERED'					=> 'Pokaż kolejność wyników',
	'AP_POLL_SHOW_ORDERED_EXPLAIN'			=> 'Wyświetlane wyniki są uporządkowane według malejącej liczby otrzymanych głosów (najpierw najwięcej głosów). W przeciwnym razie używana jest kolejność opcji ankiety.',
	'AP_RUN_POLL'							=> 'Uruchom ankietę',
	'AP_RUN_POLL_FOR'						=> 'przez',
	'AP_RUN_POLL_UNTIL'						=> 'aż do',
	'AP_RUN_POLL_INDEFINITELY'				=> 'bez końca',
	'AP_POLL_END'							=> 'koniec ankiety',
	'AP_POLL_END_EXPLAIN'					=> 'Określ datę i godzinę zakończenia ankiety. Jeśli którekolwiek z tych pól jest określone, zastępuje ono długość ankiety. Pola daty domyślnie pozostawiono puste, domyślnie bieżąca data zakończenia ankiety; pola godzin pozostawione puste, domyślnie ustawione na 0. Jeśli chcesz powrócić do korzystania z długości ankiety, będziesz musiał wyczyścić wszystkie te pola.',

	'AP_YYYY_MM_DD'							=> 'YYYY-MM-DD',
	'AP_HH_MM'								=> 'HH:MM',
	'AP_POLL_END_INVALID'					=> 'Określona data/czas są niewłaściwe',
	'AP_POLL_TOTAL_LOWER_MAX_VOTES'			=> 'Maksymalna liczba głosów przypadająca na jedną opcję nie może przekraczać łącznej liczby głosów do podziału na wszystkie opcje',
	'AP_POLL_TOTAL_LOWER_MAX_OPTS'			=> 'Maksymalna liczba opcji głosowania nie może przekraczać łącznej liczby głosów do podziału na wszystkie opcje',

	'AP_POLL_MAX_VALUE'						=> 'Maksymalna liczba głosów',
	'AP_POLL_MAX_VALUE_EXPLAIN'				=> 'To jest maksymalna liczba głosów, jaką głosujący może oddać na jedną opcję.',
	'AP_POLL_TOTAL_VALUE'					=> 'Razem głosów',
	'AP_POLL_TOTAL_VALUE_EXPLAIN'			=> 'To jest całkowita liczba głosów, jaką głosujący może rozdzielić na wszystkie opcje.',

	'AP_VOTE_GREATER_THAN_MAXVALUE'			=> 'Nie możesz przydzielić liczby głosów większej niż maksymalna dozwolona wartość.',
));
