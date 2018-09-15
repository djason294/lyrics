<?php
	//todo 補上sql資訊
	set_time_limit(0);
	ini_set('memory_limit', '3072M');

	$linkID=mysql_connect('localhost','root','');
	mysql_select_db('mojim');
	mysql_query("SET NAMES 'utf8'");
	
	
	//抓出同名專輯ID
		$result = mysql_query("SELECT * FROM album",$linkID) or die('result Error: ' . mysql_error()); 
		$same_name_album = array();
		$counter = 0;
		while($record=mysql_fetch_array ($result)){
		
			//判斷括號內多個姓名
			$tmp_albumSingerNames = return_extra_name($record['albumSinger']);
			$flag = false;
			for($i=0;$i<count($tmp_albumSingerNames);$i++){
				if(mb_strpos($record['albumName'],$tmp_albumSingerNames[0])) $flag = True;
			}
			
			if($flag){
				$same_name_album[$counter]['albumID'] = $record['albumID'];
				$same_name_album[$counter]['albumSinger'] = $tmp_albumSingerNames[0];
				$same_name_album[$counter]['albumUrl'] = $record['albumUrl'];
				$same_name_album[$counter]['albumName'] = $record['albumName'];
				$same_name_album[$counter]['albumYear'] = $record['albumYear'];
				$same_name_album[$counter]['albumLanguage'] = $record['albumLanguage'];
				$same_name_album[$counter]['publisherName'] = $record['publisherName'];
				$same_name_album[$counter]['type'] = $record['type'];
				
				//echo $same_name_album[$counter]['albumID']."<br/>";
				echo $same_name_album[$counter]['albumSinger']."\t"."\t".$same_name_album[$counter]['albumName']."<br/>";
				//echo $same_name_album[$counter]['albumUrl']."<br/>";
				//echo $same_name_album[$counter]['albumName']."<br/>";
				//echo $same_name_album[$counter]['albumYear']."<br/>";
				//echo $same_name_album[$counter]['albumLanguage']."<br/>";
				//echo $same_name_album[$counter]['publisherName']."<br/>";
				//echo $same_name_album[$counter]['type']."<br/>";
				$counter = $counter + 1 ;
			}
	}
	$stat = array();
	for($k = 0;$k<count($same_name_album);$k++){
		$tmp=$same_name_album[$k]['albumSinger'];
		$stat[$tmp]= 0;
	}
	for($k = 0;$k<count($same_name_album);$k++){
		$tmp=$same_name_album[$k]['albumSinger'];
		$stat[$tmp]= $stat[$tmp]+1;
	}
	arsort($stat);
	foreach($stat as $key => $value){
		echo $key."\t"."\t"."同名專輯有".$value."次<br/>";		
	}

	
	
	function return_extra_name($name){
		$tmp_albumSinger = preg_split("(\(|\)|\（|\）)",$name);
		$tmp_albumSingerName[0] = trim($tmp_albumSinger[0]);
		
		if(count($tmp_albumSinger)>1){
			$tmp_albumSingerName[1] = trim($tmp_albumSinger[1]);
		}
		return $tmp_albumSingerName;
	}
?>