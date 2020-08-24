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
	'ADVANCEDPOLLS_EXT_NAME'			=> 'Advanced Polls',

// Viewtopic
	'AP_VOTES_HIDDEN'				=> '結果は表示されません',
	'AP_POLL_RUN_TILL_APPEND'			=> '。終了まで投票結果は非表示となります。',
	'AP_VOTERS'					=> '投票者',
	'AP_NONE'					=> 'なし',

	'AP_POLL_CANT_VOTE'				=> 'この投票には参加できません。理由：',
	'AP_POLL_REASON_NOT_POSTED'			=> 'まだこのトピックで投稿を行っていません。',
	'AP_POLL_VOTES_ARE_VISIBLE'			=> '投票後にあなたの投票が見えるようになります。',
	'AP_POLL_DONT_VOTE_SHOW_RESULTS'		=> '投票せずに結果を表示する',
	'AP_POLL_RESULTS_ARE_ORDERED'			=> '投票結果は得票数の多い順に並びます',
	'AP_POLL_TYPE_MISMATCH'				=> '一貫性のない投票データのため内部エラーが発生しました',
	'AP_VOTE_CHANGED'				=> '投票内容を変更する権限がありません。',
	'AP_TOO_MANY_VOTES'				=> '投票オプション数が多すぎます。', // You have tried to assign too many votes.

	'AP_MAX_VOTES_SELECT'					=> array(
		1	=> '<strong>%1$d</strong> オプションに最大 <strong>%2$d</strong> 票を投じることができます',
		2	=> '<strong>%1$d</strong> オプションの中から最大 <strong>%2$d</strong> 票を投じることができます',
	),
	'AP_GUEST_VOTES'						=> array(
		1	=> 'ゲスト票：%d 票', // %d vote from guest
		2	=> 'ゲスト票：%d 票', // %d votes from guests
	),

// Posting
	'AP_POLL_VOTES_HIDE'				=> '投票結果を非表示にする',
	'AP_POLL_VOTES_HIDE_EXPLAIN'			=> 'これを有効にすると、投票結果は投票が終了するまで非表示になります。この項目は特定の期限設定を持つ場合のみ動作します。',
	'AP_POLL_VOTERS_SHOW'				=> '投票者を表示する',
	'AP_POLL_VOTERS_SHOW_EXPLAIN'			=> 'これを有効にすると、閲覧権限を持つユーザーにのみ投票者が表示されます。投票結果を非表示にしている場合は投票者も非表示になります。',
	'AP_POLL_VOTERS_LIMIT'				=> '投票対象者を制限する',
	'AP_POLL_VOTERS_LIMIT_EXPLAIN'			=> 'これを有効にすると、このトピックに記事を投稿した人だけが投票できます',
	'AP_POLL_SHOW_ORDERED'				=> '得票順に表示する',
	'AP_POLL_SHOW_ORDERED_EXPLAIN'			=> '投票結果が表示されるとき、得票数の降順に並びます（得票数の高いもの順）。未選択の場合は投票オプションの順序が使用されます。',
	'AP_RUN_POLL'					=> '投票期間',
	'AP_RUN_POLL_FOR'				=> '日数指定',
	'AP_RUN_POLL_UNTIL'				=> '終了日指定',
	'AP_RUN_POLL_INDEFINITELY'			=> '無期限',
	'AP_POLL_END'					=> '投票終了',
	'AP_POLL_END_EXPLAIN'				=> '投票終了日時を指定してください。これらのフィールドのいずれかが指定されている場合、投票の期間を上書きします。日付フィールドは空のままで、デフォルトは現在の投票終了日です。時間フィールドは空のままで、デフォルトは0です。投票期間を使用するために戻す場合は、これらすべてのフィールドを消去する必要があります。',

	'AP_YYYY_MM_DD'					=> 'YYYY-MM-DD',
	'AP_HH_MM'					=> 'HH:MM',
	'AP_POLL_END_INVALID'				=> '指定した日/時に誤りがあります',
	'AP_POLL_TOTAL_LOWER_MAX_VOTES'			=> '1つのオプションの投票数の上限は、すべてのオプションに分配する合計投票数を超えることはできません',
	'AP_POLL_TOTAL_LOWER_MAX_OPTS'			=> '投票可能なオプション数の上限は、すべてのオプションに分配する合計投票数を超えることはできません',

	'AP_POLL_MAX_VALUE'				=> '最大投票数',
	'AP_POLL_MAX_VALUE_EXPLAIN'			=> '投票者が1つのオプションに付与できる最大投票数です',
	'AP_POLL_TOTAL_VALUE'				=> '投票者数',
	'AP_POLL_TOTAL_VALUE_EXPLAIN'			=> '投票者がすべてのオプションに分配する可能性のある投票の総数です',

	'AP_VOTE_GREATER_THAN_MAXVALUE'			=> '許可されている最大値を超える投票数を割り当てることはできません',
));
