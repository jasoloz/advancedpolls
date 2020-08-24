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
	'AP_TITLE_ACP'					=> 'Zaawansowane głosowanie',
	'AP_SETTINGS_ACP'				=> 'Ustawienia',

	'AP_TITLE'						=> 'Zaawansowane głosowanie',
	'AP_TITLE_EXPLAIN'				=> 'Zaawansowane głosowanie to podstawowy system ankiet phpBB z nowymi funkcjami, takimi jak ukrywanie głosów do końca, pokazywanie wyborców, ograniczanie głosów i nie tylko.',
	'AP_COPYRIGHT'					=> '© 2015 Wolfsblvt (www.pinkes-forum.de) [<a href="http://pinkes-forum.de/dev/find.php">Więcej rozszerzeń od Wolfsblvt</a>]',

	'AP_SETTINGS'					=> 'Zaawansowane głosowanie - Ustawienia',
	'AP_GLOBAL_SETTINGS'			=> 'Zaawansowane głosowanie - ustawienia ogólne (zastosowanie do wszystkich ankiet)',
	'AP_PER_POLL_SETTINGS'			=> 'Zaawansowane głosowanie - ustawienia poszczególnych ankiet (do wyboru w każdej ankiecie, z ustawioną tutaj wartością domyślną)',

	'AP_ACT_VOTES_HIDE'				=> 'Pokazuj głosy',
	'AP_ACT_VOTES_HIDE_EXPLAIN'		=> 'Wybierz tę opcję, żeby ukryć oddane głosy do końca głosowania.',
	'AP_ACT_VOTERS_SHOW'			=> 'Pokazuj głosujących',
	'AP_ACT_VOTERS_SHOW_EXPLAIN'	=> 'Wybierz tę opcję, żeby pokazać głosujących przy każdej opcji głosowania.',
	'AP_ACT_VOTERS_LIMIT'			=> 'Ogranicz liczkę głosujących',
	'AP_ACT_VOTERS_LIMIT_EXPLAIN'	=> 'Wybierz tę opcję, żeby ograniczyć głosujących do użytkowników piszących w tym wątku.',
	'AP_ACT_POLL_NO_VOTE'			=> 'Pokazuj Brak głosu',
	'AP_ACT_POLL_NO_VOTE_EXPLAIN'	=> 'Zmienia standardowy link „Wyświetl wyniki” na link „Nie głosuj, wyświetl wyniki”, który nie zezwala na głosowanie po wyświetleniu wyników, chyba że wybrano opcję „Zmień głosy”.',
	'AP_ACT_SHOW_ORDERED'			=> 'Pokazuj kolejność',
	'AP_ACT_SHOW_ORDERED_EXPLAIN'	=> 'Aktywuje opcję pokazania wyników w kolejności malejącej liczby otrzymanych głosów (najpierw głosowano najwyżej).',
	'AP_ACT_POLL_SCORING'			=> 'Pokazuj przewijanie głosowania',
	'AP_ACT_POLL_SCORING_EXPLAIN'	=> 'Aktywuje możliwość przypisywania różnych wyników do opcji ankiety.',
	'AP_ACT_INCREMENTAL_VOTES'		=> 'Pokazuj stopniowanie głosów',
	'AP_ACT_INCREMENTAL_VOTES_EXPLAIN'	=> 'Aktywuje możliwość głosowania stopniowego, gdy nie wyczerpałeś dostępnych możliwości głosowania.',
	'AP_ACT_CLOSED_VOTING'			=> 'Pozwalaj na głosowanie zamknięte',
	'AP_ACT_CLOSED_VOTING_EXPLAIN'	=> 'Włącza możliwość głosowania w otwartej ankiecie, nawet jeśli odpowiedni temat jest zablokowany.',
	'AP_ACT_POLL_END'				=> 'Pokazuj dokładny koniec ankiety',
	'AP_ACT_POLL_END_EXPLAIN'		=> 'Pozwala określić, kiedy ankieta kończy się według daty / godziny, zamiast tylko określać czas trwania ankiety od jej rozpoczęcia.',
	'AP_ACT_POLL_NOTIFICATIONS'				=> 'Pokazuj powiadomienia ankiety',
	'AP_ACT_POLL_NOTIFICATIONS_EXPLAIN'		=> 'Aktywuje wysyłanie powiadomień do wszystkich wyborców o ukrytej ankiecie po zakończeniu ankiety, dzięki czemu wyniki są widoczne.',

	'AP_DEFAULT_VOTES_CHANGE'		=> 'Wybierz domyślne ustawienia zmiany oddanego głosu',
	'AP_DEFAULT_VOTES_HIDE'			=> 'Wybierz domyślne ustawienia ukrytych głosujących',
	'AP_DEFAULT_VOTERS_SHOW'		=> 'Wybierz domyślne ustawienia ilości głosujących',
	'AP_DEFAULT_VOTERS_LIMIT'		=> 'Wybierz domyślne ustawienia limitu głosujących',
	'AP_DEFAULT_SHOW_ORDERED'		=> 'Wybierz domyślne dla pokazania kolejności',
));
