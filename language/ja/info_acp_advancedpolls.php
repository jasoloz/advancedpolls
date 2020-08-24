<?php
/**
 *
 * Advanced Polls [Japanese]
 * Japanese translation by tk6904 (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1658156)*
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
	'AP_TITLE_ACP'				=> 'Advanced Polls',
	'AP_SETTINGS_ACP'			=> '設定',

	'AP_TITLE'				=> 'Advanced Polls',
	'AP_TITLE_EXPLAIN'			=> 'phpBBのコア投票システムを、投票終了まで結果を非表示にする、投票したユーザーを表示する、投票可能ユーザーを制限するなどの新機能を使用して進化向上します。',
	'AP_COPYRIGHT'				=> '© 2015 Wolfsblvt (www.pinkes-forum.de) [<a href="http://pinkes-forum.de/dev/find.php">Wolfsblvt が提供するその他の拡張モジュール</a>]',

	'AP_SETTINGS'				=> 'Advanced Polls の設定',
	'AP_GLOBAL_SETTINGS'			=> 'Advanced Polls のグローバル設定（全ての投票に適用されます）',
	'AP_PER_POLL_SETTINGS'			=> 'Advanced Polls の投票ごとの設定（投票ごとに選択可能、デフォルト値はここで設定）',

	'AP_ACT_VOTES_HIDE'			=> '投票結果非表示を有効にする',
	'AP_ACT_VOTES_HIDE_EXPLAIN'		=> '投票が終了するまで投票結果を非表示にすることを選択するオプションを有効化します。',
	'AP_ACT_VOTERS_SHOW'			=> '投票者表示を有効にする',
	'AP_ACT_VOTERS_SHOW_EXPLAIN'		=> '各投票オプションに対して投票投票者を表示することを選択するオプションを有効化します。',
	'AP_ACT_VOTERS_LIMIT'			=> '投票者制限を有効にする',
	'AP_ACT_VOTERS_LIMIT_EXPLAIN'		=> 'このトピックで既に投稿したユーザーにのみ投票を制限することを選択するオプションを有効化します。',
	'AP_ACT_POLL_NO_VOTE'			=> '無投票を有効にする',
	'AP_ACT_POLL_NO_VOTE_EXPLAIN'		=> '標準の「結果を表示する」リンクから「投票せずに結果を表示する」リンクに変更します。「投票を変更する」を選択しない限り、結果を表示した後に投票できません。',
	'AP_ACT_SHOW_ORDERED'			=> '得票順表示を有効にする',
	'AP_ACT_SHOW_ORDERED_EXPLAIN'		=> '得票の降順（得票数の高いもの順）で結果を表示することを選択するオプションを有効化します。',
	'AP_ACT_POLL_SCORING'			=> '投票スコアリングを有効にする',
	'AP_ACT_POLL_SCORING_EXPLAIN'		=> '投票オプションに異なるスコアを割り当てる可能性を有効化します。',
	'AP_ACT_INCREMENTAL_VOTES'		=> '段階投票を有効にする', // Activate incremental voting
	'AP_ACT_INCREMENTAL_VOTES_EXPLAIN'	=> '利用可能な投票機能を使い果たしていない間、段階的に投票する可能性を有効化します。',
	'AP_ACT_CLOSED_VOTING'			=> '閉鎖トピックの投票を有効にする', // Activate closed voting
	'AP_ACT_CLOSED_VOTING_EXPLAIN'		=> '対応するトピックが閉鎖されている場合でも、公開投票に投票する可能性を有効化します。',
	'AP_ACT_POLL_END'			=> '投票終了設定を有効にする',
	'AP_ACT_POLL_END_EXPLAIN'		=> '投票が開始されてから投票期間を指定するだけでなく、日付/時刻で投票が終了するタイミングを指定できます。',
	'AP_ACT_POLL_NOTIFICATIONS'		=> '投票通知を有効にする',
	'AP_ACT_POLL_NOTIFICATIONS_EXPLAIN'	=> '投票結果を非表示にした投票が終了したときに全ての投票者に通知を送る機能を有効にします。それに従い、投票結果が見えるようになります。',

	'AP_DEFAULT_VOTES_CHANGE'		=> '再投票許可の設定をデフォルトにする',
	'AP_DEFAULT_VOTES_HIDE'			=> '投票結果非表示の設定をデフォルトにする',
	'AP_DEFAULT_VOTERS_SHOW'		=> '投票者表示の設定をデフォルトにする',
	'AP_DEFAULT_VOTERS_LIMIT'		=> '投票者制限の設定をデフォルトにする',
	'AP_DEFAULT_SHOW_ORDERED'		=> '得票順表示をデフォルトにする',
));
