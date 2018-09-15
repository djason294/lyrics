<?php
	//todo 補上sql資訊
	set_time_limit(0);
	ini_set('memory_limit', '3072M');

	$linkID=mysql_connect('localhost','root','');
	mysql_select_db('mojim');
	mysql_query("SET NAMES 'utf8'");
	
	
	//抓出同名專輯ID
	$result = mysql_query("SELECT * FROM album",$linkID) or die('result Error: '.mysql_error()); 
	$same_name_album = array();
	$counter = 0;
	while($record=mysql_fetch_array ($result)){
		if(mb_strpos($record['albumSinger'],$record['albumName'])){
			$same_name_album[$counter]['albumID'] = $record['albumID'];
			$same_name_album[$counter]['albumSinger'] = $record['albumSinger'];
			$same_name_album[$counter]['albumUrl'] = $record['albumUrl'];
			$same_name_album[$counter]['albumName'] = $record['albumName'];
			$same_name_album[$counter]['albumYear'] = $record['albumYear'];
			$same_name_album[$counter]['albumLanguage'] = $record['albumLanguage'];
			$same_name_album[$counter]['publisherName'] = $record['publisherName'];
			$same_name_album[$counter]['type'] = $record['type'];
			
			echo $same_name_album[$counter]['albumID']."<br/>";
			echo $same_name_album[$counter]['albumSinger']."<br/>";
			echo $same_name_album[$counter]['albumUrl']."<br/>";
			echo $same_name_album[$counter]['albumName']."<br/>";
			echo $same_name_album[$counter]['albumYear']."<br/>";
			echo $same_name_album[$counter]['albumLanguage']."<br/>";
			echo $same_name_album[$counter]['publisherName']."<br/>";
			echo $same_name_album[$counter]['type']."<br/>";
			$counter = $counter + 1 ;
		}
	}
	
	

?>