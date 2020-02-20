/**
 *
 * Advanced Polls
 *
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 */

$(document).ready(function () {
	// replace the ajax callback for poll votes if votes are hidden
	if ($.wolfsblvt.advancedpoll_json_data.wolfsblvt_poll_votes_hide_topic) {
		phpbb.addAjaxCallback('vote_poll', $.wolfsblvt.override_callback_advancedpolls_vote_poll_hidden);
	}

	// extend the ajax callback for poll votes if voters should be shown
	if ($.wolfsblvt.advancedpoll_json_data.wolfsblvt_poll_voters_show_topic && !$.wolfsblvt.advancedpoll_json_data.wolfsblvt_poll_votes_hide_topic) {
		var old_function = phpbb.ajaxCallbacks['vote_poll'];
		//phpbb.addAjaxCallback('vote_poll', function (res) { old_function(res); $.wolfsblvt.extend_callback_advancedpolls_vote_poll_show_voters(res); });
		phpbb.addAjaxCallback('vote_poll', function (res) { old_function.call(this, res); $.wolfsblvt.extend_callback_advancedpolls_vote_poll_show_voters(res); });
	}

	// Modify the "view results" link to set the "don't want to vote"
	if ($.wolfsblvt.advancedpoll_json_data.wolfsblvt_poll_no_vote) {
		$('.poll_view_results a').click(function () {
			var $poll = $(this).parents('.topic_poll');

			if (!$.wolfsblvt.advancedpoll_json_data.can_change_vote) {
				// Remove vote possibilitys
				$poll.find('.poll_max_votes, .poll_vote, .poll_option_select').hide(500);
			}

			// Set it in the database
			$.ajax({
				url:	location.href,
				data: {
					no_vote:	true,
				},
			});
		});
	}
});