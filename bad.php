<?php
function cek_badword($term) {
	$bad = "agcmasterclass";
	$badwords = explode(',', $bad);
	$term = sanitize_title2($term);
	$terms = explode('-', $term);
	foreach($terms as $t) {
		if (in_array(strtolower($t), $badwords)) {
			return true;
		}
	}
}
?>