<?php
include_once('db.php');
function availableTags($str){
	// 讀取所有歌手
	$sql = 'select distinct('.$str.') from song';
	$result = mysqli_query($linkid,$sql);
	$resultarray = mysqli_fetch_array($result);
	echo 'var availableTags = [';
	while($resultarray!=null){
		echo '"';
		echo $resultarray[$str].'",';
		$resultarray = mysqli_fetch_array($result);
	}
	echo '];';
}
?>