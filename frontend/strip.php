
<link type="text/css" rel="stylesheet" href="strip.css" />
<?php
function stripGraph($topic,$items,$weights){
	echo '<dl>
	<dt>'.
    $topic.
	'</dt>';
	for($i=0;$i<count($items);$i++){
		echo
		'<dd class="percentage percentage-'.$weights[$i].'"><span class="text">'.$items[$i].'</span></dd>';
	}
	echo '</dl>';
}
//stripGraph("test",["a","b","c"],[1,2,97]);
?>