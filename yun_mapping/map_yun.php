<?php
	ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
	error_reporting(E_ALL & ~E_NOTICE);
?>

<?php
	set_time_limit(0);
	ini_set('memory_limit', '3072M');

	$linkID=mysql_connect('localhost','root','');
	mysql_select_db('mojim');
	mysql_query("SET NAMES 'utf8'");
	include("yun_array.php");

	/*
	function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
	}
	*/
	function startsWith($haystack,$needle){
		
		$tmp = preg_split("/(:|：)/",$haystack);
		return trim($tmp[0]) == $needle ? true:false;
	}
	function readlines($str){
		$lines = preg_split("/\n/", $str);
		return $lines;

	}



	//parse from sql
	$str_sql="select songID, lyric from song ";
	echo $str_sql."<br/>";
	$result = mysql_query($str_sql,$linkID);
	while($resultArray = mysql_fetch_array($result)){
				
		$id = $resultArray[0];
		echo $id."<br/>";
		$lyric = $resultArray[1];
		echo $lyric."<br/>";
		//find yun
		$lines = readlines($lyric);
		print_r($lines);
		//test
		echo "testing system ready"."<br/><br/>";
	//	$lines = readlines("a媽祖你媽媽幹嘛幹你祖媽去去\r\n a賣歌啊內打我祖媽\r\n");
		$yun_count_tmp_array=array();
		for($i=0;$i<count($lines);$i++){
			$one_line=$lines[$i];
			$one_line = trim($one_line);
			$line_length = mb_strlen($one_line);
			$last_char=mb_substr($one_line,$line_length-1,$line_length-1 ,"utf-8");
		//	echo "韻腳 : ".$last_char."<br/>";
		//	echo "yun : ".$yun[$last_char]."</br>";
			if(!($yun[$last_char]=="")) $yun_count_tmp_array[$yun[$last_char]]+=1;
		}
		
		arsort($yun_count_tmp_array);
		$count_yun=0;
		$yun_result="";
		foreach($yun_count_tmp_array as $key => $value){
			echo "韻腳".$key."出現".$value."次<br/>";
			if($count_yun<3)$yun_result=$yun_result."%".$key;
			$count_yun=$count_yun+1;
		}


		$str_sql="Update song SET yun= '".$yun_result."' WHERE songID = ".$id;
	  	echo $str_sql."<br/>";
		mysql_query($str_sql,$linkID);
	}


?>