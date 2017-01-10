<?php

function beacon_fbevent_link() {
	$link = '<a href="'.get_fbe_field('fb_event_uri').'" class="button">Ver evento en Facebook</a>';
	return $link;
}

function beacon_fbevent_date($format = 'long') {
	$start_date = get_fbe_date('event_starts','M j Y');
	$start_time = get_fbe_date('event_starts','g:i a ');
	$end_time = get_fbe_date('event_ends','g:i a ');

	if ($format == 'box') {
		$date = '<span class="box-day">'.date_i18n("j",strtotime($start_date) ).'</span>
			<span class="box-month">'.date_i18n("F",strtotime($start_date) ).'</span>';
	} else {
		$date = date_i18n("l, d F",strtotime($start_date) ).' @ '.$start_time.' - '.$end_time;
	}
	return $date;
}