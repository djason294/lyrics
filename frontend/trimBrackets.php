<?php
function trimBrackets($subject){
	$pattern = '/\\(.*\\)/';
	if(preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE))
	return str_replace($matches[0][0],"",$subject);
else
	return $subject;
}
?>